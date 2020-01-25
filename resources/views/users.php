<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usarios</title>
</head>
<body>
    <h1>Lista de Usarios</h1>
    
    <ul>
        <?php foreach($UsersList as $users):?>
        <li><?php echo $users; ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>