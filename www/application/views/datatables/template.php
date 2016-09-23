<?
/**
 * @var string $content
 */
?>
<html>
<head>
    <title>Datatables Test</title>
    <link rel="stylesheet" href="/assets/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
</head>
<body>
    <div id="menu">
        <a href="/test/">Главная</a>
        <a href="/test/test">Тестирование</a>
        <a href="/test/add">Добавить вопрос</a>
        <a href="/datatables">Вопросы</a>
    </div>
    <?=$content?>
</body>
</html>