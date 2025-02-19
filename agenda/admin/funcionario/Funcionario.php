<?php

// Certifique-se de que o caminho para o arquivo de banco de dados está correto
include_once __DIR__ . '../../database/Database.php';

class Funcionario {

    // Atributos
    private $id_funcionario;
    private $nome;
    private $sobrenome;
    private $data_nascimento;
    private $genero;
    private $telefone;
    private $email;
    private $senha;
    private $cpf;
    private $matricula;
    private $funcao;
    private $status_funcionario;

    // Método construtor
    public function __construct($id_funcionario, $nome, $sobrenome, $data_nascimento, $genero, $telefone, $email, $senha, $cpf, $matricula, $funcao, $status_funcionario) {
        $this->id_funcionario = $id_funcionario;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data_nascimento = $data_nascimento;
        $this->genero = $genero;
        $this->telefone = $telefone;
        $this->email = $email;
        // Aqui fazemos o hash da senha antes de armazená-la
        $this->senha = password_hash($senha, PASSWORD_BCRYPT);
        $this->cpf = $cpf;
        $this->matricula = $matricula;
        $this->funcao = $funcao;
        $this->status_funcionario = $status_funcionario;
    }

    // Métodos get
    public function getId_funcionario() {
        return $this->id_funcionario;
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

    public function getSenha() {
        return $this->senha;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getFuncao() {
        return $this->funcao;
    }

    public function getStatus_funcionario() {
        return $this->status_funcionario;
    }

    // Métodos set
    public function setId_funcionario($id_funcionario) {
        $this->id_funcionario = $id_funcionario;
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

    // Este método também pode ser modificado para permitir alteração da senha
    public function setSenha($senha) {
        // Caso o usuário queira mudar a senha, aplicar o hash nela
        $this->senha = password_hash($senha, PASSWORD_BCRYPT);
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setFuncao($funcao) {
        $this->funcao = $funcao;
    }

    public function setStatus_funcionario($status_funcionario) {
        $this->status_funcionario = $status_funcionario;
    }

    // Método para cadastrar cliente
    public function cadastrar() {
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Preparar e executar a query de inserção
        $stmt = $conn->prepare("INSERT INTO funcionario(nome, sobrenome, data_nascimento, genero, telefone, email, senha, cpf, matricula, funcao, status_funcionario) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssss", $this->nome, $this->sobrenome, $this->data_nascimento, $this->genero, $this->telefone, $this->email, $this->senha, $this->cpf, $this->matricula, $this->funcao, $this->status_funcionario);

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

    }

    // Método para apagar cliente (ainda não implementado)
    public function apagar() {
        
    }

    // Método para realizar alguma ação (ainda não implementado)
    public function realizar() {
        
    }
}

?>
