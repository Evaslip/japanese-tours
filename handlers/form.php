<?php
include($_SERVER['DOCUMENT_ROOT'] . '/functions/debug.php');
include($_SERVER['DOCUMENT_ROOT'] . '/bloks/head.php');
include($_SERVER['DOCUMENT_ROOT'] . '/bloks/picture.php');
include($_SERVER['DOCUMENT_ROOT'] . '/bloks/slider.php');
?>

<!-- запись в базу данных юзерс! -->
<?php
$excursionOption = false;
if (isset($_POST['excursion'])) {
    if ($_POST['excursion'] == 'Токио на весь день') {
        $excursionOption = 1;
    } elseif ($_POST['excursion'] == 'Национальный парк Фудзи-Хаконэ-Изу') {
        $excursionOption = 2;
    } elseif ($_POST['excursion'] == 'Асакуса и парк Уэно') {
        $excursionOption = 3;
    } elseif ($_POST['excursion'] == 'Традиционный Токио') {
        $excursionOption = 4;
    }
}

$quantityOption = false;
if (isset($_POST['quantity']) && $_POST['quantity'] != '0') {
    if ($_POST['quantity'] == '1-5') {
        $quantityOption = 1;
    } elseif ($_POST['quantity'] == '5-10') {
        $quantityOption = 2;
    } elseif ($_POST['quantity'] == '10-20') {
        $quantityOption = 3;
    } elseif ($_POST['quantity'] == 'Более 20') {
        $quantityOption = 4;
    }
}


 if ($excursionOption && $quantityOption) {
 $db = mysqli_connect('localhost', 'root', '', '13_12_18_khalafov');
 mysqli_set_charset($db , 'utf8');

 $userQuery = "INSERT INTO `users` (`name`,`email`,`phone`) VALUES ('{$_POST['fio']}','{$_POST['email']}','{$_POST['number']}');";

 $userResult = mysqli_query($db, $userQuery);
 if ( $userResult ) {
     $userId = mysqli_insert_id($db);
 } else {
     echo 'Не удалось сохранить данные. Попробуйе позже.';
     $userId = false;
 }


 if ($userId) {
    $orderQuery = "INSERT INTO `excursion` (`excursion_name`, `quantity`, `user_id`) 
                    VALUES ('{$_POST['excursion']}', '{$_POST['quantity']}', {$userId});";

    $orderResult = mysqli_query($db, $orderQuery);
    if ($orderResult) { 
        $orderId = mysqli_insert_id($db);
    } else {
        echo 'Не удалось сохранить заказ. Попробуйте снова.';
        $orderId = false;
    }
}

 }

?>



<!-- Вывод благодарности за выбранную экскурсию и картинки -->
<div class="page_form">
<?php
if ( isset($_POST['excursion']) ) {
    if (!empty($_POST['fio'])) {
        echo "Добрый день, {$_POST['fio']}. Благодарим за письмо, вы выбрали экскурсию : {$_POST['excursion']}. В ближайшее время, мы свяжемся с вами.";
    }
}
?>
</div>

<?php

if (isset($_POST['excursion'])) {
    if ($_POST['excursion'] == 'Токио на весь день') {
        echo "<div class=\"pic_form\"></div> <style>.pic_form {background: url(/photos/tour1.jpg) center center / contain no-repeat;}</style>";
    } elseif ($_POST['excursion'] == 'Национальный парк Фудзи-Хаконэ-Изу') {
        echo "<div class=\"pic_form\"></div> <style>.pic_form {background: url(/photos/fuji.jpg) center center / contain no-repeat;}</style>";
    } elseif ($_POST['excursion'] == 'Асакуса и парк Уэно') {
        echo "<div class=\"pic_form\"></div> <style>.pic_form {background: url(/photos/orig.jpg) center center / contain no-repeat;}</style>";
    } elseif ($_POST['excursion'] == 'Традиционный Токио') {
        echo "<div class=\"pic_form\"></div> <style>.pic_form {background: url(/photos/ceremonie-du-the-avec-enfants.jpg) center center / contain no-repeat;}</style>";
    } else {
        echo "Вы не выбрали экскурсию, поэтому нам нечего вам предложить.";
    }
} else {
    echo "Вы не выбрали экскурсию, поэтому нам нечего вам предложить.";
}

include($_SERVER['DOCUMENT_ROOT'] . '/bloks/footer.php');

?>