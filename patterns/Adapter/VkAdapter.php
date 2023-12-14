<?php

/**
 * Класс адаптера.
 */

 class VkAdapter
 {
     private $_vk_api;

     public function __construct($vk_api)
     {
         $this->_vk_api = $vk_api;
     }

     public function postOnWall($text)
     {
         $this->_vk_api->sendPost($text);
     }
 }