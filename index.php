<?php
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $assunto = $_POST['assunto'];
    $subject = $_POST['subject'];
    $from = 'From: wecancharge'; 
    $to = 'equipa@shcode.pt'; 
    $subject = 'Um novo pedido de contacto';

    $body = "From: $name\n E-Mail: $mail\n Phone:\n $phone assunto:\n $assunto subject:\n $subject";


    if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>A sua mensagem foi enviada com sucesso!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>Errou na conta 2+2!</p>';
	}
    } else {
        echo '<p>Não preencheu os campos necessários!!</p>';
    }
}
?>