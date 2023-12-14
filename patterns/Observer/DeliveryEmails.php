<?php

/**
 * Класс издателя.
 */

 class DeliveryEmails implements IObservable
 {
    private $_title;
    private $_observers = [];
    private static $_instance;

    /**
     * Создание объекта 
     *
     * @return object
     */
    public static function getInstance()
    {
        if (empty(self::$_instance)) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    /**
     * Добавление статьи
     *
     * @param string $title
     * @return void
     */
    public function addNewArticle($title)
    {
        $this->_title = $title;
        $this->notifyObservers();
    }

    /**
     * Добавление подписчиков
     *
     * @param IObserver $obj
     * @return void
     */
    public function addObserver(IObserver $obj)
    {
        $this->_observers = $obj;
    }

    /**
     * Оповещение подписчиков
     *
     * @return void
     */
    public function notifyObservers()
    {
        foreach ($this->_observers as $observer) {
            $observer->notify();
        }
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
 }
