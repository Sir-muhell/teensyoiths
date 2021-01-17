<?php
include("functions/init.php");
if (isset($_POST['write']) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $title      = escape(clean($_POST['title']));
        $details    = escape(clean($_POST['det']));
        $quote      = escape(clean($_POST['cite']));

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
    $author     = $_SESSION['Username'];
    $authormail = $_SESSION['user'];
    $post_url   = str_replace(' ', '-', $title); 
    $pidr       = "tny-".rand(0, 9999);

    //insert details into db
    $sql = "INSERT INTO article(`sn`, `title`, `pix`, `details`, `quote`, `author`, `author_mail`, `view`, `datepost`, `post_url`, `pidr`)";
    $sql.= "VALUES('1', '$title', '$target_file', '$details', '$quote', '$author', '$authormail', '0', '$date', '$post_url', '$pidr')";
    $res = query($sql);

    $_SESSION['msg'] = "  Your articles was uploaded successfully. You can edit as well as delete it whenever you wish to.  ";

    redirect("./myarticles");

    } else {
        echo validation_errors("Sorry, there was an error uploading your file.");
    }
}
}
}
?>