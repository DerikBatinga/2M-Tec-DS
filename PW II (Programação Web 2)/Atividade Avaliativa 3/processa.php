<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicios 3</title>
</head>
<body>
    <div class="titulo">
        <h1>Respostas - PHP</h1>
    </div>

    <div class="res">
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $botaoClicado = "";
        foreach ($_POST as $chave => $valor) {
            if (strpos($chave, 'Btn') !== false) {
                $botaoClicado = $chave;
                break;
            }
        }

        switch ($botaoClicado){

            case 'tabuadaBtn':
                $num = $_POST['tabuada'];
                echo "<h3>Tabuada do $num</h3>";
             
                for ($i = 0; $i <= 10; $i++){
                    $res = $num * $i;
                    echo "<p>$num X $i = $res</p>"; 
                }
                break;

            case 'descontoBtn':
                $num = $_POST['valor'];
                $des = $_POST['desconto'];

                $porcent = $des / 100;
                $res = $num - ($num * $porcent);
                echo "<p>Valor com desconto: R$ $res</p>";
                break;

            case 'passouBtn':
                $bimUm = $_POST['bimUm'];
                $bimDois = $_POST['bimDois'];
                $bimTres = $_POST['bimTres'];
                $bimQuatro = $_POST['bimQuatro'];

                $res = ($bimUm + $bimDois + $bimTres + $bimQuatro) / 4;
                if($res >= 8){
                    echo "<p>Média: $res - Você passou!</p>";
                } else {
                    echo "<p>Média: $res - Você repassou/recuperação!</p>"; // Adicionado o else correto
                }
                break;

            case 'trocaValBtn':
                $num = $_POST['valorUm'];
                $num1 = $_POST['valorDois'];

                $temp = $num;
                $num = $num1;
                $num1 = $temp;

                echo "<p>Valores invertidos -> A: $num, B: $num1</p>";
                break;

            case 'quadradoBtn':
                $num = $_POST['num'];
                $numDois = $_POST['numDois'];
                $numTres = $_POST['numTres'];
            
                $res = pow($num, 2) + pow($numDois, 2) + pow($numTres, 2);

                echo "<p>Soma dos quadrados: $res</p>"; 
                break;

            case 'salarioBtn':
                $sal = $_POST['salario'];
                
                $res = ($sal / 0.80) * 1.10;
                echo "<p>Novo salário calculado: R$ " . round($res, 2) . "</p>";
                break;

            case 'notaBtn':
                $notaUm = $_POST['notaUm'];
                $notaDois = $_POST['notaDois'];
                $notaTres = $_POST['notaTres'];
                $notaQuatro = $_POST['notaQuatro'];

                $res = ($notaUm + $notaDois + $notaTres + $notaQuatro) / 4;
                echo "<p>Média das Notas: $res</p>"; 
                break;

            case 'compBtn':
                $num = $_POST['numCompUm'];
                $numDois = $_POST['numCompDois'];
                $numTres = $_POST['numCompTres'];

                if($num >= $numDois && $num >= $numTres){
                    echo "<p>Maior: $num</p>";
                } elseif($numDois >= $num && $numDois >= $numTres){
                    echo "<p>Maior: $numDois</p>";
                } else {
                    echo "<p>Maior: $numTres</p>";
                }
                break;

            case 'intervaloBtn':
                $num = $_POST['intervaloUm'];
                $numDois = $_POST['intervaloDois'];

                echo "<p>Ímpares no intervalo de $num até $numDois:</p>";
                echo "<p>";
                for ($i = $num; $i < $numDois; $i++){

                    if ($i % 2 == 1){
                        echo "$i  ";
                    }
                }
                echo "</p>";
                break;

            case 'parImparBtn':
                $num = $_POST['parImpar'];

                if ($num % 2 == 0){
                    echo "<p>O número $num é Par</p>";
                } else {
                    echo "<p>O número $num é Ímpar</p>";   
                }
                break;

            case 'calculadoraBtn':
                $num = $_POST['ValUm']; 
                $numDois = $_POST['valUm'];
                $oper = $_POST['operador'];

                switch ($oper){
                    case "+":
                        $res = $num + $numDois;
                        echo "<p>Resultado: $res</p>";
                        break;
                    case "-":
                        $res = $num - $numDois;
                        echo "<p>Resultado: $res</p>";
                        break;
                    case "*":
                        $res = $num * $numDois;
                        echo "<p>Resultado: $res</p>";
                        break;
                    case "/":
                        if($numDois != 0) {
                            $res = $num / $numDois;
                            echo "<p>Resultado: $res</p>";
                        } else {
                            echo "<p>Erro: Divisão por zero!</p>";
                        }
                        break;
                    default:
                        echo "<p>Operador inválido.</p>";
                }
                break;

            case 'interBtn':
                $num = $_POST['InterUm']; 
                $numDois = $_POST['InterDois'];
                
                echo "<p>Ímpares decrescentes de $numDois até $num:</p>";
       
                echo "<p>";
                for ($i = $numDois; $i >= $num; $i--){
                    if ($i % 2 == 1){
                        echo "$i  ";
                    }
                }
                  echo "</p>";
                break;
        }
    }
    ?>
    </div>    
</body>
</html>