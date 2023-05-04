
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">
    <title>Movie database</title>
</head>
<body>
    <div class="nav">
        <div class="logo-div">
        <p class="logo">CineInfo</p>
        </div>
        <div class="bars">
        <a href="Home.php" class="nav-item" >Home</a>
        <a href="Movies.php" class="nav-item" >Movies</a>
      
        </div>
        </div>


<div class="movie-cont">
    <div class="movie-info-add">
    <form  method="post" autocomplete="off" enctype="multipart/form-data">
        <input type="text" placeholder="Title" name="title"  class="text"  value="<?php $u_title=$_GET['updatetitle']; echo $u_title; ?>">
        <input type="text" placeholder="Writers" name="writers" class="text"  value="<?php $u_writers=$_GET['updatewriters']; echo $u_writers; ?>"><br>
        <input type="text" placeholder="Directors" name="directors" class="text"  value="<?php $u_directors=$_GET['updatedirectors']; echo $u_directors; ?>"><br>
        <input type="text" placeholder="Casts" name="casts" class="text"  value="<?php $u_casts=$_GET['updatecasts']; echo $u_casts; ?>"><br>
        <input type="text" placeholder="Description" name="desc" class="text"  value="<?php $u_desc=$_GET['updatedesc']; echo $u_desc; ?>"><br>
        <input type="text" placeholder="Trailer URL" name="trailer" class="text" value="<?php $u_trailer=$_GET['updatetrailer']; echo $u_trailer; ?>"><br>
        <input type="file" name="image" id="image" >
        <label class="fileLabel" for="image">Choose image</label>
        <input type="submit" name="upload" value="UPLOAD" >

    </form>
</div>
</div>

<?php





include("connection.php");




if (isset($_POST['upload'])) {
    $id=$_GET['updateid'];
    
    $file=$_FILES['image']['name'];
    $title=$_POST["title"];
    $writers=$_POST["writers"];
    $directors=$_POST["directors"];
    $casts=$_POST["casts"];
    $desc=addslashes($_POST["desc"]);
    $trailer=$_POST["trailer"];
    
    $query = " UPDATE `movie` SET `title`='$title',`writers`='$writers',`directors`='$directors',`casts`='$casts',`movie_desc`='$desc',`trailer`='$trailer',`movie_image`='$file' WHERE `id`='$id'";
    if(!empty($title) && !empty($writers) && !empty($directors)&& !empty($casts)&& !empty($desc)&& !empty($trailer)){
$res=$conn->query($query);
if ($res) {
    echo "Record updated successfully.";
move_uploaded_file($_FILES['image']['tmp_name'], "$file");

header('Location: http://' . $_SERVER['HTTP_HOST']. '/maturski/Home.php');
exit();
}
else
    die(mysqli_error($conn));

    }

else{
    die( "<script>alert('You must fill all fields.');
    window.location.href='/maturski/add.html';</script>");

}}
?>
    

   

<script src="/script.js"></script>
</body>
</html>