<?php

if (!empty($_FILES['files']['name'][0])) {
    $files = $_FILES['files'];

    $uploaded = array();
    $failed = array();

    $allowed = array('txt', 'jpg');

    foreach ($files['name'] as $position => $file_name) {

        //File Properties
        $file_tmp = $files['tmp_name'][$position];
        $file_size = $files['size'][$position];
        $file_error = $files['error'][$position];
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        if (in_array($file_ext, $allowed)) {

            //Check for file error code
            if ($file_error === 0) {

                //Check file size
                if ($file_size <= 2000000) {

                    //We want the file to have a unique name when moved
                    $file_name_new = uniqid('', true) . '.' . $file_ext;
                    //Where file uploaded to
                    $file_destination = 'uploads/' . $file_name_new;

                    if (move_uploaded_file($file_tmp, $file_destination)) {
                        $uploaded[$position] = $file_destination;
                    } else {
                        $failed[$position] = "[{$file_name}] failed to upload";
                    }

                } else {
                    $failed[$position] = "[{$file_name}] is too large";
                }

            } else {
                $failed[$position] = "[{$file_name}] failed to upload, error code '{$file_error}'";
            }

        } else {
            $failed[$position] = "[{$file_name}] file extension '{$file_ext}' is not allowed";
        }
    }

    if (!empty($uploaded)) {
        echo "Success, file upload details<br>";
        print_r($uploaded);
    }

    if (!empty($failed)) {
        echo "Failure details<br>";
        print_r($failed);
    }
}