<?php
include("functions/init.php");
if (isset($_POST['update']) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $title      = escape(clean($_POST['title']));
        $details    = escape(clean($_POST['det']));
        $quote      = escape(clean($_POST['cite']));
        $idn        = escape(clean($_POST['idn']));

if ($_FILES["fileToUpload"]["name"] != "") {
   
$target_dir = "artfile/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg") {
    echo validation_errors("Sorry, only JPG & JPEG files are allowed.");
    $uploadOk = 0;
} else {

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo validation_errors("Sorry, your file was not uploaded.");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
    //constants
    $date       = date("Y-m-d h:i:sa");
    $post_url   = str_replace(' ', '-', $title); 

    //update details into db
    $sql = "UPDATE article SET `title` = '$title', `pix` = '$target_file', `details` = '$details', `quote` = '$quote', `post_url` = '$post_url' WHERE `pidr` = '$idn'";
    $res = query($sql);

    $_SESSION['msg'] = "  Your articles was updated successfully. ";

    redirect("./myarticles");

    } else {
        echo validation_errors("Sorry, there was an error uploading your file.");
    }
} 
}
} else {

    //constants
    $date       = date("Y-m-d h:i:sa");
    $post_url   = str_replace(' ', '-', $title);
    
    //update details into db
    $sl = "UPDATE article SET `title` = '$title', `details` = '$details', `quote` = '$quote', `post_url` = '$post_url' WHERE `pidr` = '$idn'";
    $rs = query($sl);

    $_SESSION['msg'] = "  Your articles was updated successfully. ";

    redirect("./myarticles");

}
}
?>