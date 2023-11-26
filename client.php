<?php
$binaryType = $_GET["binaryType"];
$fileName = $_GET["fileName"];
$crc = $_GET["crc"];

if($fileName !== "rs2client.exe")
	die("Cannot download files other than 'rs2client.exe'");

if($fileName === "rs2client.exe" && file_exists($fileName)){
	header("Content-type: application/octet-stream");
	header("Server: JAGeX/3.1");
	header("Content-Disposition: filename=rs2client.exe");
	header("Content-Length: " . filesize($fileName));
	readfile("rs2client.exe");
} else {
	echo "File not found";
}
?>
