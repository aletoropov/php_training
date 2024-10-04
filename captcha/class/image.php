<?php
/**
 * генерация картинки Captcha
 *
 * @author Toropov Alexandr <toropovsite@yandex.ru>
 */

use class\Captcha;

require_once (__DIR__ . DIRECTORY_SEPARATOR . 'Captcha.php');

Captcha::generate();
