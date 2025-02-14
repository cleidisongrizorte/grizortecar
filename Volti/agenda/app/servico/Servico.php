<?php

// Certifique-se de que o caminho para o arquivo de banco de dados está correto
include_once __DIR__ . '../../database/Database.php';

class Servico{
    // Atributos
    private $id_servico;
    private $nome;
    private $descricao;
    private $preco;
    private $duracao;
    private $status_servico;

    // Método construtor
    public function __construct($id_servico, $nome, $descricao, $preco, $duracao, $status_servico){
        $this->id_servico = $id_servico; 
        $this->nome = $nome;
        $this->descricao = $descricao;  
        $this->preco = $preco;
        $this->duracao = $duracao;
        $this->status_servico = $status_servico;
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
    public function getDuracao() {
        return $this->duracao;
    }
    public function getstatus_servico() {
        return $this->status_servico;
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
    public function setDuracao($duracao){
        $this->preco = $duracao;
    }
    public function setstatus_servico($status_servico){
        $this->status_servico = $status_servico;
    }

    // Método para cadastrar serviço
    public function cadastrar(){
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Preparar a execução da query de inserção
        $stmt = $conn->prepare("INSERT INTO servico (nome, descricao, preco, duracao, status_servico) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $this->nome, $this->descricao, $this->preco, $this->duracao, $this->status_servico);

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
        $stmt = $conn->prepare("UPDATE servico SET nome = ?, descricao = ?, preco = ?, duracao = ?, status_servico = ? WHERE id_servico = ?");
        $stmt->bind_param("ssssi", $this->nome, $this->descricao, $this->preco,  $this->duracao, $this->status_servico, $this->id_servico);

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
