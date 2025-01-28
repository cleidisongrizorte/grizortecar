<?php

include_once __DIR__ . '/ClienteView.php';

class ClienteControl {
    // Método que trata a requisição do usuário
    public function handleRequest($action, $params) {
        
        // Verifica se a requisição é POST e se existe ação definida
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            switch ($action) {
                case 'cadastrar':
                    // Implementar lógica para cadastrar um cliente
                    // Exemplo: chamar um modelo de cliente para salvar os dados no banco
                    break;
                
                case 'atualizar':    
                    // Implementar lógica para atualizar os dados do cliente
                    // Exemplo: pegar o ID do cliente e atualizar as informações
                    break;
                    
                case 'apagar':
                    // Implementar lógica para apagar um cliente
                    // Exemplo: pegar o ID do cliente e remover do banco de dados
                    break;
            }
        } else {
            // Caso a requisição não seja POST (ex: GET), trata outras ações
            switch($action) {
                case 'listar':
                    // Exibir lista de clientes
                    // Exemplo: Consultar clientes no banco e passar para a view
                    break;

                case 'novo':
                    // Exibir formulário de cadastro de novo cliente
                    $view = new ClienteView();
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
