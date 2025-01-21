<?php

// Certifique-se de que o caminho para o arquivo de banco de dados está correto
include_once __DIR__ . '../../database/Database.php';

class Cliente {

    // Atributos
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $senha;

    // Método construtor
    public function __construct($id, $nome, $telefone, $email, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
    }

    // Métodos get
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    // Métodos set
    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    // Método para cadastrar cliente
    public function cadastrar() {
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Preparar e executar a query de inserção
        $stmt = $conn->prepare("INSERT INTO cliente(nome, telefone, email, senha) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->nome, $this->telefone, $this->email, $this->senha);

        // Executar e verificar o sucesso
        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        } else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

    // Método para atualizar cliente (ainda não implementado)
    public function atualizar() {
         // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Preparar para atualizar
        $stmt = $conn->prepare("UPDATE cliente SET(nome, telefone, email, senha) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->nome, $this->telefone, $this->email, $this->senha);

        // Executar e verificar o sucesso
        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        } else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

    // Método para apagar cliente (ainda não implementado)
    public function apagar() {
        // Adicione a lógica de exclusão aqui
    }

    // Método para realizar alguma ação (ainda não implementado)
    public function realizar() {
        // Adicione a lógica para realizar alguma ação aqui
    }
}

?>
