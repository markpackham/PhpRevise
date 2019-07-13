<?php
$path = '/dir0/dir1/myfile.php';
$file = 'file1.txt';

echo "Return filename: " . basename($path) . "<br>";

echo "Return filename without ext: " . basename($path, '.php') . "<br>";

echo "Return the dir name from path: " . dirname($path) . "<br>";

echo "Check if it is a file (won't work for folders): " . is_file($file) . "<br>";

echo "Check if file exists (also works on folders): " . file_exists($file) . "<br>";

echo "Get absolute path: " . realpath($file) . "<br>";

echo "Checks to see if file exists (it doesn't): " . file_exists('testdfsdsddsfsd') . "<br>";

echo "Check if writeable: " . is_writable($file) . "<br>";

echo "Check if readable: " . is_readable($file) . "<br>";

echo "Get file size: " . filesize($file) . "<br>";

// Write from file to string
echo "Write from file to string: " . file_get_contents($file) . "<br>";

/*
// Create a directory
mkdir('testing');

// Remove dir if empty
rmdir('testing');

// Copy file
//Take file1 and create file2
echo copy('file1.txt', 'file2.txt');

// Rename file2.txt to myfile.txt
rename('file2.txt', 'myfile.txt');

// Delete File
unlink('myfile.txt');

// Write string to file
echo file_put_contents($file, 'Goodbye World');

$current = file_get_contents($file);

$current .= ' Goodbye World';

file_put_contents($file, $current);

// Open File For Reading
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
fclose($handle);
*/

// Open file for writing
$handle = fopen('file2.txt', 'w');
$txt = "Mark Packham\n";
fwrite($handle, $txt);
$txt = "Paul Packham\n";
fwrite($handle, $txt);
$txt = "Richard Jack\n";
fwrite($handle, $txt);
fclose($handle);







