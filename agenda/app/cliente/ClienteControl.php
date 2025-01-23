<?php

include_once __DIR__ . '/ClienteView.php';
class ClienteControl{
    // Metodo que trata a requisição do usuario

    public function handleRequest($action, $params){
        
    //verifica se requisição e post e se existe ação

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        switch ($action){
            case 'cadastrar':
            
                
            case 'atualizar':    
        }
        else
        {
            switch($action){
                case 'listar':

                case 'novo':
                    // exibir formulario de cadastro de cliente
                    $view = new ClienteView();
                    $view->exibirFormularioCadastro();

                case 'atualizar':
                
                case 'apagar':


            }
        }

    }
    }
}
?>