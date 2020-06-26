<?php
    class SuperHeroi{
        private $id;
        private $nome;
        private $poderEspecial;
        private $energia;
        private $forca;
        private $origem;

        public function __construct ($id, $nome, $poderEspecial, $energia, $forca, $origem){
            $this->id = $id;
            $this->nome = $nome;
            $this->poderEspecial = $poderEspecial;
            $this->energia = $energia;
            $this->forca = $forca;
            $this->origem = $origem;
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;
                return $this;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;
                return $this;
        }

        public function getPoderEspecial()
        {
                return $this->poderEspecial;
        }

        public function setPoderEspecial($poderEspecial)
        {
                $this->poderEspecial = $poderEspecial;
                return $this;
        }

        public function getEnergia()
        {
                return $this->energia;
        }

        public function setEnergia($energia)
        {
                $this->energia = $energia;
                return $this;
        }

        public function getForca()
        {
                return $this->forca;
        }

        public function setForca($forca)
        {
                $this->forca = $forca;
                return $this;
        }

        public function getOrigem()
        {
                return $this->origem;
        }

        public function setOrigem($origem)
        {
                $this->origem = $origem;
                return $this;
        }

        public function aumentarEnergia(){
            return $this->energia * 119123372;
        }

        public function calcularPoderMedio(){
            return ($this->energia + $this->forca)/2;
        }
    }
    $heroi1 = new SuperHeroi("1","GOKU","KAIOKEN", 1000, 7000, "JAPÃO");
    $heroi2 = new SuperHeroi("2", "Harry Potter", "MAGIA", 300, 700, "INGLATERRA");
    $heroi3 = new SuperHeroi("3","GAVIÃO ARQUEIRO", "ARCO E FLECHA", 5000, 5000, "EUA" );
    $heroi4 = new SuperHeroi("4", "DOLLY GUARANÁ", "SER O MELHOR REFRIGERANTE", 100000, 1000000, "BRASIL");
    echo $heroi1->aumentarEnergia();
?>