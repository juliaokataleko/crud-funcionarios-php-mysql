<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="assets/js/script.js"></script>
    <title><?= MAIN_TITLE; ?></title>
</head>

<body>
    <div id="header">

        <div class="my-container">
            <div class="left">
                <a href="/?page=home"><?= MAIN_TITLE; ?></a>
                <a href="/?page=about">Sobre</a>
                <a href="/?page=tuto">Tutorial</a>
            </div>

            <div class="right">
                <a class="btn btn-outline-success" href="?page=addform">Adicionar funcionário</a>
            </div>
        </div>



    </div>
    <div class="my-container" id="content">
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>