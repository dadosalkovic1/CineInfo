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
<a href="Home.php" class="nav-item" >Home</a>
<a href="Movies.php" class="nav-item" >Movies</a>
<a href="add.html" class="nav-item" >Add movie</a> 

</div>
</div>
<?php

$query= "SELECT * FROM movie LIMIT 1";

$result= mysqli_query($conn, $query);
if(!$result)
{
    echo 'Error Message:'. mysqli_error($conn). '<br>';
    exit;
    }

    while($record=mysqli_fetch_assoc($result)){
         
        echo '
        <div class="header-cont" onclick="refresh()" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), #151515),url('.$record['movie_image'].')">
        <h1 class="title-head">'.$record['title'].'</h1>
        <p class="desc-head">'.$record['movie_desc'].'</p> 
        <button class="btn-head"><a class="button-click" href="'.$record['trailer'].'" >Trailer</a> </button></div>
        ';

    }
    ?>
      <h1 id="rec">RECOMMENDED</h1>
    
    <div class="movie-list">


    <?php
    
  for($i=2;$i<7;$i++){
  $query= "SELECT * FROM movie where id='".$i."'";
  $result= mysqli_query($conn, $query);
  if(!$result)
  {
      echo 'Error Message:'. mysqli_error($conn). '<br>';
      exit;
      }
  
      while($record=mysqli_fetch_assoc($result)){
            
               
           echo ' 
           
        <div id="movie-list-item" class="tr" onmouseover="showelement(this)" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), #151515),url('.$record['movie_image'].')"  onmouseleave="hideelement(this)">
            <h2 class="Title" id="title-">'.$record['title'].'</h2>
            <button class="Info" id="btn-infotr"><a class="button-click" href="'.$record['trailer'].'" >Trailer</a></button>
            </div> ';
           
        
        }
    
}


?>
</div> 
</div> 
<script src="script.js"></script>
</body>
</html>