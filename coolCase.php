<?php
$maxSize=get_cfg_var('upload_max_filesize'); //2M
$origMaxSize=$maxSize;
$l=$maxSize{strlen($maxSize)-1};
//G
//M
//K
//num
switch ($l){
   case 'G': 
       $maxSize*=1024;
   case 'M':
       $maxSize*=1024;
   case 'K':
       $maxSize*=1024;
}
echo "FYI: You can load file with size, than does not more than $maxSize bytes ($origMaxSize) to these server";

?>
