<?php
/*
CODED BY @ab2pentest
DATE: 2021/05/30
UPDATED: 2021/10/03
*/

define("LOG_DIRECTORY","df7b00948e631e9d658309e2c96576eb");
define("LOG_SEPARATOR","---------------------------------------------------------------------------------------------\n");

# THE PRINTED MESSAGE TO FOOL THE VISITOR.
echo "Not Found";

# GET ALL HEADERS.
foreach (getallheaders() as $name => $value) {
    // echo "$name: $value<br>";
	@file_put_contents(LOG_DIRECTORY."/HEADERS.log","{$name}: {$value}\n",FILE_APPEND);
}
@file_put_contents(LOG_DIRECTORY."/HEADERS.log",LOG_SEPARATOR,FILE_APPEND);

# GET ALL SERVER INFORMATIONS.
foreach(@$_SERVER as $key => $value){
	@file_put_contents(LOG_DIRECTORY."/SERVER.log","Key: {$key} | Value: {$value}\n",FILE_APPEND);
}
@file_put_contents(LOG_DIRECTORY."/SERVER.log",LOG_SEPARATOR,FILE_APPEND);

# GET ALL REQUESTS.
foreach($_REQUEST as $param => $value){
	@file_put_contents(LOG_DIRECTORY."/REQUEST.log","Parameter: {$param} | Value: {$value}\n",FILE_APPEND);
}
@file_put_contents(LOG_DIRECTORY."/REQUEST.log",LOG_SEPARATOR,FILE_APPEND);
?>
