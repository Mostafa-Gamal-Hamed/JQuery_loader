<?php
if(isset($_FILES['file'])){
    $file = $_FILES['file'];

    // Check for errors
    if($file['error'] !== UPLOAD_ERR_OK) {
        switch ($file['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $message = 'Failed File size exceeds the limit.';
                break;
            case UPLOAD_ERR_PARTIAL:
                $message = 'Failed The file was only partially uploaded.';
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = 'Failed No file was uploaded.';
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $message = 'Failed Missing temporary folder.';
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $message = 'Failed Failed to write file to disk.';
                break;
            case UPLOAD_ERR_EXTENSION:
                $message = 'Failed A PHP extension stopped the file upload.';
                break;
            default:
                $message = 'Failed Unknown error occurred.';
                break;
        }
        echo $message;
    } else {
        $fileName    = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $uploadPath  = 'uploads/' . $fileName;
        
        if(move_uploaded_file($fileTmpName, $uploadPath)){
            echo $uploadPath ;
        } else {
            echo "Failed to upload file.";
        }
    }
} else {
    echo "Failed No file uploaded.";
}

