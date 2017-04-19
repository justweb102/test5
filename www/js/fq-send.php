<?php
    $email_to =   'solonp@yandex.ru';
    
    $text   =   $_POST['text'];
    
    
    $subject                =   'Форма с сайта';
    $msg = "
        Вопрос:   $text\r\n
        \r\n
    ";
    
    

    
    
    //$headers  = "From: $email\r\n";
    //$headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $msg)){
        echo 'sent';
    }else{
        echo 'failed';
    }

?>