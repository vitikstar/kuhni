<?php

$recepient = "Nastya772.85@mail.ru"; //pr877@mail.ru Nastya772.85@mail.ru  ip@seops.ru
$from_name = "Кухни";
$from_email = 'no-reply@pr-kuhni.ru';

$phone = trim($_POST["phone"]);
$type = trim($_POST["type"]);
$subject = "$type";

$msg = "<p><strong>$type</strong><p>";

if (!empty($_POST['name']))
{
    $msg .= "<p><strong>Имя:</strong> " . trim($_POST["name"]) . "<p>";
}

$msg .= "<p><strong>Телефон:</strong> $phone<p>";

$email = trim($_POST['email']);

if (!empty($email))
{
    $msg .= "<p><strong>Email:</strong> " . trim($_POST["email"]) . "<p>";
}

if (!empty($_POST['text']))
{
    $msg .= "<p><strong>Комментарий:</strong> " . trim($_POST["text"]) . "<p>";
}

if (!empty($_POST['q1']))
{
    $msg .= "<p><strong>Планировка:</strong> " . trim($_POST["q1"]) . "<p>";
}

if (!empty($_POST['q2_1']))
{
    $msg .= "<p><strong>Сторона А:</strong> " . trim($_POST["q2_1"]) . "<p>";
}

if (!empty($_POST['q2_2']))
{
    $msg .= "<p><strong>Сторона B:</strong> " . trim($_POST["q2_2"]) . "<p>";
}

if (!empty($_POST['q2_3']))
{
    $msg .= "<p><strong>Сторона C:</strong> " . trim($_POST["q2_3"]) . "<p>";
}

if (!empty($_POST['q2_4']))
{
    $msg .= "<p><strong>Не знаю размеры</strong><p>";
}

if (!empty($_POST['q3']))
{
    $N = count($_POST['q3']);
    $q3 = '';
    for ($i = 0; $i < $N; $i++)
    {
        $q3 .= trim($_POST["q3"][$i]) . '; ';
    }
    $msg .= "<p><strong>Бытовая техника:</strong> " . $q3 . "<p>";
}

if (!empty($_POST['q4']))
{
    $msg .= "<p><strong>Материал фасадов:</strong> " . trim($_POST["q4"]) . "<p>";
}

if (!empty($_POST['q5']))
{
    $msg .= "<p><strong>Материал столешницы:</strong> " . trim($_POST["q5"]) . "<p>";
}

if (!empty($_POST['q6']))
{
    $msg .= "<p><strong>Фурнитура:</strong> " . trim($_POST["q6"]) . "<p>";
}

if (!empty($_POST['q7']))
{
    $N = count($_POST['q7']);
    $q7 = '';
    for ($i = 0; $i < $N; $i++)
    {
        $q7 .= trim($_POST["q7"][$i]) . '; ';
    }
    $msg .= "<p><strong>Дополнительные элементы:</strong> " . $q7 . "<p>";
}

if (!empty($_POST['callback']))
{
    $msg .= "<p><strong>Способ связи:</strong> " . trim($_POST["callback"]) . "<p>";
}

$msg = nl2br($msg);

$data = [
    // '_FILES' => $_FILES,
    // '_REQUEST' => $_REQUEST
];

if (!empty($_FILES['file']))
{
    $uploaddir = realpath($_SERVER['DOCUMENT_ROOT'] . '/../../' . 'upload/');
    @mkdir($uploaddir);
    $uploaddir .= "/" . date("Y") . "/";
    @mkdir($uploaddir);
    $uploaddir .= date('m') .  "/";
    @mkdir($uploaddir);
    $fileInfo = pathinfo($_FILES['file']['name']);
    $fileExt = $fileInfo['extension'];
    $fname = emailValid($email) ? "$email.$fileExt" : (date("Y-m-d__h-i-s") . '.' . $fileExt);
    $uploadfile = $uploaddir . $fname;
    if (!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
    {
        $data['error'] = "move_uploaded_file() fail :: {$_FILES["file"]["error"]}";
        $uploadfile = "";
    }
    else
    {
        if (!empty($uploadfile)) {
            //$data['uploadFile'] = $uploadfile;
            //$data['uploadFileName'] = $fname;
        }
        else $data['uploadError'] = 'Ошибка загрузки файлов.';
    }

}


$headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
$headers .= "From: =?UTF-8?B?" . base64_encode($from_name) . "?= <" . $from_email . ">\r\n";
if ($type != '')
{
    if (empty($uploadfile)) $data['mailres'] = mail($recepient, $subject, $msg, $headers);
    else $data['mailres'] = send_mail($from_name, $from_email, $recepient, $subject, $msg, $uploadfile, $fname);


    die(json_encode($data));
}


