<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>Lista de Clientes</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th></th>
    </tr>
    
    <?php foreach($list as $cliente): ?>

    <tr>
        <td><?php echo $cliente->nome ?></td>
        <td><?php echo $cliente->email ?></td>
    </tr>

    <?php endforeach ?> 
</table>
</body>
</html>

