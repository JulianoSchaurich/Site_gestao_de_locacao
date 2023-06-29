<?php
include_once("../dao/conexao.php");
class objeto extends conexao{
    protected $id;

    public function set_id($id){
        $this->id = $id;
    }
    public function get_id(){
        return $this->id;
    }
    public function get_nome(){
        $this->sql = "SELECT nome FROM objeto WHERE id=$this->id";
        $this->qr = self::exeSQL($this->sql);

        $lista = array();

        while($row = @mysqli_fetch_assoc($this->qr)){
            array_push($lista, $row);
        }

        return $lista[0]['nome'];
    }
    public function get_quantidade(){
        $this->sql = "SELECT quantidade FROM objeto WHERE id=$this->id";
        $this->qr = self::exeSQL($this->sql);

        $lista = array();

        while($row = @mysqli_fetch_assoc($this->qr)){
            array_push($lista, $row);
        }

        return $lista[0]['quantidade'];
    }
    public function get_link_imagem(){
        $this->sql = "SELECT link_imagem FROM objeto WHERE id=$this->id";
        $this->qr = self::exeSQL($this->sql);

        $lista = array();

        while($row = @mysqli_fetch_assoc($this->qr)){
            array_push($lista, $row);
        }

        return $lista[0]['link_imagem'];
    }
    public function update_quantidade($quantidade){
        $this-> sql = "UPDATE objeto SET quantidade = '$quantidade' WHERE id = $this->id;";
        if(self::exeSQL($this->sql)){
            $this->status = ("Funfo!");
        }
        else{
            $this->status = ("Não funfo!".mysqli_error());
        }
    }
}
?>