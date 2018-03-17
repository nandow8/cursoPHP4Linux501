<h1>index</h1>

<style>
    table, th, td {
        border: 1px solid black;
    }
    a{
        background: blue;
        color: white;
    }

    .excluir{
        background: red;
        color: white;
    }
</style>

<table style="width:50%">
    <tr>
        <th>Id</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Opções</th>
    </tr>

    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['usuario'] ?></td>
            <td><?= $usuario['senha'] ?></td>
            <td><a href="?r=usuarios/edit/<?= $usuario['id'] ?>">Editar</a>
                <a class="excluir" href="?r=usuarios/delete">Excluir</a></td>
        </tr>
    <?php endforeach; ?>
</table>

