<?php include("functions/top.php");

if (!isset($_GET['id']) && !isset($_GET['lead'])) {
    
    redirect("./articles");
} else {
    $data = $_GET['id'];
    $lead = $_GET['lead'];

    $sql = "DELETE FROM article WHERE `pidr` = '$lead'";
    $res = query($sql);

    $_SESSION['msg'] = "  Your articles was has been deleted successfully. ";

    redirect("./myarticles");
} 
?>   