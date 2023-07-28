<?php
// if(isset($_POST['submit'])){
    // print_r($_POST);

include("config.php");
$name = $_REQUEST['user_name'];
$email = $_REQUEST['user_email'];
$mobile_number= $_REQUEST['user_number'];
$address=$_REQUEST['user_address'];
$comments=$_REQUEST['user_comments'];
// $product=$_REQUEST['product'];
if (isset($_POST['product'])) {
    $product_name = $_POST['product'];
} else {
    
    $product_name = ""; 
}


if(isset($_POST['water_product'])){
    $water_product=$_REQUEST['water_product'];
}
else{
    $water_product= "";
}
if ($product_name == 'Solar PV Pannel' && isset($_POST['swimm_model'])) {
    // echo "solor <br>";
    $model = $_REQUEST['swimm_model'];
    $water_product= "";
} else if ($product_name == 'water heating' && isset($_POST['comm_model'])) {
    // echo "WH <br>";
    $model = $_REQUEST['comm_model'];
} else if (  $product_name == 'water heating' && isset($_POST['residential_model'])) {
    // echo "RM <br>";
    $model = $_REQUEST['residential_model'];
    // $water_product = "";
} 
else {
    $model = ""; 
}
// print_r($model);

$filename=$_FILES['fileToUpload']["name"];
$tempfile=$_FILES['fileToUpload']['tmp_name'];
$folder="upload_images/".$filename;

if(move_uploaded_file($tempfile,$folder)){
$sql = "INSERT INTO `registration` (name,email,mobile,address,comments,invoice,pid,product_name, model_name) VALUES 
('$name','$email','$mobile_number','$address','$comments','$filename','$product_name','$water_product',' $model')";

    
    if (mysqli_query($conn, $sql)) 
    {
        echo "Thanks For Submit";
        echo '<script>
            setTimeout(function() {
                window.location.href = "form1.php";
            }, 2000); // Redirect after 3 seconds
        </script>';
    }
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// header('location:form1.php');

?>