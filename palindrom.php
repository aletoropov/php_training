<?php

/**
 * Проверка слова, является ли оно палиндромом.
 * 
 * @author Alexandr Toropov <toropovsite@yandex.ru>
 */

/**
 * Функция проверки слова на палиндром 
 * 
 * @param string $word
 * @return bool
 */
 function isPalindrome(string $word): bool {
     if (strlen($word) <= 1) {
         return false;
     }
     //если последние и первые буквы не равны, возвращаем false
     if ($word[0] != $word[strlen($word) - 1]) {
         return false;
     }
     //обрезаем последний и первый символ в строке и переворачиваем ее
     $w = strrev(substr($word, 1));
     $w = substr($w, 1);

     $res = true;
     if ((!isPalindrome($w)) && (strlen($w) != 0)) {
         $res = false;
     }  
     return $res;
 }

 
 $str = "abgrrgba";

 if (isPalindrome($str)) {
     echo $str. ' - палиндром!<br>';
 } else {
     echo $str. ' - не палиндром!<br>';
 }

 $str2 = "afszpovsfa";

 if (isPalindrome($str2)) {
     echo $str2 . ' - палиндром!<br>';
 } else {
     echo $str2 . ' - не палиндром!<br>';
 }

/**
 * Функция для проверки слова на палиндром
 *
 * @param string $word
 * @return bool
 */
 function isPalindrome2(string $word): bool
 {
     $word = strtolower($word); //преобразуем слово в нижний регистр
     $word = str_replace(' ', '', $word); //удаляем пробелы из слова

     $reversed_word = strrev($word);

     if ($word == $reversed_word) {
         return true;
     } else {
         return false;
     }
 }

 $str3 = 'radar';

 if (isPalindrome2($str3)) {
     echo $str3 . ' - палиндром! <br>';
 } else {
     echo $str3 . ' - не палиндром!<br>';
 }

$str4 = 'arbuz';

if (isPalindrome2($str4)) {
    echo $str4 . ' - палиндром! <br>';
} else {
    echo $str4 . ' - не палиндром!<br>';
}