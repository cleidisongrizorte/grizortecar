<?php
class Cliente {

    // Atributos
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $senha;

    //Metodo construtor
    public function __construct($id; $nome; $telefone; $email; $senha){
        $this ->id = $id;
        $this ->nome = $nome;
        $this ->telefone = $telefone;
        $this ->email = $email;
        $this ->senha = $senha;

    }

    // Metodos get

    public function getId(){
        return $this->id
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
    }

    //Metodos Set

    public function setId($id){
        $this->id = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setId($id){
        $this->id = $id;
    }
    


    //Metodos
    public function cadastrar(){

    }
    public function atualizar(){

    }
    public function apagar(){

    }
    public function realizar(){

    }


}

?>