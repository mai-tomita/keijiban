<!doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php 
    
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo->query("select*from 4each_keijiban");
    


?>
    
<!-- ヘッダー -->
    
<header>

     <div class="head_logo">
     <img src="4eachblog_logo.jpg"></div>
     
     <div class="head_box">
      <ul>
       <li>トップ</li>
       <li>プロフィール</li>
       <li>4eachについて</li>
       <li>登録フォーム</li>
       <li>問い合わせ</li>
       <li>その他</li>
      </ul>
     </div>
        
 </header>
    
    <main>
    <div class="main_container">

<!-- ひだり　-->
    
    <div class="left">
     <h1>プログラミングに役立つ掲示板</h1>
         
       
 
        
<div class="nyuryoku">
 <form method="post" action="insert.php">

    
    
    <h3>入力プロフィール</h3>
    
    <div>
     <label>ハンドルネーム</label>
     <br>
      <input type="text" class="text" size="35" name="handlename"> 
    </div>
    
     <div>
     <label>タイトル</label>
     <br>
      <input type="text"class="text" size="35" name="title"> 
    </div>
    
    
   <div>
       <label>コメント</label>
     <br>
      <textarea rows="7" cols="50" name="comment"></textarea>
    </div>
    
    <div>
    <input type="submit" class="soshin" value="投稿する">
    </div>
    
 </form>
</div>
  
        
      
<?php
    
 while ($row = $stmt->fetch()) {
     
  echo "<div class='hyoji'>";
    echo"<h3>".$row['title']."</h3>";
      echo"<p>";
      echo $row['comment'];
      echo "<div class='handlename'>posted by".$row['handlename']."</div>";
      echo "</p>";
      echo "</div>";
 }
?>
       
    </div> 
        

 
   
        
        
<!-- みぎ -->
        
<div class="right">
                
            
        <ul class="list1">
            <h2>人気の記事</h2>
            
            <li>PHPオススメ本</li>
            <li>PHP Myadminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
        </ul>
        
     <ul class="list1">
            <h2>オススメリンク</h2>
            
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        </ul>
                
        <ul class="list1">
            <h2>カテゴリ</h2>
            
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
         
      
     </div>
     </div>
    </main>  

<!-- フッター -->

<footer>
    
copyright©️internous | 4each blog the which provides A to Z about programming.
    
</footer>

    
    </body>
    
</html>