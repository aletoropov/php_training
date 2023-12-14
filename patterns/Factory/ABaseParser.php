<?php

/**
 * Пример реализации шаблона проектирование Factory
 * 
 * @author Toropov Alexandr <toropovsite@yandex.ru>
 */

abstract class ABaseParser
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    abstract function read();
}