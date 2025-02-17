<?php

class ServicoView
{
    function exibirFormularioCadastro(){
        //HTML para o formulário de cadastro do Serviço
        echo '
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="static/css/style.css">    
        </head>
        <body>
            <div class="cadastro-body">
                <main id="form_container">
                    <!-- Seção de Cabeçalho -->
                    <div id="form_header">
                        <h1 id="form_title">Cadastrar Serviço</h1>
                        <button class="btn-default">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </button>
                    </div>
            
                    <!-- Seção do Formulário -->
                    <form action="?control=servico&action=cadastrar" method="post" id="form">
                        <div id="input_container">
            
                            <!-- Campo de Nome -->
                            <div class="input-box">
                                <label for="nome" class="form-label">Nome do Serviço</label>
                                <div class="input-field">
                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do serviço" required>
                                    <i class="fa-solid fa-file-signature"></i>
                                </div>
                            </div></br>
                            <!-- Campo de Preço -->
                            <div class="input-box">
                                <label for="preco" class="form-label">Preço</label>
                                <div class="input-field">
                                    <input type="number" name="preco" id="preco" class="form-control" placeholder="Preço do serviço" required>
                                    <i class="fa-solid fa-money-check-dollar"></i>
                                </div>
                            </div></br>
            
                            <!-- Campo de Duração -->
                            <div class="input-box">
                                <label for="duracao" class="form-label">Duração para realizar o serviço</label>
                                <div class="input-field">
                                    <input type="number" name="duracao" id="duracao" class="form-control" placeholder="Tempo necessário para o serviço" required>
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                            </div>
                            </br>
                            <!-- Campo de Descrição -->
                                 <div class="input-box">
                                <label for="descricao" class="form-label">Descrição Serviço</label>
                                <div class="input-field">
                                <textarea id="Descricao" name="descricao" rows="4" cols="40" placeholder="fala sobre serviço"></textarea>
                                </div>
                            </div></br>

            
                            <!-- Status do Serviço -->
                            <div class="radio-container">
                                <label class="form-label">Status do Serviço</label>
                                <div id="gender_inputs">
                                    <div class="radio-box">                            
                                        <input type="radio" name="status_servico" id="ativo" class="form-control" value="Ativo" checked required>
                                        <label for="ativo" class="form-label">Ativo</label>                            
                                    </div>                        
                                    <div class="radio-box">
                                        <input type="radio" name="status_servico" id="desativado" class="form-control" value="Desativado" >
                                        <label for="desativado" class="form-label">Desativado</label>
                                    </div> 
                                </div>
                            </div>
                        </div>
            
                        <!-- Botão de Enviar -->
                        <button type="submit" class="btn-default">
                            <i class="fa-solid fa-check"></i> Cadastrar Serviço
                        </button>
                    </form>
                </main>
            </div>
            
            <script src="static/js/script.js"></script>    
        </body>
        </html>
        ';
    }
}
