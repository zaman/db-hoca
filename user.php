<?php require 'lib/config.php'; ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/my.css" />
  <title>kullanıcı kaydı</title>
</head>
<body>
<?php

	if (g56::exists('SESSION.error'))
		echo g56::get('SESSION.error');

?>
  <form action = "usermi.php" method = "POST">
	<dl>
	<fieldset>
	  <legend>MÜŞTERİ KAYIT EKRANI</legend>
	  <?php
	    require 'lib/util.php';
	    echo "<dt>İliniz :</dt>";
		echo "<dd>";
			listbox(iller(), 'il');
		echo "</dd>";	
	  ?>
	  <dt>Kullanıcı adınız :</dt>
	  <dd><input type = "text" name  = "username" ></dd>
	  <dt>Adınız :</dt>
	  <dd><input type = "text" name  = "ad" ></dd>
	  <dt>Soyadınız :</dt>
	  <dd><input type = "text" name  = "soyad" ></dd>
	  <dt>E-mail :</dt>
	  <dd><input type = "text" name  = "email" ></dd>
	  <dt>Şifre :</dt>
	  <dd><input type = "password" name  = "password"></dd>
	  <dt>Telefon :</dt>
	  <dd><input type = "text" name  = "telefon"></dd>
 	  <dt>Kredikart :</dt>
	  <dd><input type = "text" name  = "kredikart"></dd>
      <dd><input class="subbutton" type = "submit" value = "müşteri_kaydet" ></dd>
    </fieldset>
    </dl>
  </form>
</body>
</html>
