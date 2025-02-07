<?php

// Certifique-se de que o caminho para o arquivo de banco de dados está correto
include_once __DIR__ . '../../database/Database.php';

class Cliente {

    // Atributos
    private $id;
    private $nome;
    private $sobrenome;
    private $data_nascimento;
    private $genero;
    private $telefone;
    private $email;
    private $senha;

    // Método construtor
    public function __construct($id, $nome, $sobrenome, $data_nascimento, $genero, $telefone, $email, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data_nascimento = $data_nascimento;
        $this->genero = $genero;
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

    public function getSobrenome() {
        return $this->sobrenome;
    }

        public function getData_nascimento() {
        return $this->data_nascimento;
    }
        public function getGenero() {
        return $this->genero;
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
        public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
        public function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }
        public function setGenero($genero) {
        $this->genero = $genero;
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
        $stmt = $conn->prepare("INSERT INTO cliente(nome, sobrenome, data_nascimento, genero, telefone, email, senha) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $this->nome, $this->sobrenome, $this->data_nascimento, $this->genero, $this->telefone, $this->email, $this->senha);

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
        $stmt = $conn->prepare("UPDATE cliente SET(nome, sobrenome, data_nascimento, genero, telefone, email, senha) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $this->nome, $this->sobrenome, $this->data_nascimento, $this->genero, $this->telefone, $this->email, $this->senha);

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
        
    }

    // Método para realizar alguma ação (ainda não implementado)
    public function realizar() {
        
    }
}

?>
