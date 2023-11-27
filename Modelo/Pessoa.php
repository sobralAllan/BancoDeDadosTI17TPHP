<?php
    namespace POO\ProjetoBDPHP\Modelo;

    class Pessoa{

        public int $cpf;
        public string $nome;
        public string $telefone;
        public string $endereco;
        public string $email;

        public function __construct(int $cpf, string $nome, string $telefone, string $endereco, string $email){
            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->email    = $email;
        }//fim do construtor

        public function getCPF():int 
        {
            return $this->cpf;
        }//fim do get

        public function setCPF(int $cpf):void
        {
            $this->cpf = $cpf;
        }//fim do método set

        public function getNome():string 
        {
            return $this->nome;
        }//fim do get

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//fim do método set

        public function getTelefone():string 
        {
            return $this->telefone;
        }//fim do get

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//fim do método set

        public function getEndereco():string 
        {
            return $this->endereco;
        }//fim do get

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//fim do método set

        public function getEmail():string 
        {
            return $this->email;
        }//fim do get

        public function setEmail(string $email):void
        {
            $this->email = $email;
        }//fim do método set



    }//fim da classe
?>