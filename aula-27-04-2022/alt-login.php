<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login : : Login</title>
    <link rel="stylesheet" href="./css/grids.css">
    <link rel="stylesheet" href="./css/formulario.css">   
    <link rel="stylesheet" href="./css/estilo.css">   
</head>
<body>
    <?php
        // include("_menu.php");
    ?>
    <div class="espaco-v"></div> <!-- Abre um espaço entre os containers -->

    <!-- CODE -->
    <?php
        $idLogin = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        echo $idLogin;
        include("./app/login/alt-login-view.php");
    ?>
    <!-- CODE -->

    <form action="./app/login/cad_loginbd.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?=$linha['idlogin'];?>">
        <input type="hidden" name="fotoAnterior" value="<?=$linha['fotologin'];?>">

        <div class="container">
            <div class="container">
                <div class="row-flex">  
                    <div class="col-6 centralizar-h centralizar-v">
                        <h1 style="font-size: 5vw;">Login de Usuários</h1>
                    </div>        
                    <div class="col-2 centralizar-v" >
                        <input type="file" name="foto" id="foto" class="inputfile">
                        <label for="foto">Foto</label>
                    </div>
                    <div class="col-2">
                        <img src="./app/login/imagens/fotoFeliz.jpg" alt="Foto do usuário"  style="border-radius:8px; max-width:100%;">
                    </div>              
                </div>
                
                
                <div class="row-flex">
                    <div class="col-10">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome completo do usuário" value="<?=$linha["nomeLogin"]?>">
                    </div>
                </div>

                <div class="row-flex">
                    <div class="col">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco" placeholder="Endereço de contato" value="<?=$linha["enderecoLogin"]?>">
                    </div>

                    <div class="col">
                        <label for="fone">Telefone</label>
                        <input type="tel" name="fone" id="fone" placeholder="Fone comercial" value="<?=$linha["telefoneLogin"]?>">
                    </div>
                </div>

                <div class="row">                
                    <div class="col-10">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email comercial" value="<?=$linha["emailLogin"]?>">
                    </div>
                </div>

                <div class="row-flex">                
                    <div class="col">
                        <label for="senha1">Senha</label>
                        <input type="password" name="senha1" id="senha1"  placeholder="Senha com 8 digitos" value="********">
                    </div>

                    <div class="col">
                        <label for="senha2">Confirmação de senha</label>
                        <input type="password" name="senha2" id="senha2" placeholder="Confirmação de senha" value="********">
                    </div>
                </div>

                <div class="row-flex">                
                    <div class="col">
                        <label for="nivel">Nível</label>
                        <select name="nivel" id="nivel">
                            <option value="1" <?=$ativo = $linha["nivelLogin"]=="1"?"selected":""?>>Usuário</option>                    
                            <option value="2" <?=$ativo = $linha["nivelLogin"]=="2"?"selected":""?>>Administrador</option>                    
                        </select>
                    </div>
                    <div class="col">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="1" <?=$ativo = $linha["statusLogin"]=="1"?"selected":""?>>Desativado</option>                    
                            <option value="2" <?=$ativo = $linha["statusLogin"]=="2"?"selected":""?>>Ativado</option>                    
                        </select>
                    </div>
                </div>
                <div class="centralizar-h">
                    <hr style="margin: 30px; width:80%;">
                </div>

                <div class="row">
                    <div class="col-10 centralizar-h">
                        <input type="reset" value="Limpar">
                        <input type="submit" value="Enviar">
                    </div>
                </div>                    
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row centralizar-h" style="background-color: #ddd; padding:30px; border-radius:5px;">
            <h2>Desenvolvedor | Ronnie : : 1sem2022</h2>
        </div>        
    </div> 
</body>
</html>