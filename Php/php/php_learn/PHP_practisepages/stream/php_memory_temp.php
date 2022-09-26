<?php
/*

php://memory 和 php://temp 是一个类似文件 包装器的数据流，允许读写临时数据。 两者的唯一区别是 php://memory 总是把数据储存在内存中， 而 php://temp 会在内存量达到预定义的限制后（默认是 2MB）存入临时文件中。 临时文件位置的决定和 sys_get_temp_dir() 的方式一致。

php://temp 的内存限制可通过添加 /maxmemory:NN 来控制，NN 是以字节为单位、保留在内存的最大数据量，超过则使用临时文件。

*/



//Set the limit to 5 MB.
$fiveMBs = 5 * 1024 * 1024;
$fp = fopen("php://temp/maxmemory:$fiveMBs", 'r+');

fputs($fp, "hello\n");

//Read what we have written.
rewind($fp);
echo stream_get_contents($fp);



/*

不能关闭stream流，否责就无法得到以前的内容了

file_put_contents('php://memory', 'PHP');
echo file_get_contents('php://memory');


*/


















?>