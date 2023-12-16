<?php

/**
 * Адаптер (Adapter) структурный шаблон проектирования, при котором объект,
 * обеспечивающий взаимодействие двух других объектов, один из которых использует, а
 * другой предоставляет несовместимый с первым интерфейс.
 */

 require_once(__DIR__ . DIRECTORY_SEPARATOR . 'I_VkAdapter.php');
 require_once(__DIR__ . DIRECTORY_SEPARATOR . 'VkApi1.php');
 require_once(__DIR__ . DIRECTORY_SEPARATOR . 'VkApiNew.php');
 require_once(__DIR__ . DIRECTORY_SEPARATOR . 'VkAdapter.php');

 $vk_adapter = new VkAdapter(new VkApiNew);
 $vk_adapter->postOnWall('Hello world!');