<?php 
$conn = mysqli_connect("localhost" , "root" ,"","login");
$fullname = $_POST["fullname"];
$sql = "SELECT nom_prenom FROM users_info WHERE nom_prenom = '$fullname'";
$query = mysqli_query($conn,$sql);
$fetch = mysqli_fetch_all($query);
if(!(empty($fetch))){
    
    echo "hey ".$fetch[0][0]."! welcome back.";
}else{
    echo "name doesn't exist";
}
?>
<button><a href="./login.php">back</a></button>
