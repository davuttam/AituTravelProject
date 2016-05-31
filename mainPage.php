<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
</head>
<body>
    <?php include_once 'databaseConnection.php'; 
    $count=mysql_num_rows($resultHomeBanner);
    $i=0;
    $flag=1;
    ?>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      
        <?php while($count--){
            if($i)
                echo '<li data-target="#myCarousel" data-slide-to='.$i.'></li>';
            else
                echo'<li data-target="#myCarousel" data-slide-to='.$i.' class="active"></li>';
            $i++;
        }
    echo '</ol>
    <div class="carousel-inner" role="listbox">';
    while($row=mysql_fetch_array($resultHomeBanner)){ 
        if($flag){
    echo '<div class="item active">
          <img src='.$row['bannerPath'].' alt='.$row['bannerName'].' width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>'.$row['description_img'].'</p>
        </div>
        </div>';
    $flag=0;
        }
        else{
            echo '<div class="item">
        <img src='.$row['bannerPath'].' alt='.$row['bannerName'].' width="460" height="345">
        <div class="carousel-caption">
          <h3>'.$row['bannerName'].' </h3>
          <p>'.$row['description_img'].'</p>
        </div>
      </div>';
           }
           }?>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    
   
  </div>
    
   <?php include_once 'travel_imgs.php'; ?>
    
    
    


</body>
</html>
