<?php
if (isset($_FILES['file'])) {
    //The File mentioned in the form on uploadFile.html
    $file = $_FILES['file'];

    //File properties
    $file_name = $file['name'];
    //This is the location so we can later move the file
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    //White List our file extensions
    $file_ext = explode('.', $file_name);
    // end() always takes the end of an array (Set the internal pointer of an array to its last element)
    $file_ext = strtolower(end($file_ext));

    $allowed = array('txt', 'jpg');

    //in_array checks if a value exists in an array
    if (in_array($file_ext, $allowed)) {
        if ($file_error === 0) {
            //Make sure file less the given size
            if ($file_size <= 2000000) {
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                //Chuck new files into our uploads directory
                $file_destination = 'uploads/' . $file_name_new;

                if (move_uploaded_file($file_tmp, $file_destination)) {
                    echo $file_destination;
                }

            }
        }
    }
}