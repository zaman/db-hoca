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
  <form action = "hocami.php" method = "POST">
	<dl>
	<fieldset>
	  <legend>HOCA ARAMA EKRANI</legend>
	  <?php
	    require 'lib/util.php';

	    echo "<dt>Üniversiteler :</dt>";
		echo "<dd>";
			listbox_kv(uniler(), 'uni');
		echo "</dd>";	

		echo "<dt>Bölümler :</dt>";
		echo "<dd>";
			listbox_kv(bolumler(), 'bolum');
		echo "</dd>";	
	  ?>
      <dd><input class="subbutton" type = "submit" value = "hoca_ara" ></dd>
    </fieldset>
    </dl>
  </form>
</body>
</html>
