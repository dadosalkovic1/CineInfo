<?php





require("connection.php");
/*
'$sql="INSERT INTO movie(title,writers,directors,casts,movie_desc)values(?,?,?,?,?)";


$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}


mysqli_stmt_bind_param($stmt,"sssss",$title,$writers,$directors,$casts,$desc);

mysqli_stmt_execute($stmt);

echo "data saved";

*/
if (isset($_POST['upload'])) {
$title=$_POST["title"];
$writers=$_POST["writers"];
$directors=$_POST["directors"];
$casts=$_POST["casts"];
$desc=addslashes($_POST["desc"]);
$trailer=$_POST["trailer"];
$file=$_FILES['image']['name'];

    $query = "INSERT INTO movie(title,writers,directors,casts,movie_desc,trailer,movie_image) VALUES ('$title','$writers','$directors','$casts','$desc','$trailer','$file')";
    if(!empty($title) && !empty($writers) && !empty($directors)&& !empty($casts)&& !empty($desc)&& !empty($trailer)){
$res=mysqli_query($conn, $query);
if ($res) {
    $img="/img";
move_uploaded_file($_FILES['image']['tmp_name'], "$file");


header('Location: http://' . $_SERVER['HTTP_HOST']. '/maturski/Movies.php');
exit();

}
else
    die(mysqli_error($conn));

    }

else{
    die( "<script>alert('You must fill all fields.');
    window.location.href='/maturski/add.html';</script>");

}}