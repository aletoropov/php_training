<?php

/**
 * Чтение и показ ссылок на все файлы в каталоге.
 * 
 * @author AlexandToropov
 */

$ignore_files = ['.', '..', '.git', '.gitignore', 'image.php', '.idea', 'README.md'];

$files = scandir('.');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>PHP-training</title>
</head>
<body>   
 
<?php

foreach ($files as $file) {
    if (in_array($file, $ignore_files)) {
        continue;
    }
    echo '<div><a href="'.$file.'">'.$file.'</div>';
}

?>

</body>
</html>