<?php

/**
 * Наблюдатель (Observer) паттерн поведения, определяет зависимость типа «один ко
 * многим» между объектами таким образом, что при изменении состояния одного объекта
 * все зависящие от него оповещаются об этом и автоматически обновляются.
 */

require('IObserver.php');
require('IObservable.php');
require('DeliveryEmails.php');
require('User.php');

 $vasya = new User('user@user.ru');
 $petya = new User('petya@mail.com');
 DeliveryEmails::getInstance()->addNewArticle('Свежие новости');