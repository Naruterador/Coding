<?php
/*

zlib://

bzip2://

zip://

*/




//Example on how to read an entry from a ZIP archive (file "bar.txt" inside "./foo.zip"):


$fp = fopen('zip://./foo.zip#bar.txt', 'r');
if( $fp ){
    while( !feof($fp) ){
        echo fread($fp, 8192);
    }
    fclose($fp);
}


//I had a difficult time finding how to use compress.zlib with an http resource so I thought I would post what I found

$file = 'compress.zlib://http://www.example.com/myarchive.gz';
$fr = fopen($file, 'rb');














?>