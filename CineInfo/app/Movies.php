<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">
    
    <title>Movie database</title>
</head>
<body>
<?php
require("connection.php");
?>

<div class="nav">
<div class="logo-div">
<p class="logo">CineInfo</p>
</div>
<div class="bars">
<a href="Home.php" class="nav-item" id="cont3">Home</a>
<a href="Movies.php" class="nav-item" id="cont3">Movies</a>
<a href="add.html" class="nav-item" id="cont2">Add movie</a>
<form >
<input type="text" name="search_title" id="search" placeholder="Movie title">
<input type="submit" name="search" id="srcbutton" value="Search" ></form>
</div>
</div>

<div class="movie-list1">
<?php
 
  if(!empty($_GET['search_title'])){
    if (isset($_GET['search'])) {
    $search=$_GET['search_title'];
    $movie_search=mysqli_query($conn, "SELECT * FROM movie where title LIKE '%$search%'");
    
    if(!$movie_search)
{
    echo 'Error Message:'. mysqli_error($conn). '<br>';
    exit;
    }
    else{
      while($record=mysqli_fetch_assoc($movie_search)){
        $id=$record['id'];
            echo '<div  class="movie" >   
    <img class="movie-image" src="'.$record['movie_image'].'">        
    <div class="movie-data">    
    <h2 class="movie-title" >'.$record['title'].'</h2><br>
    <p class="movie-desc">'.$record['movie_desc'].'</p>
    <br><br>
    <p class="movie-casts">Casts: '.$record['casts'].'</p>
    <p class="movie-directors">Director: '.$record['directors'].'</p>
    
    <p class="movie-writers">Writer: '.$record['writers'].'</p>
    
    </div>       
    <div class="buttons">
    
    <button class="btn" ><a class="button-click"  id="trailer"  href="'.$record['trailer'].'" >Trailer</a></button>
    <button class="btn" id="edit"><a class="button-click" id="update"  href="update.php?updateid='.$id.'&updatetitle='.$record['title'].'&updatewriters='.$record['writers'].'&updatedirectors='.$record['directors'].'&updatecasts='.$record['casts'].'&updatedesc='.$record['movie_desc'].'&updatetrailer='.$record['trailer'].'" >Edit</a></button>
    <button  class="btn" ><a class="button-click" id="delete" href="delete.php?deletedid='.$id.'" >Delete</a></button>
    
    </div>
    </div> ';}}
}

  }
  else{
$movie_id= mysqli_query($conn, "SELECT MAX(id) FROM movie");
while($row=mysqli_fetch_array($movie_id)){
$max_id = $row[0];
}

for($i=1;$i<$max_id+1;$i++){


$query= "SELECT * FROM movie where id='".$i."'";
$result= mysqli_query($conn, $query);
if(!$result)
{
  echo 'Error Message:'. mysqli_error($conn). '<br>';
  exit;
  }

  while($record=mysqli_fetch_assoc($result)){
    $id=$record['id'];
   
              echo '<div  class="movie" >   
              <img class="movie-image" src="'.$record['movie_image'].'">        
              <div class="movie-data">    
              <h2 class="movie-title" >'.$record['title'].'</h2><br>
              <p class="movie-desc">'.$record['movie_desc'].'</p>
              <br><br>
              <p class="movie-casts">Casts: '.$record['casts'].'</p>
              <p class="movie-directors">Director: '.$record['directors'].'</p>
              
              <p class="movie-writers">Writer: '.$record['writers'].'</p>
              
              </div>       
              <div class="buttons">
              
              <button class="btn" ><a class="button-click"  id="trailer"  href="'.$record['trailer'].'" >Trailer</a></button>
              <button class="btn" id="edit"><a class="button-click" id="update"  href="update.php?updateid='.$id.'&updatetitle='.$record['title'].'&updatewriters='.$record['writers'].'&updatedirectors='.$record['directors'].'&updatecasts='.$record['casts'].'&updatedesc='.$record['movie_desc'].'&updatetrailer='.$record['trailer'].'" >Edit</a></button>
              <button  class="btn" ><a class="button-click" id="delete" href="delete.php?deletedid='.$id.'" >Delete</a></button>
              
              </div>
              </div> ';
              }
}

  }
?>
        

</div>
<script src="script.js"></script>
</body>
</html>