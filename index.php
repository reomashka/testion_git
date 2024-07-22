<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сессии и куки</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<main>
		<div class="container">

        <!-- #Если Куков в userName нет, то программа выводит newName.php, есть - noName.php -->
            <?php
            if (!isset($_COOKIE["userName"])) {
                include_once "newName.php";
            } else {
                include_once "noName.php";
            }
            ?>
		</div>
	</main>
</body>
</html>


