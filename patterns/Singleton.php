<?php

/**
 * Шаблон - Singleton.
 * Одиночка (Singleton) относится к порождающим паттернам, гарантирует, что у класса 
 * есть только один экземпляр, и предоставляет к нему глобальную точку доступа.
 * 
 * @author Toropov Alexandr <toropovsite@yandex.ru>
 */

class Singleton
{
    static private $self = null;

    /**
     * Приватный конструктор для запрета создания объекта класса.
     */
    private function __construct() {}

    /**
    * Пустой приватный метод clone для запрета клонирования объекта
    */
    private function __clone() {}

    private function __wakeup() {}

    
    /**
     * Создаем объект класса и возвращаем его.
     *
     * @return object
     */
    public static function getInstance()
    {
        if (self::$self == null) {
            self::$self = new Singleton();
        }
        return self::$self;
    }    
    
}