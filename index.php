<?php
$lang = "en-us";
if (isset($_GET["lang"]) && $_GET["lang"] == "pt-br") {
  $lang = "pt-br";
}

$file_content = file_get_contents("assets/content/{$lang}.json");
$content = json_decode($file_content, true);
?>

<!DOCTYPE html>
<html lang="<?php echo $content["language"] ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $content["element"]["title"] ?></title>
</head>
<body>
  <h1><?php echo $content["element"]["title"] ?></h1>

  <p><?php echo $content["element"]["text"] ?></p>

  <a href="index.php?lang=pt-br">Português</a>
  <br>
  <a href="index.php">English</a>
</body>
</html>