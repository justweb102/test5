<?php
    $email_to =   'solonp@yandex.ru';
    
    $fio    =   $_POST['fio'];
    $tel    =   $_POST['tel'];
    $email  =   $_POST['email'];
    $text   =   $_POST['text'];
    
    
    $subject                =   'Форма с сайта';
    $msg = "
        Имя:   $fio\r\n
        Телефон:   $tel\r\n
        Email:   $email\r\n
        Сообщение:   $text\r\n
        \r\n
    ";
    
    
    
    
    if( (empty($fio)) && (empty($tel)) ){
        return 0;
    }
    
    
    //$headers  = "From: $email\r\n";
    //$headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $msg)){
        echo 'sent';
    }else{
        echo 'failed';
    }

?>