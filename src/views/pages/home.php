<?php $render('header') ?>



<a class="novo" href="/crudmvc/novo">Novo usuário</a>

<table border="1" width="90%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td class="id"><?= $usuario['id']; ?></td>
            <td class="nome"><?= $usuario['nome']; ?></td>
            <td class="email"><?= $usuario['email']; ?></td>
            <td class="acoes">
                <form method="POST" action="usuario/<?= $usuario['id'] ?>/editar">
                    <button>Editar</button>
                </form>
                <form method="POST" action="usuario/<?= $usuario['id'] ?>/excluir">
                    <button onclick="return confirm('Tem certeza que deseja realizar a exclusão?')">Excluir</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer') ?>