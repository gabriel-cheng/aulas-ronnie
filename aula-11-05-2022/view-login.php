<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login : : Visualizar</title>
    <link rel="stylesheet" href="./css/grids.css">
    <link rel="stylesheet" href="./css/formulario.css">   
    <link rel="stylesheet" href="./css/estilo.css">   
</head>
<body>
    <?php
        include("_menu.php");
    ?>

    <div class="espaco-v"></div> <!--abre um espaço entre os containers-->

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>FOTO</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>FONE</th>
                    <th>EXCLUIR</th>
                    <th>EDITAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
					require_once ("./app/login/view-loginbd.php");
					foreach($result as $linha)
					{
				?>
                        <tr>
                            <td><?= $linha["idLogin"]; ?></td>
                            <td><img src="./app/login/imagens/<?= $linha["fotoLogin"]; ?>" alt="" width="100%"></td>
                            <td><?= $linha["nomeLogin"]; ?><br><p style="font-size: 14px;"><?= $status=$linha["statusLogin"]==1?"Usuário":"Administrador"; ?></p></td>
                            <td><?= $linha["emailLogin"]; ?></td>
                            <td><?= $linha["telefoneLogin"]; ?></td>
                            <td>
                                <a href="exc-login.php?id=<?= $linha['idLogin']; ?>">
                                    <img src="./img/rectangle-xmark.svg" alt="Excluir" width="25%">
                                </a>
                            </td>
                            <td>
                                <a href="alt-login.php?id=<?= $linha['idLogin']; ?>">
                                    <img src="./img/circle-check.svg" alt="Alterar" width="25%">
                                </a>
                            </td>                    
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <?php
        include("_rodape.php");
    ?>
    
</body>
</html>