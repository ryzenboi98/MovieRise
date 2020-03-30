<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>Lista de Filmes</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Filme</th>
        <th>Descrição</th>
        <th>Foto</th>
        <th>Título</th>
        <th></th>
    </tr>
    
    <?php foreach($lista as $cliente): ?>

    <tr>
        <td><?php echo $cliente->id ?></td>
        <td><?php echo $cliente->filme ?></td>
        <td><?php echo $cliente->descricao ?></td>
        <td><?php echo $cliente->foto ?></td>
        <td><?php echo $cliente->titulo ?></td>
    </tr>

    <?php endforeach ?> 
</table>
</body>
</html>

