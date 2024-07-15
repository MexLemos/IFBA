<?php

$para= "apanda@ifba.co.ao";
$assunto= "Reclamações";
$nome= $_REQUEST['nome'];
$telefone= $_REQUEST['telefone'];
$msg= $_REQUEST['msg'];

			$corpo ="<strong>Email de Pré Inscrição</strong><br><br>";
			$corpo .="<strong> Nome: </strong> $nome<br><br>";
			$corpo .="<strong> Telefone: </strong> $telefone<br><br>";
			$corpo .="<strong> Mensagem: </strong> $msg";
			
			$header= "Content-Type: text/html; charset= utf-8\n";
			$header .="From: $email Reply-to $email\n";
						
@mail($para,$assunto,$corpo,$header);


echo '<p><font face="Tahoma" color="2be02b><span style="font-size:11pt;"><b>enviada com sucesso!</b></span></font></p>';
echo '<font face="Tahoma, Geneva, sans-serif" color="#000000"><span style="font-size:10pt;">Em breve entraremos em contacto com você! Obrigado!</span></font></p>';




header("location:inscricao.html?msg=enviado");

?>

