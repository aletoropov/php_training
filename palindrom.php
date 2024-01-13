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

 $str3 = "bb";

 if (isPalindrome($str3)) {
     echo $str3 . ' - палиндром!<br>';
 } else {
     echo $str3 . ' - не палиндром!<br>';
 }