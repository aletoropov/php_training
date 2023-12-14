<?php

/**
 * Фабрика классов
 */

 class ParserFactory 
 {
     public static function create($file)
     {
         $data = pathinfo($file);
         $classname = ucfirst($data['extension']) . 'Parser';

         if (class_exists($classname) && is_subclass_of($classname, 'ABaseParser')) {
             return new $classname($file);
         }
         
         throw new Exception('Некорректный файл');
     }
 }