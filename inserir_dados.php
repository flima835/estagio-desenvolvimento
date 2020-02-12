 <?php
 require 'db.php';

$mensagem = $_POST['mensagem'];
$data = strftime('%y-%m-%d' ); strtotime('today');
$data1 = strftime('%D/%M/%Y' ); strtotime('today'); implode("-",array_reverse(explode("/",$data1)));
setlocale(LC_ALL, "pt_BR");
$data2 = strftime('%a, %d de %B de %Y %X' ); strtotime('today'); 

$objDB = new db();	
$link = $objDB -> mysql();

$dados = "INSERT INTO mensagens (mensagem, data, data1, data2) values('$mensagem','$data', '06/02/2020', '$data2')";

if (mysqli_query($link, $dados)) {	
	echo "<script> alert('Mensagem enviada com sucesso.') </script>";
}else{
	echo "Erro" or die($link);
}

 // if ($connect -> query($banco) === TRUE ) {
	// echo "Usuário incluido com sucesso. ";
 // } else{
 //  	echo "Erro"."</br>".$banco."</br>". $connect->error;
 // }
?>