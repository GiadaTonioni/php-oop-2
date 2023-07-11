<?php
    class Accessori extends Prodotti{
        public $material;
        public $size;

        public function __construct(String $_name, String $_image, String $_price, String $_category, String $_size, String $_materials){
            parent::__construct($_name, $_price, $_category);
            $this->materials = $_materials;
            $this->size = $_size;
        }
    }

?>
           
            