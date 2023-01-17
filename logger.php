<?php
/*
CODED BY @ab2pentest
DATE: 2021/05/30
UPDATED: 2023/01/13
*/

define("LOG_DIRECTORY","CHANGETHIS");

// The printed message to fool the visitor.
echo "Not Found";

// Define log file name
$log_file = 'requests_' . date('Y-m-d') . '.html';

// Get all headers
$headers = getallheaders();
$headers_data = array();
foreach ($headers as $name => $value) {
    $headers_data[] = array('name' => $name, 'value' => $value);
}

// Get all server informations
$server_data = array();
foreach ($_SERVER as $key => $value) {
    $server_data[] = array('key' => $key, 'value' => $value);
}

// Get all requests
$request_data = array();
foreach ($_REQUEST as $param => $value) {
    $request_data[] = array('param' => $param, 'value' => $value);
}

// Begin log file content
$log_data = '<!DOCTYPE html><html><head><style>table {border-collapse: collapse;}table, th, td {border: 1px solid black;}th, td {padding: 8px;}</style></head><body>';

// Add headers data to log
$log_data .= '<h2>Headers</h2>';
$log_data .= '<table>';
$log_data .= '<tr><th>Name</th><th>Value</th></tr>';
foreach ($headers_data as $data) {
    $log_data .= '<tr><td>' . $data['name'] . '</td><td>' . $data['value'] . '</td></tr>';
}
$log_data .= '</table>';

// Add server data to log
$log_data .= '<h2>Server</h2>';
$log_data .= '<table>';
$log_data .= '<tr><th>Key</th><th>Value</th></tr>';
foreach ($server_data as $data) {
    $log_data .= '<tr><td>' . $data['key'] . '</td><td>' . $data['value'] . '</td></tr>';
}
$log_data .= '</table>';

// Add request data to log
$log_data .= '<h2>Request</h2>';
$log_data .= '<table>';
$log_data .= '<tr><th>Parameter</th><th>Value</th></tr>';
foreach ($request_data as $data) {
    $log_data .= '<tr><td>' . $data['param'] . '</td><td>' . $data['value'] . '</td></tr>';
}
$log_data .= '</table>';

$log_data .= '</body></html>';

// Write log data to HTML file

@file_put_contents(LOG_DIRECTORY.$log_file,$log_data,FILE_APPEND);
?>
