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
    <nav class="two">
        <ul>
            <li><a href="/test/">Главная</a></li>
            <li><a href="/test/test">Тестирование</a></li>
            <li><a href="/test/add">Добавить вопрос</a></li>
            <li><a href="/datatables">Вопросы</a></li>
        </ul>
    </nav>
    <?=$content?>
</body>
</html>