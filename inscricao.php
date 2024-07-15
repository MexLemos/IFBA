<?php

$para= "apanda@ifba.co.ao, miguelangelo@ifba.co.ao, gilsonstrela@gmail.com";
$assunto= "Inscrição Online";
$nome= $_REQUEST['nome'];
$email= $_REQUEST['email'];
$telefone= $_REQUEST['telefone'];
$bi= $_REQUEST['bi'];
$dataNac= $_REQUEST['dataNac'];
$sexo= $_REQUEST['sexo'];
$habiLit= $_REQUEST['classe'];
$curso= $_REQUEST['curso'];
$horario= $_REQUEST['hora'];
$local= $_REQUEST['local'];
$msg= $_REQUEST['msg'];

			$corpo ="<strong>Email de Pré Inscrição</strong><br><br>";
			$corpo .="<strong> Nome: </strong> $nome<br><br>";
			$corpo .="<strong> E-mail: </strong> $email<br><br>";
			$corpo .="<strong> Telefone: </strong> $telefone<br><br>";
			$corpo .="<strong> BI nº: </strong> $bi<br><br>";
			$corpo .="<strong> Data de nascimento.:</strong> $dataNac<br><br>";
			$corpo .="<strong> Sexo:</strong> $sexo<br><br>";
			$corpo .="<strong> Habilitações Literária: </strong> $classe<br><br>";
			$corpo .="<strong> Curso: </strong> $curso<br><br>";
			$corpo .="<strong> Horário: </strong> $hora<br><br>";
			$corpo .="<strong> Local da Formação: </strong> $local<br><br>";
			$corpo .="<strong> Mensagem: </strong> $msg";
			
			$header= "Content-Type: text/html; charset= utf-8\n";
			$header .="From: $email Reply-to $email\n";
						
@mail($para,$assunto,$corpo,$header);


echo '<p><font face="Tahoma" color="2be02b><span style="font-size:11pt;"><b>Pré Inscrição enviada com sucesso!</b></span></font></p>';
echo '<font face="Tahoma, Geneva, sans-serif" color="#000000"><span style="font-size:10pt;">Em breve entraremos em contacto com você! Obrigado!</span></font></p>';



header("location:inscricao.html?msg=enviado");

?>

