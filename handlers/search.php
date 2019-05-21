<?php 

$db = mysqli_connect('localhost', 'root' ,'', '13_12_18_khalafov'); 



mysqli_set_charset( $db ,"utf8");


include($_SERVER['DOCUMENT_ROOT'] . '/functions/debug.php');
include($_SERVER['DOCUMENT_ROOT'] . '/bloks/head.php');
include($_SERVER['DOCUMENT_ROOT'] . '/bloks/picture.php');
include($_SERVER['DOCUMENT_ROOT'] . '/bloks/slider.php');


?>


<?php

$error = '';

if ( !empty($_GET) ) {
    if ( !empty($_GET['search']) ) {
        if (strlen($_GET['search']) > 3) {
            $query = "SELECT    `excursion`.`excursion_name` AS `excu`,
                                `excursion`.`user_id` AS `user_order_id`,
                                `users`.`id` AS `user_db_id`,
                                `users`.`name` AS `users_id`
                        FROM    `excursion` 
                        LEFT JOIN `users`
                        ON        `excursion`.`user_id` = `users`.`id`
                        WHERE     '{$_GET['search']}' = `excursion`.`excursion_name`
                        -- LIKE      `Национальный парк Фудзи-Хаконэ-Изу`
                        -- LIKE '%{$_GET['search']}%' ";
            $result = mysqli_query($db,  $query);
            while ($result_array = mysqli_fetch_assoc($result)) {
                d($result_array);
            }
        if ($_GET['search'] !== 'Национальный парк Фудзи-Хаконэ-Изу' && 
            $_GET['search'] !== 'Асакуса и парк Уэно'&&
            $_GET['search'] !=='Традиционный Токио'&&
            $_GET['search'] !=='Токио на весь день') {
            $error = 'такой экскурсии нет';
        }
        
        } else {
            $error = 'Длина должна быть больше 3-х';
        }
    } else {
        $error = 'надо бы что то вписать';
    }
}

// else {
//     $error = 'Такой экскурсии не существует';
// }

// if ($_GET['search'] !== `excursion`.`excursion_name`) {
//     $error = 'эта экскурсия не существует';
// } 

?>

<div class='wrapper'>
<form method='GET' action="">
    <input type="text" name='search'>
    <input type="submit" value='Найти'>
</form>
<div class = "error"><?=$error?></div>
</div>





