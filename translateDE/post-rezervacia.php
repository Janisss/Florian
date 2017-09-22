<?php
if(isset($_POST['rsubmit'])) {
	$emailbody = 
	'<span style="color:Brown">Meno: </span>'.$_POST['rmeno']."<br>"
	.'<span style="color:Brown">Telefon: </span>'.$_POST['rcislo']."<br>"
	.'<span style="color:Brown">Email: </span>'.$_POST['remail']."<br>"
	.'<span style="color:Brown">Termin od: </span>'.$_POST['od']."<br>"
	.'<span style="color:Brown">Termin do: </span>'.$_POST['do']."<br>"
	.'<span style="color:Brown">Sprava: </span>'.$_POST['rsprava']."<hr>"."<br><br><br>"
	.'<span style="color:Gray">PHP mail-generator by Brickstone.design. If you find any problem please report at info@brickstone.design</span>';
		
	mail('recepcia@florianov-dvor.sk', '-> REZERVACIA FLORIANOV DVOR WEB', $emailbody ,'Content-Type: text/html; charset=UTF-8');
	header("Location:./index.html");
}
?>