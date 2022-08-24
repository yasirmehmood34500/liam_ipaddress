<?php 

$fileContents= file_get_contents("export_xml.xml");

$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

$fileContents = trim(str_replace('"', "'", $fileContents));

$simpleXml = simplexml_load_string($fileContents);

echo $json = json_encode($simpleXml);

?>