<?php
    class Categoria
    {
        private $idCategoria;
        private $nmCategoria;
        private $fgStatus;

        function __construct(){}

        function __destruct(){}

        function getIdCategoria() { return $this->idCategoria; }
        function setIdCategoria($_idCategoria)
        {
            if(! is_numeric($_idCategoria))
            {
                return false;
            }
            $this->idCategoria = $_idCategoria;
        }

        function getNmCategoria() { return $this->nmCategoria; }
        function setNmCategoria($_nmCategoria)
        {
            if(strlen($_nmCategoria) > 3)
            {
                return false;
            }
            $this->nmCategoria = $_nmCategoria;
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