 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            margin: 20px;
            background-color: #333;
            color: #fff;
            backdrop-filter: blur(30px);
        }
        .btn {
            margin-right: 20px;
        }
        h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 50vh;
        }
    </style>
<?php
    require_once("Class/Calculator.class.php");

    echo "<a href='../index.php' class='btn btn-primary'>Voltar</a>";

    if(isset($_POST['materia'], $_POST['porcentagem'])) {
        $materia = $_POST['materia'];
        $porcentagem = (int) $_POST['porcentagem'];

        try {
            $calculo = new Calculator($materia, $porcentagem);

            $materia_e_horas = $calculo->calcularFaltasHoras();

            if(isset($materia_e_horas['materia'], $materia_e_horas['horas'])) {
                $dias = $calculo->converterHorasParaDias($materia_e_horas['horas']);
                echo "<h1>Você só pode faltar ".$materia_e_horas['horas']." horas ou ".$dias." dias na matéria de ". $materia_e_horas['materia'].".</h1>";
            } else {
                echo "Erro ao calcular as horas faltas aceitáveis";
            }
        } catch (InvalidArgumentException $ex) {
            echo "Erro: ".$ex->getMessage();
        }
    }
