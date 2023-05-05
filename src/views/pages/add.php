<?php $render('header') ?>

<h3>Adicionar novo usuário</h3>

<form method="POST" action="novo">
    <label>
        <span>Nome:</span>
        <input type="text" name="name">
    </label>
    <br><br>
    <label>
        <span>E-mail:</span>
        <input type="email" name="email">
        <br><br>
        <button>Adicionar</button>
    </label>

</form>

<?php $render('footer') ?>