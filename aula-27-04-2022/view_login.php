<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login : : Cadastro</title>
    <link rel="stylesheet" href="./css/grids.css">
    <link rel="stylesheet" href="./css/formulario.css">   
    <link rel="stylesheet" href="./css/estilo.css">   
</head>
<body>
    <div class="container">
        <div class="row centralizar-h">
            <ul class="centralizar-v">
                <a href="index.php"><li>HOME</li></a>
                <a href="cad_login.php"><li>CADASTRO</li></a>
                <a href="view_login.php"><li>VISUALIZAR</li></a>
                <a href="index.php"><li>LOGOUT</li></a>
            </ul>
        </div>        
    </div> 

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
                    require_once ("./app/login/view_loginbd.php");
                    foreach($result as $linha)
                    {
                ?>
                        <tr>
                            <td><?= $linha["idLogin"]; ?></td>
                            <td>
                                <img src="./app/login/imagens/<?= $linha["fotoLogin"]; ?>" 
                                    alt="" width="100%"></td>
                            <td>
                                <?= $linha["nomeLogin"]; ?><br>
                                <p style="font-size: 14px;">
                                <?= $status=$linha["statusLogin"]==1?"Usuário":"Administrador"; ?>
                                </p>
                            </td>
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

    <div class="container">
        <div class="row centralizar-h" style="background-color: #ddd; padding:30px; border-radius:5px;">
            <h2>Desenvolvedor | Ronnie : : 1sem2022</h2>
        </div>        
    </div> 
</body>
</html>