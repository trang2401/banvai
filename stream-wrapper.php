
<?php
if (in_array('compress.bzip2', stream_get_wrappers())) {
     echo 'compress.bzip2:// support enabled.';
 } else {
    echo 'compress.bzip2:// support not enabled.';
 }
?>