<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <script src="jquery-2.1.3.min.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="sample.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="header"><img src="image/movie.jpg" ></div>
    <div class="boxAll2">

      <div class="movie2">



    <?php
    $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
    $sql=$pdo->prepare('select * from product where id=?');
    $sql->execute([$_REQUEST['id']]);
    foreach($sql->fetchAll() as  $row){
      echo '<p><img src="image/',$row['id'],'.jpg" style="height:500px;"></p>';
      echo '<p class="deta">映画名：',$row['name'],'</p>';
      echo '<p class="deta">説明：',$row['talk'],'</p>';
      echo '<a href="kensaku2.php" class="deta">戻る</a>';
    }

     ?>

    </div>
   </div>


  </body>
</html>
