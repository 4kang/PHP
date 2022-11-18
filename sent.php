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
   <div class="thanks">
     お問い合わせいただきありがとうございます。
   </div>
   <div class="display-contact">
     <div class="form-title">入力内容</div>

     <div class="form-item">■名前</div>
     <?php
      echo $_POST['name'];
     ?>
     <div class="form-item">■内容</div>
     <?php
      echo $_POST['body'];
     ?>
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