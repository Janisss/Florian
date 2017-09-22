<?php
if(isset($_POST['ksubmit'])) {
	$emailbody = 
	'<span style="color:Brown">Meno: </span>'.$_POST['kmeno']."<br>"
	.'<span style="color:Brown">Telefon: </span>'.$_POST['kcislo']."<br>"
	.'<span style="color:Brown">Email: </span>'.$_POST['kemail']."<br>"
	.'<span style="color:Brown">Sprava: </span>'.$_POST['ksprava']."<hr>"."<br><br><br>"
	.'<span style="color:Gray">PHP mail-generator by Brickstone.design. If you find any problem please report at info@brickstone.design</span>';
		
	mail('info@florianov-dvor.sk', '-> Kontakt FLORIANOV DVOR WEB', $emailbody ,'Content-Type: text/html; charset=UTF-8');
	header("Location:./index.html");
}
?>