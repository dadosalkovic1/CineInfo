<?php





include("connection.php");



if(isset($_GET["deletedid"])){
    $id=$_GET['deletedid'];
    echo $id;
    $query = "DELETE FROM `movie` WHERE id='$id'";

$conn->query($query);

}


header('Location: http://' . $_SERVER['HTTP_HOST']. '/maturski/Movies.php');
exit();

?>