<?php

class ClienteView
{
    function exibirFormularioCadastro(){
        // HTML  para o formulario de cadastro de cliente
        echo "
        <h3>Cadastrar Cliente</h3>
        <form action='processarCadastro.php' method='POST'>
            <label for='nome'>Nome:</label><br>
            <input type='text' id='nome' name='nome' required><br><br>
            
            <label for='email'>E-mail:</label><br>
            <input type='email' id='email' name='email' required><br><br>
            
            <label for='senha'>Senha:</label><br>
            <input type='password' id='senha' name='senha' required><br><br>
            
            <label for='telefone'>Telefone:</label><br>
            <input type='text' id='telefone' name='telefone' required><br><br>
            
            <input type='submit' value='Cadastrar'>
        </form>
        ";
    }
}

?>
