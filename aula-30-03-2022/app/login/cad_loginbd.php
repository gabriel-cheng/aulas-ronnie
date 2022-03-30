<?php
    // Verificando se o envio foi pelo método POST
    if($_SERVER['REQUEST_METHOD']=='POST') {
        // Diretório que será armazenada todas as imagens enviadas pelo usuário
        $dirImagens = "./imagens/";

        // Pegando o arquivo e se houver espaço em branco, substituir por underline
        $nome_original = str_replace(" ", "_", basename($_FILES["foto"]["name"]));

        // Criar um token/chave exclusivo e para finalizar faz a criptografia usando
        // uma método que gera 32 caracteres
        $token = md5(uniqid(rand(), true));

        // nome_final é a junção das variáveis de diretório + token + nome_original
        $nome_final = $dirImagens . $token . $nome_original;

        // A variável Flag é usada para sinalizar que está tudo ok quando valer 1
        $flag = 1;

        // Verifica o tamanho do arquivo temporário e se for maior que 0 está ok
        if(!getimagesize($_FILES["foto"]["tmp_name"])) {
            $flag = 0;
        }

        
        if($_FILES["foto"]["size"] > 2000000) {
            $flag = 0;
        }
        //strtolower converte todos os caracteres de um texto/variável para minúsculo
        // pathinfo retorna a extensão do arquivo
        $extensao = strtolower(pathinfo($nome_final, PATHINFO_EXTENSION));

        // teste para validar a extensão do arquivo
        if(($extensao != "jpg") && ($extensao != "png") && ($extensao != "jpeg") && ($extensao != "gif")) {
            $flag = 0;
        }

        if($flag == 1) {
            // O move_uploaded_file pega o nome do arquivo temporário e grava na variável $nome_final
            move_uploaded_file($_FILES["foto"]["tmp_name"], $nome_final);

            // A variável foto terá seu conteúdo gravado no BD com o token + nome_original
            $foto = $token.$nome_original;
        }
        else {
            $foto = "sem-foto.jpg";
        }

        // FIM UPLOAD DA IMAGEM ***********************

        // Fazendo a filtragem dos dados inseridos pelo usuário
        // Se fosse método GET:  INPUT_GET
        $nome     = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email    = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $telefone = filter_input(INPUT_POST, "fone", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $senha    = filter_input(INPUT_POST, "senha1", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $nivel    = filter_input(INPUT_POST, "nivel", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $status   = filter_input(INPUT_POST, "status", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Busca o arquivo de conexão ao banco de dados
        require_once("../conexao/conexao.php");

        try {
            $comandoSQL = $conexao->prepare("INSERT INTO LOGIN
                (nomeLogin, enderecoLogin, emailLogin, telefoneLogin,
                senhaLogin, nivelLogin, statusLogin, fotoLogin
                VALUES
                (:nome, :endereco, :email, :telefone, :senha, :nivel, :status, :foto)
            ");

        $comandoSQL->execute(array(
            ':nome'     => $nome,
            ':endereco' => $endereco,
            ':email'    => $email,
            ':telefone' => $telefone,
            // ':senha'    => password_hash($senha, PASSWORD_DEFAULT),
            // ':senha'    => hash('whirlpool', $senha),
            // ':senha'    => hash('sha512', $senha),
            // ':senha'    => hash('sha256', $senha),
            // ':senha'    => sha1($senha), // 40 caracteres
            ':senha'    => md5($senha), // 32 caracteres
            ':nivel'    => $nivel,
            ':status'   => $status,
            ':foto'     => $foto
        ));

        if($comandoSQL->rowCount() > 0) {
            echo "Sucesso!";
        }
        else {
            echo "Erro ao inserir os dados ao banco";
        }

        }
        catch(PDOException $Erro) {
            echo "ERRO: ".($Erro->getCode());
            echo "Mensagem: <br>".($Erro->getMessage());
        }

        $conexao = null;
    }
    else {
        echo "NO POST";
    }
