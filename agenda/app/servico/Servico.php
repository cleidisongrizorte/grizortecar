<?php

// Certifique-se de que o caminho para o arquivo de banco de dados está correto
include_once __DIR__ . '../../database/Database.php';

class Servico{
    // Atributos
    private $id_servico;
    private $nome;
    private $descricao;
    private $preco;
    private $status;

    // Método construtor
    public function __construct($id_servico, $nome, $descricao, $preco, $status){
        $this->id_servico = $id_servico; 
        $this->nome = $nome;
        $this->descricao = $descricao;  
        $this->preco = $preco;
        $this->status = $status;
    }

    // Métodos get
    public function getId_servico(){
        return $this->id_servico;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function getPreco() {
        return $this->preco;
    }
    public function getStatus() {
        return $this->status;
    }

    // Métodos set
    public function setId_servico($id_servico){
        $this->id_servico = $id_servico;  
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function setStatus($status){
        $this->status = $status;
    }

    // Método para cadastrar serviço
    public function cadastrar(){
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Preparar a execução da query de inserção
        $stmt = $conn->prepare("INSERT INTO servico (nome, descricao, preco, status) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->nome, $this->descricao, $this->preco, $this->status);

        // Executar e verificar o sucesso
        if ($stmt->execute()){
            $stmt->close();
            $db->closeConnection();
            return true;
        } else{
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

    // Método para atualizar serviço
    public function atualizar(){
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Preparar a execução da query de atualização
        $stmt = $conn->prepare("UPDATE servico SET nome = ?, descricao = ?, preco = ?, status = ? WHERE id_servico = ?");
        $stmt->bind_param("ssssi", $this->nome, $this->descricao, $this->preco, $this->status, $this->id_servico);

        // Executar e verificar o sucesso
        if ($stmt->execute()){
            $stmt->close();
            $db->closeConnection();
            return true;
        } else{
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

    // Método para apagar serviço (ainda não implementado)
    public function apagar() {
        
    }

    // Método para realizar alguma ação (ainda não implementado)
    public function realizar() {
        
    }
}
?>
