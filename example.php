<?php

require_once('BasicExcel/Reader.php');
\BasicExcel\Reader::registerAutoloader();
use \BasicExcel\Writer\Csv;

$data = array(
    array('Nr.', 'Name', 'E-Mail'),
    array(1, 'Jane Smith', 'jane.smith@fakemail.com'),
    array(2, 'John Smith', 'john.smith@fakemail.com'));

try {
    $csvwriter = new Csv(); //or \Xsl || \Xslx
    $csvwriter->fromArray($data);
    //$csvwriter->writeFile('myfilename.csv');
    //OR
    $csvwriter->download('myfilename.csv');
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}


