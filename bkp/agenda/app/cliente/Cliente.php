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
        //$this->senha = $senha;
        // Aqui fazemos o hash da senha antes de armazená-la
        $this->senha = password_hash($senha, PASSWORD_BCRYPT);
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
        public function getSenha() {
        return $this->senha;
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



    //Este método também pode ser modificado para permitir alteração da senha
    public function setSenha($senha) {
        //Caso o usuário queira mudar a senha, aplicar o hash nela
       $this->senha = password_hash($senha, PASSWORD_BCRYPT);
    }

    // Método para cadastrar cliente
    public function cadastrar() {
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Verificar se o e-mail já está cadastrado
        $stmt = $conn->prepare("SELECT id FROM cliente WHERE email = ?");
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // E-mail já cadastrado
            $stmt->close();
            $db->closeConnection();
            return "email_existente";
        }

        $stmt->close();

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
        public static function realizaLogin($email, $senha) {
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM cliente WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($user = $result->fetch_assoc()) {
           //if ($senha == $user['senha']) {
                // Verifica a senha criptografada
            if (password_verify($senha, $user['senha'])) {
                // Autenticação bem-sucedida
                $conn->close();
                return new Cliente($user['id'], $user['nome'], $user['sobrenome'], $user['data_nascimento'], $user['genero'], $user['telefone'], $user['email'], $user['senha']);
            }
        }

        $conn->close();
        return false; // Falha na autenticação

    }
    public function buscarClientes() {}
}

?>
