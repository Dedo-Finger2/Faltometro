<?php 
$materias = [
    'Comunicação Oral e Escrita' => 48,
    'Fundamentos de Tecnologia da Informação' => 36,
    'Fundamentos de Web Design' => 36,
    'Informática Aplicada' => 60,
    'Inovação e Emrpeendedorismo' => 30,
    'Lógica da Programação' => 120,
    'Desenvolvimento de Sistemas I' => 82,
    'Gestão de Projetos' => 30,
    'Interface Homem-computador' => 48, 
    'Metodologia da Pesquisa' => 30,
    'Modelagem de sistemas' => 72,
    'Programação WEB' => 72,
    'Banco de dados' => 84,
    'Desenvolvimento de Sistemas II' => 72,
    'Desenvolvimento de Sistemas para Dispositivos Móveis' => 72,
    'Testes de Sistema' => 48,
    'TCC' => 60
];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
</head>

<body style="background-image: url('https://r4.wallpaperflare.com/wallpaper/711/1011/707/1920x1080-px-architecture-artwork-bridge-building-car-digital-art-fantasy-art-house-lights-mist-moun-anime-cowboy-bebop-hd-art-wallpaper-39d018fd415a4d9b56b788afe041f63d.jpg'); backdrop-filter: blur(30px);">
    <header>
        <!-- place navbar here -->
    </header>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center col-xl-9">
        <div class="col-lg-4">
            <div class="container p-5 formulario" style="backdrop-filter: blur(10px);">
                <div class="d-flex align-content-center justify-content-center">
                    <h1 class="mb-4">Faltômetro</h1>
                </div>
                <form action="Php/tratamento.php" method="post">
                    <div class="mb-3">
                        <label for="carga-horaria" class="form-label"><b>Carga Horária</b></label>
                        <input type="text" class="form-control" id="carga-horaria" name="carga-horaria" value="0" disabled>
                        <div class="form-text"><b>No mínimo 30 horas de carga horária.</b></div>
                    </div>
                    <div class="mb-3">
                        <label for="materia" class="form-label"><b>Matéria</b></label>
                        <select class="form-select" id="materia" name="materia">
                            <option selected>Selecione uma matéria</option>
                            <?php
                                foreach ($materias as $materia => $horas) {
                                    echo '<option value="'.$materia.'">'.$materia." ($horas horas)".'</option>';
                                }
                            ?>
                            
                        </select>
                        <div class="form-text"><b>Selecione uma matéria caso não saiba a carga horária.</b></div>
                    </div>
                    <div class="mb-3">
                        <label for="porcentagem" class="form-label"><b>Porcentagem</b></label>
                        <input type="text" class="form-control" id="porcentagem" name="porcentagem" value="25">
                        <div class="form-text"><b>O padrão de porcentagem é 25%.</b></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jvX" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-+dHv/Z8nXYeGYdG6jJN1Xe4eQ5Ha4Q+i1iQ6u6wS4Rn7UZzvcLVRzY0NxU3Q2j9A" crossorigin="anonymous">
    </script>
</body>

</html>