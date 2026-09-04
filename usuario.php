<?php
    class usuario {
        public $codigo, $nome, $login, $senha;

        function __construct($codigo, $nome, $login, $senha)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->login = $login;
            $this->senha = $senha;
        }

        function validaUsuarioSenha($login, $senha) {
            if ($this->login == $login && $this->senha == $senha) {
                return true;
            } else {
                return false;
            }
        }
    }
?>