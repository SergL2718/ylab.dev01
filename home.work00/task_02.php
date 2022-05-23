<?php
//
//Пропсываем функцию вывода отчета об ошибках, и кодировку
    error_reporting(E_ALL);
    mb_internal_encoding('UTF-8');

//Вводим функцию проверки значений в переменных

    if(!empty($_REQUEST['name'])&&($_REQUEST['surname']))
        {
            $name = $_REQUEST['name'];
            $surname = $_REQUEST['surname'];
        }

?>

<!--FORM BEGINING-->
<!--  Прописываем код HTML для вывода формы на стринце  и выполняем требования указанные в задании:
        1) Поля: Имя, Фамилия и кнопка “Отправить”; 2) После нажатия на кнопку на странице
                                                                    должны отобразиться данные из формы. В виде строки “Привет, (Фамилия) (Имя)”.
        Дополнительно: а) Добавил placeholder; б) Добавил value с проверкой по условию для сохранения введенных данных в полях формы
                        в) Добавил проверку по условию для вывода строки.(Не выводится если данные не были отправлены)
-->
<div class="container" style="width: auto" >
        <div class="form.action" style="text-align: center">
            <br>
            <br>
            <h5>Д.З №1, Задание №2 (вебинар Ylab (май'22)</h5>
            <h5>Форма 'Ввод имени и фамилии'</h5>
            <br>
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Введите имя" value="<?php if(!empty($_REQUEST['name'])) echo $_REQUEST['name'];?>"><br><br>
                <input type="text" name="surname" placeholder="Введите фамилию" value="<?php if(!empty($_REQUEST['surname'])) echo $_REQUEST['surname'];?>"><br><br>
                <input type="submit">
                <br>
                <br>
                <br>
            </form>
                <?php
                    if(!empty($_REQUEST['name'])&&($_REQUEST['surname']))
                        {
                            echo 'Приветствую, Вас ! '.'   '.$surname.'   '.$name;
                        }
                ?>
        </div>
</div> <!--FORM END-->

<!-- BLOCK DATA BASE-->
<!-- Выполняем задание для передачи данных формы в БД -->

<?php

//Устанавливаем доступы к базе данных:

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'ylab.dv.db'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:

/*
    Соединение записывается в переменную $link,
    которая используется дальше для работы mysqi_query.
*/

$link = mysqli_connect($host, $user, $password, $db_name);

//Отправляем данные в БД:

    $name = $_POST['name'];
    $surname = $_POST['surname'];

    $query = "INSERT INTO user SET NAME='$name', SURNAME='$surname'";
    mysqli_query($link, $query) or die(mysqli_error($link));

?>





