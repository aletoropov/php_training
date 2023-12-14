<?php

/**
 * Интерфейс подписчика.  
 */

 interface IObserver 
 {
    public function notify(IObservable $obj, $title);
 }