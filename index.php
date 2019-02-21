<!doctype html>
  <html>
    <head>
        <meta charset="utf-8">
        <title>부자되기 프로젝트</title>
        <style>
        h1
        {
            font:bold 50px Dotum;
            text-align : center;
        }
        </style>
        <link rel="stylesheet" href="rich.css">
    </head>
    <body>

          <a href="index.php"><h1>부자되기 프로젝트</h1><br></a>
          <nav>
              <ul>
                  <li><a href="index.php?id=whomi">나는 누구인가</a></li>
                  <li><a href="index.php?id=whereinow">나의 연대기</a></li>
                  <li><a href="index.php?id=whyrich">왜 부자가 되려하는가</a></li>
                  <li><a href="index.php?id=howrich">어떻게 부자가 될 것인가</a></li>
                  <li><a href="index.php?id=ifrich">부자가 된다면 나는?</a></li>
                  <li><a href="index.php?id=now">웹을위해서</a></li>
                  <li><a href="index.php?id=text">자격증</a></li>
                  <br><br>
              </ul>
          </nav>
          <?php
                echo file_get_contents("richdata/".$_GET['id']);
           ?>
    </body>
  </html>
