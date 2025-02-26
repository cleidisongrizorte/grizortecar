<?php

class IndexView
{
    // Método para exibir a página inicial para usuários não logados
    function exibirPaginaInicial()
    {
        echo "
            <div class='container mt-5'>
                <div class='row justify-content-center'>
                    <div class='col-md-6 text-center'>

                    <!-- Botão para realizar auto cadastro -->
                     <a href='index.php?control=cliente&action=novo' class='btn btn-success btn-lg btn-block mb-3'>
                        Realize seu cadastro
                    </a>

                    <!-- Botão para realizar login -->
                    <a href='index.php?control=login' class='btn btn-primary btn-lg btn-block mb-3'>
                        Fazer login
                    </a>
                    </div>
                </div>
            </div>";
    }

    // Método para exibir a página inicial do usuário logado
    function exibirPaginaInicialConectado($agendamentos, $nomesServicos)
    {
        echo "<div class='container mt-5'>
                <div class='row justify-content-center'>
                    <div class='col-md-6 text-center'>";

        // Exibe mensagem da sessão, se existir
        if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
            $message = htmlspecialchars($_SESSION['message']['text']); // Evita XSS
            $messageType = $_SESSION['message']['type'];
            $alertClass = ($messageType == 'success') ? 'alert-success' : 'alert-danger';

            echo "<div class='container mt-3'>
                    <div class='alert $alertClass text-center fw-bold fs-3' role='alert'>$message</div>
                  </div>";

            unset($_SESSION['message']); // Limpa a mensagem após exibição
        }

        echo "   <!-- Botões de ação -->
                    <a href='index.php?control=agendamento&action=novo' class='btn btn-primary btn-lg btn-block mb-3'>
                        Novo Agendamento
                    </a>
                    <a href='index.php?control=login&action=logout' class='btn btn-secondary btn-lg btn-block mb-3'>
                        Sair
                    </a>";

        echo "   <div class='mt-4'>
                    <h5>Próximos Agendamentos</h5>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Horário</th>
                                <th>Serviço</th>
                                <th>Status</th> 
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>";

        $temProximos = false;
        $agendamentosAnteriores = [];

        if (!$agendamentos) {
            echo "<tr><td colspan='5' class='text-center'>Você não possui agendamentos!</td></tr>";
        } else {
            foreach ($agendamentos as $index => $agendamento) {
                $dataHoraInicio = strtotime($agendamento->getDataHoraInicio());
                $data = date("d/m/Y", $dataHoraInicio);
                $hora = date("H:i", $dataHoraInicio);
                $status = htmlspecialchars($agendamento->getStatus());
                $servicoNome = htmlspecialchars($nomesServicos[$index] ?? "Nome do serviço não encontrado");

                $agendamentoPassado = time() > $dataHoraInicio;

                if ($agendamentoPassado) {
                    $status = "concluido";
                    $agendamentosAnteriores[] = [
                        'data' => $data,
                        'hora' => $hora,
                        'servicoNome' => $servicoNome,
                        'status' => $status
                    ];
                    continue;
                } else {
                    $temProximos = true;
                }


                $badgeClass = $status == 'cancelado' ? 'badge bg-danger' : ($status == 'agendado' ? 'badge bg-primary' : 'badge bg-success');

                echo "<tr>
                        <td>{$data}</td>
                        <td>{$hora}</td>
                        <td>{$servicoNome}</td>
                        <td><span class='$badgeClass'>" . ucfirst($status) . "</span></td>
                        <td>";
                if ($status === 'agendado') {
                    echo "<a href='?control=agendamento&action=cancelar&agendamento_id=" . htmlspecialchars($agendamento->getId()) . "' class='btn btn-warning btn-sm' onclick='return confirmarCancelamento()'>
                            Cancelar
                          </a>";
                }
                echo "</td></tr>";
            }
        }

        if (!$temProximos && $agendamentos) {
            echo "<tr><td colspan='5' class='text-center'>Você não possui agendamentos futuros!</td></tr>";
        }

        echo "   </tbody>
                </table>
              </div>";

        // Exibir agendamentos anteriores, se houver
        if (!empty($agendamentosAnteriores)) {
            echo "<div class='mt-4'>
                    <h5>Agendamentos Anteriores</h5>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Horário</th>
                                <th>Serviço</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>";

            foreach ($agendamentosAnteriores as $agendamento) {
                echo "<tr>
                        <td>{$agendamento['data']}</td>
                        <td>{$agendamento['hora']}</td>
                        <td>{$agendamento['servicoNome']}</td>
                        <td><span class='badge bg-success'>" . ucfirst($agendamento['status']) . "</span></td>
                      </tr>";
            }

            echo "   </tbody>
                    </table>
                  </div>";
        }

        echo "   </div>
                </div>
              </div>";
    }
}
?>
