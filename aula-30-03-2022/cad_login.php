<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login :: Cadastro</title>
    <link rel="stylesheet" href="css/grids.css">
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <form action="app/login/cad_loginbd.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row centralizar-h">
                <h1>Cadastro de Usuário</h1>
            </div>
        </div>
        
        <!-- Php -->
        <?php require_once("./app/conexao/conexao.php"); ?> <!-- Importando arquivo -->

        <div class="espaco-v"></div>
        <div class="container">
            <!-- Nome -->
            <div class="row">
                <div class="col-2">
                    <label for="nome">Nome</label> <!-- Quando você clica na label, ela já vai pro input -->
                </div>
                <div class="col-8">
                    <input placeholder="Informe seu nome" type="text" name="nome" id="nome"> <!-- Label sempre trabalha com id -->
                </div>
            </div>
            <!-- Endreço -->
            <div class="row">
                <div class="col-2">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="col-8">
                    <input placeholder="Informe seu endereço" type="text" name="endereco" id="endereco">
                </div>
            </div>
            <!-- E-mail -->
            <div class="row">
                <div class="col-2">
                    <label for="email">E-mail</label>
                </div>
                <div class="col-8">
                    <input placeholder="Informe seu e-mail" type="email" name="email" id="email">
                </div>
            </div>
            <!-- Telefone -->
            <div class="row">
                <div class="col-2">
                    <label for="fone">Telefone</label>
                </div>
                <div class="col-8">
                    <input placeholder="Informe seu telefone" type="tel" name="fone" id="fone">
                </div>
            </div>
            <!-- Senha 1 -->
            <div class="row">
                <div class="col-2">
                    <label for="senha">Senha</label>
                </div>
                <div class="col-8">
                    <input placeholder="Informe sua senha" type="password" name="senha" id="senha">
                </div>
            </div>
            <!-- Senha 2 -->
            <div class="row">
                <div class="col-2">
                    <label for="senha2">Confirmar senha</label>
                </div>
                <div class="col-8">
                    <input placeholder="Repita sua senha" type="password" name="senha2" id="senha2">
                </div>
            </div>
            <!-- Nivel -->
            <div class="row">
                <div class="col-2">
                    <label for="nivel">Nivel</label>
                </div>
                <div class="col-8">
                    <select name="nivel" id="nivel">
                        <option value="1">Usuário</option>
                        <option value="2">Administrador</option>
                    </select>
                </div>
            </div>
            <!-- Status -->
            <div class="row">
                <div class="col-2">
                    <label for="status">Status</label>
                </div>
                <div class="col-8">
                    <select name="status" id="status">
                        <option value="1">Ativado</option>
                        <option value="0">Desativado</option>
                    </select>
                </div>
            </div>
            <!-- Foto -->
            <div class="row">
                <div class="col-2">
                    <label for="foto">Foto</label>
                </div>
                <div class="col-8">
                    <input type="file" name="foto" id="foto" class="inputfile">
                    <label for="foto">Foto</label>
                </div>
            </div>
            <!-- Enviar/Limpar -->
            <div class="row">
                <div class="col-10 centralizar-h">
                    <input type="reset" value="Limpar">
                    <input type="submit" value="Enviar">
                </div>
            </div>
    </form>
    </div>
</body>
</html>