<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Event Master</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Event Master</div>
    <div class="header-right">
      <ul>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message">Thanks</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>

    </div>
  </div>

  <div class="footer">
    <div class="footer-left">
    </div>
  </div>
</body>
</html>
