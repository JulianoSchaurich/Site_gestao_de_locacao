<?php
include_once("../dao/conexao.php");
class usuario extends conexao{
    protected $id;

    public function set_id($id){
        $this->id = $id;
    }
    public function get_id(){
        return $this->id;
    }
    public function get_nome(){
        $this->sql = "SELECT nome FROM usuario WHERE id=$this->id";
        $this->qr = self::exeSQL($this->sql);

        $lista = array();

        while($row = @mysqli_fetch_assoc($this->qr)){
            array_push($lista, $row);
        }

        return $lista[0]['nome'];
    }
    public function get_senha(){
        $this->sql = "SELECT senha FROM usuario WHERE id=$this->id";
        $this->qr = self::exeSQL($this->sql);

        $lista = array();

        while($row = @mysqli_fetch_assoc($this->qr)){
            array_push($lista, $row);
        }

        return $lista[0]['senha'];
    }
    public function update_status($status){
        $this-> sql = "UPDATE usuario SET status = '$status' WHERE id = $this->id;";
        if(self::exeSQL($this->sql)){
            $this->status = ("Funfo!");
        }
        else{
            $this->status = ("Não funfo!".mysqli_error());
        }
    }
}
?>