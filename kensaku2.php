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

    <div class="boxAll">



      <form action="kensaku2.php"method="post" class="form">
        <p class="kensaku">映画検索（ジャンルで選んでね）</p>
        <select name="keyword">
          <option value="" disabled selected>全部</option>
          <option value="冒険">冒険</option>
          <option value="アニメ">アニメ</option>
          <option value="恐怖">恐怖</option>
          <option value="ドラマ">ドラマ</option>
          <option value="感動">感動</option>
        </select>
      <input type="submit" value="検索">
    </form>

    <br>

    <div class="movie">
    <table>
    <?php
    echo '<th></th><th>映画名</th><th>説明</th>';
    $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
    if(isset($_REQUEST['keyword'])){
      $sql=$pdo->prepare('select * from product where category like ?');
      $sql->execute(['%'.$_REQUEST['keyword'].'%']);
    }else{
      $sql=$pdo->prepare('select * from product');
      $sql->execute([]);
    }

    foreach($sql->fetchAll() as $row){
      $id=$row['id'];
      echo '<tr>';
      echo '<td><img src="image/',$row['id'],'.jpg" style="width:200px;"></td>';
      echo '<td style="padding-left:20px;">';
      echo '<a href="detail.php?id=',$id,'">',$row['name'],'</a>';
      echo '</td>';
      echo '<td style="padding-left:20px">',$row['price'],'</td>';
      echo '</tr>';
    }
     ?>
   </table>
 </div>

 </div>



  </body>
</html>
