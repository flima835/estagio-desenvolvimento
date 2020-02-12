<?php
class db{
	
	private $host = 'localhost';

	private $usuario = 'root';

	private $senha = '';

	private $bd = 'test';

	function mysql()
	{
		// ciar conexão
		$connect = mysqli_connect($this->host, $this->usuario, $this->senha, $this->bd);

		// verificação de erro de conexão
		if(mysqli_connect_errno()) {
			echo "Erro de conexão com banco de dados:	(".$connect->connect_errno().")".$connect->connect_error; 
			}else{
				echo "<script>alert('Teste de conexão com o banco de dados: Ok')</script>";
			}
	return $connect;
	mysql_close();
		}
	}

?> 