<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuário</a>


<table border="1" width="100%">

    <tr>
        <th>ID</td>
        <th>NOME</td>
        <th>E-MAIL</td>
        <th>AÇÕES</td>

    </tr>

    <?php 
        $usuarios = [ 
            [
                'id' => '1',
                'nome' => 'Paulo',
                'email' => 'paulo@teste'
            ],
            [
                'id' => '2',
                'nome' => 'marcela',
                'email' => 'marcela@teste'
            ]
        ];
    ?>

    <?php foreach($usuarios as $usuario): ?>

        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                    <img width="20" src="<?=$base;?>/assets/images/document.png" alt="Editar" />
                </a>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
                    <img width="20" src="<?=$base;?>/assets/images/trash.png" alt ="Excluir" />
                </a>
            </td>

        </tr>

    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>

