<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 29.10.2016
 * Time: 10:53
 *//**
 * Подключаем модуль config.php включающий массив со входом в базу
 * данных и основной html код для страницы - template(main.php)
 * Внутри конфигаПодключаем __autoload для загрузки любого класса,
 * который находится в директории library
 */
include_once './config/config.php';

/**
 * Смысл этого в получении GET запроса со строки index.php, если это
 * начальная страница - он пуст($action = NULL), значит получаем
 * исходное значение $action = showsongs;
 *
 */
$action =  filter_input(INPUT_GET, 'action');
if(!$action){
    $action='showcatalogs';
}
/**
 * Теперь самое интересное, получаем экземпляр класса Action, содержащий
 * в себе $template(main.php) и $db - массив дл подсоединения к БД, в
 * результате чего согласно конструктору получаем 2 свойства - temmplate
 * и MainStorage, являющийся свойством класса Action и одновременно
 * экземпляром класса MainStorage.
 * Теперь имея GET запрос сверху($action) мы спрашиваем есть ли функция
 * полученная в GET запросе - в классе Action, если нет - то запустится
 * опять showcatalogs, если есть - то запустится функция, одноименнаая GET
 * запросу. Т.е. мы всегда будем находится на главной странице, а функции
 * будут срабатывать согласно полученного GET запроса после нажатия
 *
 */
$action_obj=new Action($template, $db);
if(!method_exists($action_obj, $action)){
    $action='showcatalogs';
}
/**
 * Теперь главный запрос, который характеризуется обращением к экземпляру
 * класса по GET запросу, полученному после нажатия на кнопку формы.Получается
 * ситуация типа : Начало страницы - index.php, за счет отсутствия GET
 * элементов $action присваивается NULL, из-за этого срабатывает условие
 * $action='showcatalogs' и срабатывает функция $action_obj->$action() по
 * принципу $action_obj->showcatalogs(); Далее во всех формах переходы
 * идут по принципу $_SERVER['PHP_SELF']?action=editform" всегда
 * указывая какое-либо GET значение, из-за чего мы всегда будем на странице
 * index.php, но с GET запросом, который опять будет считываться на этой
 * странице и вызывать соответствующую функцию
 */
$action_obj->$action();