<?php
    class Movimento
    {
        private $idMovimento;
        private $fgTipo;
        private $dtMovimento;
        private $dsDescricao;
        private $nuValor;
        private $fgStatus;
        private $teCategoria_idCategoria;
        private $teUsuario_idUsuario;

        function __construct(){}

        function __destruct(){}

        function getIdMovimento() { return $this->idMovimento; }
        function setIdMovimento($_idMovimento)
        {
            if(! is_numeric($_idMovimento))
            {
                return false;
            }
            $this->idMovimento = $_idMovimento;
        }

        function getFgTipo() { return $this->fgTipo; }
        function setFgTipo($_fgTipo)
        {
            if($_fgTipo != "R")
            {
                $_fgTipo = "D";
            }
            $this->fgTipo = $_fgTipo;
        }

        function getDtMovimento() { return $this->dtMovimento; }
        function setDtMovimento($_dtMovimento)
        {
            if(is_($_dtMovimento))
            {
                return false;
            }
            $this->dtMovimento = $_dtMovimento;
        }

        function getDsDescricao() { return $this->dsDescricao; }
        function setDsDescricao($_dsDescricao)
        {
            if(strlen($_dsDescricao) > 3)
            {
                return false;
            }
            $this->dsDescricao = $_dsDescricao;
        }

        function getNuValor() { return $this->nuValor; }
        function setNuValor($_nuValor)
        {
            if(strlen($_nuValor) > 3)
            {
                return false;
            }
            $this->nuValor = $_nuValor;
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

        function getIdCategoria() { return $this->teCategoria_idCategoria; }
        function setIdCategoria($_teCategoria_idCategoria)
        {
            if(! is_numeric($_teCategoria_idCategoria))
            {
                return false;
            }
            $this->teCategoria_idCategoria = $_teCategoria_idCategoria;
        }

        function getIdUsuario() { return $this->teUsuario_idUsuario; }
        function setIdUsuario($_teUsuario_idUsuario)
        {
            if(! is_numeric($_teUsuario_idUsuario))
            {
                return false;
            }
            $this->teUsuario_idUsuario = $_teUsuario_idUsuario;
        }
    }