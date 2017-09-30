
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

  </div>

</div>

  </body>
</html>
