<?php

    class File {
        private $filename;
        
        public function __construct($filename){
            $this->filename = $filename;
        }

        public function getFilename(){
            return $this->filename;
        }

        public function setFilename($filename){
            $this->filename = $filename;
        }

        public function createDir(){
            if(!is_dir($this->getFilename())){
                mkdir($this->getFilename());
                return true;
            }else{
                return false;
            }
        }

        public function removeDir(){
            if(is_dir($this->getFilename())){
                rmdir($this->getFilename());
                return true;
            }else{
                return false;
            }
        }

        public function createFile(){
            
        }
    }

?>