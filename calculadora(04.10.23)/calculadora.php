<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacao = $_POST['operacao'];

function soma($a, $b) {
    return $a + $b;
}

function subtracao($a, $b) {
    return $a - $b;
}

function multiplicacao($a, $b) {
    return $a * $b;
}
function divisao($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Erro: Divisão por zero!";
    }
}

$resultado = 0;
switch ($operacao) {
    case 'soma':
        $resultado = soma($num1, $num2);
        break;
    case 'subtracao':
        $resultado = subtracao($num1, $num2);
        break;
    case 'multiplicacao':
        $resultado = multiplicacao($num1, $num2);
        break;
    case 'divisao':
        $resultado = divisao($num1, $num2);
        break;
    default:
        $resultado = "Operação inválida!";
        break;

}
?>

$a = $_GET['nome_do_campo_html']

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Resultado</h2>
        <p>O resultado da operação é: <?php echo $resultado; ?></p>
        <a href="index.html" class="btn btn-primary">Voltar</a>

    </div>
</body>
</html>