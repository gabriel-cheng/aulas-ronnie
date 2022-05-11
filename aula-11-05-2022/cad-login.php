<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login : : Cadastrar</title>
    <link rel="stylesheet" href="./css/grids.css">
    <link rel="stylesheet" href="./css/formulario.css">   
    <link rel="stylesheet" href="./css/estilo.css">  
</head>
<body>
    <?php
        include("_menu.php");
    ?>
    <div class="espaco-v"></div> <!--abre um espaço entre os containers-->

    <form action="./app/login/cad-loginbd.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="container">
                <div class="row-flex">  
                    <div class="col-6 centralizar-h centralizar-v">
                        <h1 style="font-size: 5vw;">Cadastrar de Usuário</h1>
                    </div>        
                    <div class="col-2 centralizar-v" >
                        <input type="file" name="foto" id="foto" class="inputfile">
                        <label for="foto">Foto</label>
                    </div>
                    <div class="col-2">
                        <img src="./app/login/imagens/_sem-foto.gif" alt="Foto do usuário"  style="border-radius:8px; max-width:100%;">
                    </div>              
                </div>
                
                
                <div class="row-flex">
                    <div class="col-10">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome completo do usuário">
                    </div>
                </div>

                <div class="row-flex">
                    <div class="col">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco" placeholder="Endereço de contato">
                    </div>

                    <div class="col">
                        <label for="fone">Telefone</label>
                        <input type="tel" name="fone" id="fone" placeholder="Fone comercial">
                    </div>
                </div>

                <div class="row">                
                    <div class="col-10">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email comercial">
                    </div>
                </div>

                <div class="row-flex">                
                    <div class="col">
                        <label for="senha1">Senha</label>
                        <input type="password" name="senha1" id="senha1"  placeholder="Senha com 8 digitos">
                    </div>

                    <div class="col">
                        <label for="senha2">Confirmação de senha</label>
                        <input type="password" name="senha2" id="senha2" placeholder="Confirmação de senha">
                        <p class="mens-erro" style="display: none; color: red;">Senhas divergentes ou tamanho inferior ao exigido.</p>
                    </div>
                </div>

                <div class="row-flex">                
                    <div class="col">
                        <label for="nivel">Nível</label>
                        <select name="nivel" id="nivel">
                            <option value="1">Usuário</option>                    
                            <option value="2">Administrador</option>                    
                        </select>
                    </div>
                    <div class="col">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="1">Desativado</option>                    
                            <option value="2">Ativado</option>                    
                        </select>
                    </div>
                </div>
                <div class="centralizar-h">
                    <hr style="margin: 30px; width:80%;">
                </div>

                <div class="row">
                    <div class="col-10 centralizar-h">
                        <input type="reset" onclick="javascript:history.go(-1);" value="V O L T A R">
                        <input type="submit" name="btn-salvar" value="S A L V A R">
                    </div>
                </div>                    
            </div>
        </div>
    </form>

    <?php
        include("_rodape.php");
    ?>
    <!-- Criando validação de senha com JavaScript -->
    <script src="./scripts/script.js"></script> 
</body>
</html>