<?php

class ClienteView
{
    public function exibirFormularioCadastro()
    {
        // HTML para o formulário de cadastro de cliente
        echo '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="static/css/style.css">    
</head>
<div class="cadastro-body">
    <main id="form_container">
        <!-- Seção de Cabeçalho -->
        <div id="form_header">
            <h1 id="form_title">Criar conta</h1>
            <button class="btn-default">
                <i class="fa-solid fa-right-to-bracket"></i>
            </button>
        </div>

        <!-- Seção do Formulário -->
        <form action="?control=cliente&action=cadastrar" method="post" id="form">
            <div id="input_container">

                <!-- Campo de Nome -->
                <div class="input-box">
                    <label for="name" class="form-label">Primeiro nome</label>
                    <div class="input-field">
                        <input type="text" name="nome" id="name" class="form-control" placeholder="Fulano" required>
                        <i class="fa-regular fa-user"></i>
                    </div>
                </div>

                <!-- Campo de Sobrenome -->
                <div class="input-box">
                    <label for="last_name" class="form-label">Último nome</label>
                    <div class="input-field">
                        <input type="text" name="sobrenome" id="last_name" class="form-control" placeholder="De Tal" required>
                        <i class="fa-regular fa-user"></i>
                    </div>
                </div>

                <!-- Campo de Data de Nascimento -->
                <div class="input-box">
                    <label for="birthdate" class="form-label">Nascimento</label>
                    <div class="input-field">
                        <input type="date" name="data_nascimento" id="birthdate" class="form-control" required>
                    </div>
                </div>

            <!-- Campo de telefone -->
                <div class="input-box">
                    <label for="telefone" class="form-label">Telefone</label>
                    <div class="input-field">
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone" required>
                        <i class="fa-solid fa-phone"></i>
                    </div>
                </div>

                <!-- Campo de E-mail -->
                <div class="input-box">
                    <label for="email" class="form-label">E-mail</label>
                    <div class="input-field">
                        <input type="email" name="email" id="email" class="form-control" placeholder="exemplo@gmail.com" required>
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                </div>

                <!-- Campo de Senha -->
                <div class="input-box">
                    <label for="password" class="form-label">Senha</label>
                    <div class="input-field">
                        <input type="password" name="senha" id="password" class="form-control" placeholder="*******" required>
                        <i class="fa-solid fa-key"></i>
                    </div>
                </div>

                <!-- Botões de Seleção de Gênero -->
                <div class="radio-container">
                    <label class="form-label">Gênero</label>
                    <div id="gender_inputs">
                        <div class="radio-box">                            
                            <input type="radio" name="genero" id="female" class="form-control" value="feminino" required>
                            <label for="female" class="form-label">Feminino</label>                            
                        </div>                        
                        <div class="radio-box">
                            <input type="radio" name="genero" id="male" class="form-control" value="masculino" >
                            <label for="male" class="form-label">Masculino</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" name="genero" id="other" class="form-control" value="outro">
                            <label for="other" class="form-label">Outro</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botão de Enviar -->
            <button type="submit" class="btn-default">
                <i class="fa-solid fa-check"></i> Criar conta
            </button>
        </form>
    </main>
    <script src="static/js/script.js"></script>    
</div>

</html>
        ';


     
        
    }
   function listarClientes()
    {

        echo "<div class='container py-5'>";
        echo "<h3>Lista de Clientes</h3>";
        echo "<p>Aqui será exibida a lista de clientes cadastrados.</p>";
        echo "</div>";
    }
}