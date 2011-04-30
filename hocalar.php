<?php require 'lib/config.php'; ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/my.css" />
  <title> ok </title>
</head>
<body>
<p class = 'info'> <strong>İşleminiz aşağıdaki bilgilere göre başarıyla gerçekleştirildi </strong> </p>
<dl>
	<fieldset>	
	<?php
		$_get = g56::get('SESSION.ok');
		foreach ($_get as $head => $info)
			echo "<legend>". $head ."</legend>";
		foreach ($info as $indis => $array) {
			echo "<dt>--------------------</dt><br/>";
			foreach ($array as $key => $value)
				if ($key == 'hoca_id')
					$hoca = $value;
				else
					echo "<dt>$key : $value</dt><br/>";
			echo '<form action = "hocacsv.php" method = "post" >
				  <input type="hidden" name="hoca" value="' . $hoca . '">
				  <input type="submit" value = "ayrıtılı bilgi..">
				  </form>';
		}
		
	?>
	</fieldset>
</dl>
</body>
</html>
