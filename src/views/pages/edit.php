<?php $render('header') ?>

<h3>Editar usuário</h3>

<form method="POST" action="editar">
    <label>
        <span>Nome:</span>
        <input type="text" name="name" value="<?= $usuario['nome']; ?>">
    </label>
    <br><br>
    <label>
        <span>E-mail:</span>
        <input type="email" name="email" value="<?= $usuario['email']; ?>">
        <br><br>
        <button>Salvar</button>
        <!-- Teste -->

</form>

<?php $render('footer') ?>