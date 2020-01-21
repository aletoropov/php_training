<?php

/**
 * Чтение и показ ссылок на все файлы в каталоге.
 * 
 * @author AlexandToropov
 */

$ignore_files = ['.', '..', '.git', '.gitignore', 'image.php'];

$files = scandir('.');

foreach ($files as $file) {
    if (in_array($file, $ignore_files)) {
        continue;
    }
    echo '<div><a href="'.$file.'">'.$file.'</div>';
}