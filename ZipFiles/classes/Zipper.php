<?php

//Notice classes files begin with a capital letter
class Zipper
{
    private $_files = array(),
        $_zip;

    public function __construct()
    {
        //The ZipArchive class is a file archive, compressed with Zip.
        $this->_zip = new ZipArchive;
    }

    public function add($input)
    {
        if (is_array($input)) {
            //merge one array with another
            $this->_files = array_merge($this->_files, $input);
        } else {
            $this->_files[] = $input;
        }
    }

    public function store($location = null)
    {
        //print_r($this->_files);
        //We get Array ( [0] => files/one.txt [1] => files/two.txt [2] => files/three.txt ) Visit the files folder to see the zipped file

        //Make sure we actually have files to zip and a location for them
        if (count($this->_files) && $location) {
            foreach ($this->_files as $index => $file) {
                if (!file_exists($file)) {
                    //files that don't exist will be removed
                    unset($this->_files[$index]);
                }
            }

            //open the zip
            //make sure it opens successfully
            if ($this->_zip->open($location, file_exists($location) ? ZipArchive::OVERWRITE : ZipArchive::CREATE)) {
                //loop through files and add to zip
                foreach ($this->_files as $file) {
                    //add file location and file name (both $file)
                    $this->_zip->addFile($file, $file);
                }
                //close zip
                $this->_zip->close();
            }

        }

    }
}

