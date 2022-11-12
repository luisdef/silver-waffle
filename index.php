<?php
$site_json = file_get_contents("site.json");
$content = json_decode($site_json, true);

$lang = "en";
if (isset($_GET["lang"]) && $_GET["lang"] == "pt") {
  $lang = "pt";
}

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OLIFX</title>
</head>
<body>
  <h1><?php echo $content['title'][$lang] ?></h1>

  <p><?php echo $content['paragraph'][$lang] ?></p>

  <a href="index.php?lang=pt">Português</a>
  <br>
  <a href="index.php">English</a>
</body>
</html>