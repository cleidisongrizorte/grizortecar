<?php

class LoginView
{
    public function render($errorMessage = null)
    {
        // Exibe o link do CSS
        echo '<link rel="stylesheet" href="static/css/login.css">';
        
        
        // Início do corpo de login
        echo '<div class="login-body">';
        echo '<div class="login-wrapper">';
        
        // Cabeçalho do formulário
        echo '<div class="form-header">';
        echo '<div class="titles">';
        echo '<div class="title-login">Entrar</div>';
        echo '</div>';
        echo '</div>';

        // Exibe a mensagem de erro se houver
        if ($errorMessage) {
            echo '<div class="alert alert-danger text-center">' . htmlspecialchars($errorMessage) . '</div>';
        }

        // Formulário de login
        echo '<form action="?control=login&action=login" method="post" class="login-form" autocomplete="off">';
        echo '<div class="input-box">';
        echo '<input type="email" class="input-field" id="log-email" name="email" required>';
        echo '<label for="log-email" class="label">Email</label>';
        echo '<i class="bx bx-envelope icon"></i>';
        echo '</div>';

        echo '<div class="input-box">';
        echo '<input type="password" class="input-field" id="log-pass" name="senha" required>';
        echo '<label for="log-pass" class="label">Senha</label>';
        echo '<i class="bx bx-lock-alt icon"></i>';
        echo '</div>';

        // Links de navegação
        echo '<div class="form-cols">';
        echo '<div class="col-1"></div>';
        echo '<div class="col-2">';
        echo '<a href="#">Esqueci minha senha?</a>'; // Melhor alterar o # para um link real
        echo '</div>';
        echo '</div>';

        // Botão de submit
        echo '<div class="input-box">';
        echo '<button class="btn-submit" id="SignInBtn">Entrar <i class="bx bx-log-in"></i></button>';
        echo '</div>';

        // Link para a página de registro
        echo '<div class="switch-form">';
        // echo '<span>Não tem conta?</span>';
        echo '<a href="index.php?control=cliente&action=novo" ><button class="btn">Criar Conta<i class="bx bx-log-in"></i></button></a>';
        echo '</div>';

        echo '</form>';
        echo '</div>'; // Fechando .login-wrapper
        echo '</div>'; // Fechando .login-body
        echo '</div>'; // Fechando .form-header
    }
}
