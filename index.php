<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1>
                Cálculos Matemáticos
            </h1>
        </header>
        <form action="index.php" method="post">
            <label for="n1">Número A:</label>
            <input type="number" id="n1" name="n1" required><br><br>
            
            <label for="n2">Número B:</label>
            <input type="number" id="n2" name="n2" required><br><br>
            
            <label for="operacao">Operação:</label><br>
            <input type="radio" id="mult" name="operacao" value="multiplicacao" required>
            <label for="mult">Multiplicação</label><br>
            
            <input type="radio" id="div" name="operacao" value="divisao" required>
            <label for="div">Divisão</label><br><br>
            
            <input type="radio" id="rad" name="operacao" value="radiciacao" required>
            <label for="rad">Radiciação</label><br><br>

            <button type="submit">Calcular</button><br>
        </form>
        
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];

            if (isset($_POST["operacao"])) {
                $operacao = $_POST['operacao'];

                if ($operacao == 'multiplicacao') {
                    $rest = $n1 * $n2;
                    echo "<p>O resultado da multiplicação de $n1 por $n2 é igual a: $rest</p>";
                } elseif ($operacao == 'divisao') {
                    if ($n2 != 0) {
                        $rest = $n1 / $n2;
                        echo "<p>A divisão de $n1 por $n2 é igual a: $rest</p>";
                    } else {
                        echo "<p>Não é possível dividir por zero.</p>";
                    }
                } elseif ($operacao == 'radiciacao') {
                    $rest = sqrt($n1);
                    echo "<p>A raiz quadrada de $n1 é igual a: $rest</p>";
                } else {
                    echo "<p>Selecione uma opção válida.</p>";
                }
            }
        }
        ?>
    </main>
</body>
</html>




























































