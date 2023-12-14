<?php

/**
 * Интерфейс издателя.
 */

 interface IObservable
 {
    public function addObserver(IObserver $obj);
    
    public function notifyObservers();
 }