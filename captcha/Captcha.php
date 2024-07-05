<?php
/**
 * Class Captcha - для создания и проверки кодов
 *
 * @author Toropov Alexandr <toropovsite@yandex.ru>
 */

class Captcha
{
    /**
     * Ширина картинки CAPTCHA
     */
    const WIDTH = 100;

    /**
     * Высота картинки CAPTCHA
     */
    const HEIGHT = 50;

    /**
     * Размер шрифта на CAPTCHA
     */
    const FONTSIZE = 14;

    /**
     * Количество символом на CAPTCHA
     */
    const LENGTH = 4;

    /**
     * Длина фоновых линий
     */
    const BG_LENGTH = 20;

    /**
     * Шрифт используемый для текста CAPTCHA
     */
    const FONTS = __DIR__ . DIRECTORY_SEPARATOR . 'fonts' . DIRECTORY_SEPARATOR . 'font.ttf';

    private static array $letters = ['2', '3', '3', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'c', 'w', 'x', 'z'];
    private static array $colors = ['90', '110', '140', '170', '200', '220'];

    /**
     * Генерирует картинку CAPTCHA.
     */
    public static function generate()
    {
        if (!session_id()) {
            session_start();
        }

        $img = imagecreatetruecolor(self::WIDTH, self::HEIGHT);
        $bg = imagecolorallocate($img, '255', '255', '255');
        imagefill($img, 0, 0, $bg);

        //рисуем вспомогательные символы, для шума.
        for ($i = 0; $i < self::BG_LENGTH; $i++) {
            $color = imagecolorallocatealpha($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255), 100);
            $letter = self::$letters[rand(0, count(self::$letters)-1)];
            $size = mt_rand(self::FONTSIZE - 4, self::FONTSIZE + 2);
            imagettftext($img, $size, mt_rand(0, 45), mt_rand(self::WIDTH * 0.1, self::WIDTH * 0.9),
                         mt_rand(self::HEIGHT * 0.1, self::HEIGHT * 0.9), $color, self::FONTS, $letter);
        }

        $secure_code = ''; //здесь будем хранить код с картинки.

        //рисуем основные символы
        for ($i = 0; $i < self::LENGTH; $i++) {
            $color = imagecolorallocate($img, self::$colors[mt_rand(0, count(self::$colors) - 1)],
                                              self::$colors[mt_rand(0, count(self::$colors) - 1)],
                                              self::$colors[mt_rand(0, count(self::$colors) - 1)]);
            $letter = self::$letters[rand(0, count(self::$letters)-1)];
            $size = mt_rand(self::FONTSIZE * 2 - 2, self::FONTSIZE * 2 + 2);
            if (empty($x)) {
                $x = mt_rand(5, 15);
            } else {
                $x = $x + self::FONTSIZE + mt_rand(5, 10);
            }
            $y = self::HEIGHT * 2 / 3 + mt_rand(1, 5);
            $secure_code .= $letter;
            imagettftext($img, $size, mt_rand(5, 15), $x, $y, $color, self::FONTS, $letter);
        }
        $_SESSION['sec_code'] = $secure_code;
        header('Content-Type: image/png');
        imagepng($img);
        exit();
    }

    /**
     * Проверка кода CAPTCHA
     *
     *
     * @param $code
     * @return bool
     */
    public static function check($code): bool
    {
        if (!session_id()) {
            session_start();
        }
        return $code === $_SESSION['sec_code'];
    }
}