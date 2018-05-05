<?php

    class Usuario {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        public function __construct($login = "", $password = ""){
            $this->setDeslogin($login);
            $this->setDessenha($password);
        }

        public function getIdusuario(){
            return $this->idusuario;
        }

        public function setIdusuario($idusuario){
            $this->idusuario = $idusuario;
        }

        public function getDeslogin(){
            return $this->deslogin;
        }

        public function setDeslogin($deslogin){
            $this->deslogin = $deslogin;
        }

        public function getDessenha(){
            return $this->dessenha;
        }

        public function setDessenha($dessenha){
            $this->dessenha = $dessenha;
        }

        public function getDtcadastro(){
            return $this->dtcadastro;
        }

        public function setDtcadastro($dtcadastro){
            $this->dtcadastro = $dtcadastro;
        }

        public function loadById($id){
            $sql = new SQL();
            $res = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

            if(count($res) > 0){
                $this->setData($res[0]);
            }
            
        }

        public static function getList(){
            $sql = new SQL();
            return $sql->select("SELECT * FROM tb_usuarios"); 
        }

        public static function search($login){
            $sql = new SQL();
            return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :LOGIN", array(":LOGIN"=>"%".$login."%"));
        } //Retorna todos os usuários que contém (%%) a string no nome

        public function login($login, $password){
            $sql = new SQL();
            $res = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
                ":LOGIN"=>$login,
                ":PASSWORD"=>$password
            ));

            if(count($res) > 0){
                $this->setData($res[0]);
            } else {
                throw new Exception("Login e/ou senha inválidos.");
                
            }
        }

        public function setData($data){
            $this->setIdusuario($data['idusuario']);
            $this->setDeslogin($data['deslogin']);
            $this->setDessenha($data['dessenha']);
            $this->setDtcadastro(new DateTime($data['dtcadastro']));
        }

        public function insert(){
            $sql = new SQL();
            $res = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
                ":LOGIN"=>$this->getDeslogin(),
                ":PASSWORD"=>$this->getDessenha()
            ));
            if(count($res) > 0){
                $this->setData($res[0]);
            }
        }

        public function update($login, $password){
            $this->setDeslogin($login);
            $this->setDessenha($password);

            $sql = new SQL();
            $res = $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
                ":ID"=>$this->getIdusuario(),
                ":LOGIN"=>$this->getDeslogin(),
                ":PASSWORD"=>$this->getDessenha()
            ));

        }

        public function delete(){
            $sql = new SQL();
            $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
                ":ID"=>$this->getIdusuario()
            ));

            $this->setIdusuario(0);
            $this->setDeslogin("");
            $this->setDessenha("");
            $this->setDtcadastro(new DateTime());
        }

        public function __toString(){
            return json_encode(array(
                'idusuario'=>$this->getIdusuario(), 
                'deslogin'=>$this->getDeslogin(), 
                'dessenha'=>$this->getDessenha(),
                'dtcadastro'=>$this->getDtcadastro()->format("d/m/Y H:i:s")
            ));
        }

    }

?>