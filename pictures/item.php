<?php
    class item{
        private $PLU;
        private $name;

        public function __construct(string $PLU, string $name){
            $this->PLU = $PLU;
            $this->name = $name;
        }
        public function setPLU(string $PLU){
            $this->PLU = $PLU;
        }
        public function setName(string $name){
            $this->name = $name;
        }
        public function getPLU(){
            return $this->PLU;
        }
        public function getName(){
            return $this->name;
        }
    }
