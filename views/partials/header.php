<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
    <title><?= MAIN_TITLE; ?></title>
</head>

<body>
    <div id="header">
        <a href="/?page=home"><?= MAIN_TITLE; ?></a>
        <a href="/?page=about">Sobre</a>
        <a href="/?page=tuto">Tutorial</a>
        <a class="add" href="?page=addform">Adicionar funcionário</a>
    </div>
    <div class="container">
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>