<?php
include($_SERVER['DOCUMENT_ROOT'] . '/functions/debug.php');
include($_SERVER['DOCUMENT_ROOT'] . '/bloks/head.php');
include($_SERVER['DOCUMENT_ROOT'] . '/bloks/picture.php');
include($_SERVER['DOCUMENT_ROOT'] . '/bloks/slider.php');
?>

<div class="page_form">
<?php
if ( isset($_GET['excursion']) ) {
    if (!empty($_GET['fio'])) {
        echo "Добрый день {$_GET['fio']}, Благодарим за письмо, вы выбрали экскурсию : {$_GET['excursion']}. В ближайшее время, мы свяжемся с вами.";
    }
}
?>
</div>

<?php

if (isset($_GET['excursion'])) {
    if ($_GET['excursion'] == 'Токио на весь день') {
        echo "<div class=\"pic_form\"></div> <style>.pic_form {background: url(/photos/tour1.jpg) center center / contain no-repeat;}</style>";
    } elseif ($_GET['excursion'] == 'Национальный парк Фудзи-Хаконэ-Изу') {
        echo "<div class=\"pic_form\"></div> <style>.pic_form {background: url(/photos/fuji.jpg) center center / contain no-repeat;}</style>";
    } elseif ($_GET['excursion'] == 'Асакуса и парк Уэно') {
        echo "<div class=\"pic_form\"></div> <style>.pic_form {background: url(/photos/orig.jpg) center center / contain no-repeat;}</style>";
    } elseif ($_GET['excursion'] == 'Традиционный Токио') {
        echo "<div class=\"pic_form\"></div> <style>.pic_form {background: url(/photos/ceremonie-du-the-avec-enfants.jpg) center center / contain no-repeat;}</style>";
    } else {
        echo "Вы не выбрали экскурсию, поэтому нам нечего вам предложить.";
    }
} else {
    echo "Вы не выбрали экскурсию, поэтому нам нечего вам предложить.";
}

include($_SERVER['DOCUMENT_ROOT'] . '/bloks/footer.php');

?>
