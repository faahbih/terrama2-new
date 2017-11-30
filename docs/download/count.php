
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
</head>
<body>

	<?php

	$hit_count = @file_get_contents('count_file.txt');
	$hit_count++;
	@file_put_contents('count_file.txt', $hit_count);

	header('docs/download/terrama2-4.0.0-rc2-linux-x64-ubuntu-16.04.deb');

	// $hit_count = @file_get_contents('count_file.txt');
	// echo $hit_count;

	?>
	
</body>
</html>

<!-- http://www.kavoir.com/2010/05/simplest-php-hit-counter-or-download-counter-count-the-number-of-times-of-access-visits-or-downloads.html -->


<!-- curl https://api.github.com/repos/faahbih/wordpress-tutorial/releases pelo postman-->