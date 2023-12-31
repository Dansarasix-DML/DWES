<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Marín López">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>faMia: Pizzas</title>
</head>
<body>
    <h1>FaMia</h1>
    <p>Pizzas | <a href="http://famia.com/bebidas">Bebidas</a> | <a href="http://famia.com/postres">Postres</a> :: <a href="http://famia.com/carrito">Carrito</a></p>
    <h3>Productos a escoger</h3>
    <?php
        foreach ($data as $key => $value) {
            echo $value['html'];
        }
    ?>
</body>
</html>