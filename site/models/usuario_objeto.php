<?php
include_once("../dao/conexao.php");
class usuario_objeto extends conexao{
    protected $id, $id_objeto, $nome_usuario, $quantidade_objeto, $data;

    public function set_id($valor){
        $this->id = $valor;
    }
    public function get_id(){
        return $this->id;
    }
    public function set_id_objeto($valor){
        $this->id_objeto = $valor;
    }
    public function get_id_objeto(){
        $this->sql = "SELECT id_objeto FROM usuario_objeto WHERE id=$this->id";
        $this->qr = self::exeSQL($this->sql);

        $lista = array();

        while($row = @mysqli_fetch_assoc($this->qr)){
            array_push($lista, $row);
        }

        return $lista[0]['id_objeto'];
    }
    public function set_nome_usuario($valor){
        $this->nome_usuario = $valor;
    }
    public function get_nome_usuario(){
        $this->sql = "SELECT nome_usuario FROM usuario_objeto WHERE id=$this->id";
        $this->qr = self::exeSQL($this->sql);

        $lista = array();

        while($row = @mysqli_fetch_assoc($this->qr)){
            array_push($lista, $row);
        }

        return $lista[0]['nome_usuario'];
    }
    public function set_quantidade_objeto($valor){
        $this->quantidade_objeto = $valor;
    }
    public function get_quantidade_objeto(){
        $this->sql = "SELECT quantidade_objeto FROM usuario_objeto WHERE id=$this->id";
        $this->qr = self::exeSQL($this->sql);

        $lista = array();

        while($row = @mysqli_fetch_assoc($this->qr)){
            array_push($lista, $row);
        }

        return $lista[0]['quantidade_objeto'];
    }
    public function set_data($valor){
        $this->data = $valor;
    }
    public function get_data(){
        $this->sql = "SELECT data_reserva FROM usuario_objeto WHERE id=$this->id";
        $this->qr = self::exeSQL($this->sql);

        $lista = array();

        while($row = @mysqli_fetch_assoc($this->qr)){
            array_push($lista, $row);
        }

        return $lista[0]['data_reserva'];
    }
    public function insert_bd(){
        $this->sql = "INSERT INTO usuario_objeto(id_objeto, nome_usuario, quantidade_objeto, data_reserva) VALUES('$this->id_objeto', '$this->nome_usuario', '$this->quantidade_objeto', '$this->data');";
        if(self::exeSQL($this->sql)){
            $this->status = ("Funfo!");
        }
        else{
            $this->status = ("Não funfo!".mysqli_error());
        }
    }  
    public function update_quantidade_objeto($quantidade){
        $this-> sql = "UPDATE usuario_objeto SET quantidade_objeto = '$quantidade' WHERE id = $this->id;";
        if(self::exeSQL($this->sql)){
            $this->status = ("Funfo!");
        }
        else{
            $this->status = ("Não funfo!".mysqli_error());
        }
    }  
}
?>