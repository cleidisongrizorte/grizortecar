<?php

include_once __DIR__ . '/ServicoView.php';
include_once __DIR__ . '/Servico.php';

class ServicoControl {
    // Método que trata a requisição do usuário
    public function handleRequest($action, $params) {
        
        // Verifica se a requisição é POST e se existe ação definida
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            switch ($action) {
                case 'cadastrar':
                    $nome = $params['nome'];
                    $descricao = $params['descricao'];
                    $preco = $params['preco'];
                    $duracao = $params['duracao'];
                    $status_servico = $params['status_servico'];

                    $servico = new Servico(null, $nome, $descricao, $preco,$duracao, $status_servico);

                    if ($servico->cadastrar()) {
                        $_SESSION['message'] = [
                            'text' => 'Seu Serviço foi cadastrado com sucesso.',
                            'type' => 'success'
                        ];
                        echo "Seu Serviço foi cadastrado com sucesso";
                    } else {
                        $_SESSION['message'] = [
                            'text' => 'Ocorreu um erro ao cadastrar o serviço.',
                            'type' => 'error'
                        ];
                        echo "Ocorreu erro ao realizar seu cadastro";
                    }

                    header('Location: ?control=index');
                    exit(); // Garante que o redirecionamento ocorra e o script não continue
                    break;


                case 'atualizar':
            }
        } else {
            switch ($action) {
                case 'listar':
                    $view = new ServicoView();
                    $view->listarServico();
                    break;

                case 'novo':
                    // Exibir formulário de cadastro do cliente
                    $view = new ServicoView();
                    $view->exibirFormularioCadastro();
                    break;
                    
                case 'atualizar':
                    // Exibir formulário para atualizar os dados de um cliente
                    // Exemplo: Mostrar formulário com dados do cliente para edição
                    break;

                case 'apagar':
                    // Exibir mensagem de confirmação antes de apagar um cliente
                    // Exemplo: Mostrar cliente que será apagado e perguntar se o usuário deseja continuar
                    break;
            }
        }
    }
}

?>