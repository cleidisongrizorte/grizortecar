<?php

include_once __DIR__ . '/FuncionarioView.php';
include_once __DIR__ . '/Funcionario.php';

class FuncionarioControl
{

    // Método que trata a requisição do usuário

    public function handleRequest($action, $params)
    {

        // Verifica se requisição é Post
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            switch ($action) {
                case 'cadastrar':
                    $nome = $params['nome'];
                    $sobrenome = $params['sobrenome'];
                    $data_nascimento = $params['data_nascimento'];
                    $genero = $params['genero'];
                    $telefone = $params['telefone'];
                    $email = $params['email'];
                    $senha = $params['senha'];
                    $cpf = $params['cpf'];
                    $matricula = $params['matricula'];
                    $funcao = $params['funcao'];
                    $status_funcionario = $params['status_funcionario'];


                    $funcionario = new Funcionario(null, $nome, $sobrenome, $data_nascimento, $genero, $telefone, $email, $senha, $cpf, $matricula, $funcao, $status_funcionario );

                    if ($funcionario->cadastrar()) {
                        $_SESSION['message'] = [
                            'text' => 'Funcionario cadastrado com sucesso.',
                            'type' => 'success'
                        ];
                        echo "Funcionario cadastrado com sucesso";
                    } else {
                        $_SESSION['message'] = [
                            'text' => 'Ocorreu um erro ao cadastrar o funcionario.',
                            'type' => 'error'
                        ];
                        echo "Ocorreu erro ao cadastrar o funcionario";
                    }

                    header('Location: ?control=index');
                    exit(); // Garante que o redirecionamento ocorra e o script não continue
                    break;


                case 'atualizar':
            }
        } else {
            switch ($action) {
                case 'listar':
                    $view = new FuncionarioView();
                    $view->listarFuncionarios();
                    break;

                case 'novo':
                    // Exibir formulário de cadastro do Funcionario
                    $view = new FuncionarioView();
                    $view->exibirFormularioCadastro();
                    break;

                case 'atualizar':

                    break;

                case 'apagar':

                    break;
            }
        }
    }
}
