<?php $render('header'); ?>

<h2> Editar Usuário</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">

    <label>
        Nome:<br/>
        <input type="text" value="<?=$usuario['nome'];?>" name="name" />
    </label><br /> <br />

    <label>
        E-mail:<br/>
        <input type="email" value="<?=$usuario['email'];?>" name="email" />
    </label><br /> <br />

    <input type="submit" value="Salvar" />


</form>

<?php $render('footer'); ?>