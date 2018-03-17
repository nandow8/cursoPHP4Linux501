<h1>Edit</h1>

<form action="?r=usuarios/update" method="POST">
    <input type="hidden" name="id" value="<?= $usuarios['id'] ?>" />
    <input type="text"  name="usuario" value="<?= $usuarios['usuario'] ?>" />
    <input type="text" name="senha "value="<?= $usuarios['senha'] ?>" />

    <input type="submit" value="Editar">
</form>