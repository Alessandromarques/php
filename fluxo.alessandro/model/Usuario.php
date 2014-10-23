<?php
    class Usuario
    {
        private $idUsuario;
        private $dsEmail;
        private $dsSenha;
        private $fgStatus;
        private $nmUsuario;
        
        function __construct(){}
        
        function __destruct(){}
        
        function getUsuario() { return $this->idUsuario; }
        function setUsuario($_usuario) 
        { 
            if(strlen($_usuario) < 3)
            {
                return false;
            }                
            $this->idUsuario = $_usuario;
        }

        function getEmail() { return $this->dsEmail; }
        function setEmail($_email)
        {
            if(strlen($_email) < 3)
            {
                return false;
            }
            $this->dsEmail = $_email;
        }

        function getSenha() { return $this->dsSenha; }
        function setSenha($_senha) 
        { 
            if(strlen($_senha) <= 4)
            {
                return false;
            }
            $this->dsSenha = sha1($_senha);
        }

        function setConfirmaSenha($_senha)
        {
            if($_senha != $this->dsSenha)
            {
                return false;
            }
        }

        function getNmUsuario() { return $this->nmUsuario; }
        function setNmUsuario($_nmUsuario)
        {
            if(strlen($_nmUsuario) < 3)
            {
                return false;
            }
            $this->nmUsuario = $_nmUsuario;
        }

        function getFgStatus() { return $this->fgStatus; }
        function setFgStatus($_fgStatus)
        {
            if($_fgStatus != "A")
            {
                $_fgStatus = "B";
            }
            $this->fgStatus = $_fgStatus;
        }
    }
