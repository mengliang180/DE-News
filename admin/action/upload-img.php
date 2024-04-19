<?php
$res = array(); // Initialize the response array
if (isset($_FILES['txt-file'])) { // Check if a file is uploaded
    $file = $_FILES['txt-file'];
    $img_name = $file['name'];
    $tmp_name = $file['tmp_name'];
    $size = $file['size'];
    $type_file = pathinfo($img_name, PATHINFO_EXTENSION);
    $new_img = time() . rand(10, 999999);

    $check = getimagesize($tmp_name);
    
    $res['send'] = false; // Default value for sending response

    if ($check !== false) { // Check if the file is an image
        if ($size < 1542299) { // Check file size
            if ($type_file == 'jpg' || $type_file == 'png' || $type_file == 'gif') { // Check file type
                // Move the uploaded file to the desired directory
                move_uploaded_file($tmp_name, "../img/".$new_img.".".$type_file);
                $res['img_name'] = "img/" . $new_img . "." . $type_file; // Set the image name in the response
                $res['send'] = true; // Update send status to true
            } else {
                $res['msg'] = 'Invalid file type'; // Set error message for invalid file type
            }
        } else {
            $res['msg'] = 'File size is too large'; // Set error message for file size too large
        }
    } else {
        $res['msg'] = 'Invalid file'; // Set error message for invalid file
    }
}
// Output the response as JSON
echo json_encode($res);
?>