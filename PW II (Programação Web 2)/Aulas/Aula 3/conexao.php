<php?
/*

Questao numero um 

1-Qual codigo guarda o endereco do servidor
mysql:host=$host;dbname=$dbname,


2-Qual codigo cria a conexao com o BD
$pdo = new PDO (mysql:host=$host;dbname=$dbname,$user,$password)

*/

require_once 'conexao.php';

//Nome do usuario do curso
$nome = $_POST["nome"];


//Nome do curso
$curso = $_POST["curso"];

//Nome do endereco do host
$host = "localhost";

//Nome da tabela do BD
$dbname = "escola";

//Guarda o usuario do BD
$user = "root";

//Guarda a senha do usuario do BD
$password = "123";

try{
//Criando conexao com MariaDB, PDO = PHP DATA OBJECT

$pdo = new PDO(
 "mysql:host=$host;dbname="$dbname",
  $user,
  $password
)
//Printando a confirmacao de conexao
echo "Conectado!";

$sql = "INSERT INTO escola(nome,curso) VALUES (:nome, :curso);";

  $stmt = $pdo->prepare($sql);

  $stmt->bindValue(":nome", $nome);
  $stmt->bindValue(":curso", $curso);
  
  
  $stmt->execute();
  
}

//Se acontecer algum erro
catch(PDOException $e){
    //Se salva esse erro em um arquivo .log
  echo "ERRO ao se conectar com o banco:".$e->getMessage();
}
  ?>