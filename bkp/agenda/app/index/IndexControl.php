<?php
include_once __DIR__ . '/IndexView.php';
include_once __DIR__ . '/../database/Database.php';
include_once __DIR__ . '/../agendamento/Agendamento.php';
include_once __DIR__ . '/../../admin/servico/Servico.php';

class IndexControl
{
    // Método que trata a requisição do usuário
    public function handleRequest($action, $params)
    {
        // Verifica se a requisição é POST (não será usado aqui, mas mantido para consistência)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lógica para ações POST (se necessário no futuro)
        } else {
            // Lógica para ações GET
            switch ($action) {
                // Utilizar outros actions futuramente (ex: modificar perfil, cancelar agendamento)
                default:
                    // Caso o usuário esteja logado, obter agendamentos realizados
                    if (isset($_SESSION['user_id'])) {
                        $idCliente = $_SESSION['user_id'];
                        $agendamentos = Agendamento::agendamentosPorCliente($idCliente);

                        $nomesServicos = [];
                        foreach ($agendamentos as $agendamento) {
                            $servico = Servico::getById($agendamento->getServicoId());
                            $nomesServicos[] = $servico->getNome();
                        }
                        // Exibe a página inicial do cliente conectado
                        $view = new IndexView();
                        $view->exibirPaginaInicialConectado($agendamentos, $nomesServicos);
                        break;
                    } else {
                        // Exibe a página inicial para o usuário não logado
                        $view = new IndexView();
                        $view->exibirPaginaInicial();
                        break;
                    }
            }
        }
    }
}
