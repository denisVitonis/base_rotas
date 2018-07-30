

<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Meu site</title>
</head>

<body>

<header>
    <nav>
        <ul>
            <li><a href="<?php echo BASE_URL; ?>home">Home</a></li>
            <li><a href="<?php echo BASE_URL; ?>galeria">Galeria</a></li>
        </ul>
    </nav>
</header>

<h1>Esse é o topo</h1>

</hr>

<?php $this->loadViewInTemplate($viewName,$viewData); ?>

<footer>
    <p>Copyright 2018 Denis</p>
</footer>

</body>

</html>

