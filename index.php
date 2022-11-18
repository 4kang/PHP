<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="style.css">
 </head>

 <header>
  <div class="header-left">DMM WEBCAMP</div>
   <div class="header-right">
    <ul>
     <li>会社概要</li>
     <li>採用</li>
     <li class="selected">お問い合わせ</li>
    </ul>
   </div>
 </header>

 <body>
  <div class="main">
   <div class="contact-form">
    <div class="form-title">お問い合わせ</div>

    <!--フォーム作成のためformタグで囲う-->
    <form method="post" action="sent.php">
     <div class="form-item">名前</div>
     <input type="text" name="name">
     <div class="form-item">内容</div>
     <textarea name="body"></textarea>
     <input type="submit" value="送信"/>
    </form>
   </div>
  </div>

  <footer>
   <div class="footer-left">
    <ul>
     <li>会社概要</li>
     <li>採用</li>
     <li>お問い合わせ</li>
    </ul>
   </div>
  </footer>

 </body>
</html>