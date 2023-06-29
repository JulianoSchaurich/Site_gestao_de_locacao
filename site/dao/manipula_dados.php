<?php
    include_once("conexao.php");

    class manipula_dados extends conexao{
        protected $table, $fields, $dados, $status, $fieldid, $valueid;

        public function set_table($tabela){
            $this->table = $tabela;
        }
        public function set_fields($campos){
            $this->fields = $campos;
        }
        public function set_fieldid($chavep){
            $this->fieldid = $chavep;
        }
        public function set_valueid($valorchave){
            $this->valueid = $valorchave;
        }
        public function set_dados($dados){
            $this->dados = $dados;
        }
        public function get_status(){
            return $this->status;
        }
        public function insert(){
            $this-> sql = "INSERT INTO $this->table($this->fields) VALUES ($this->dados);";
            if(self::exeSQL($this->sql)){
                $this->status = ("Funfo!");
            }
            else{
                $this->status = ("Não funfo!".mysqli_error());
            }
        }
        public function delete(){
            $this-> sql = "DELETE FROM $this->table WHERE $this->fieldid = $this->valueid;";
            if(self::exeSQL($this->sql)){
                $this->status = ("Funfo!");
            }
            else{
                $this->status = ("Não funfo!".mysqli_error());
            }
        }
        public function get_all_data_table(){
            $this->sql = "SELECT * FROM $this->table";
            $this->qr = self::exeSQL($this->sql);

            $lista = array();

            while($row = @mysqli_fetch_assoc($this->qr)){
                array_push($lista, $row);
            }

            return $lista;
        }
        public function validar_login($login, $senha){
            $this->sql = "SELECT * FROM $this->table WHERE nome='$login' and senha='$senha' and status=1";
            $this->qr = self::exeSQL($this->sql);
            $linhas = @mysqli_num_rows($this->qr);
            return $linhas;
        }
        public function validar_usuario($login){
            $this->sql = "SELECT * FROM $this->table WHERE nome='$login' and status=1";
            $this->qr = self::exeSQL($this->sql);
            $linhas = @mysqli_num_rows($this->qr);
            return $linhas;
        }
        public function get_id($login, $senha){
            $this->sql = "SELECT id FROM $this->table WHERE nome='$login' and senha='$senha'";
            $this->qr = self::exeSQL($this->sql);
            $lista = array();
            while($row = @mysqli_fetch_assoc($this->qr)){
                array_push($lista, $row);
            }

            return $lista[0]['nome'];
        }
        public function get_objetos_alugados($nome_usuario){
            $this->sql = "SELECT o.link_imagem, o.nome, u.* FROM objeto o INNER JOIN usuario_objeto u ON u.id_objeto = o.id WHERE u.nome_usuario = '$nome_usuario' and u.quantidade_objeto > 0;";
            $this->qr = self::exeSQL($this->sql);

            $lista = array();

            while($row = @mysqli_fetch_assoc($this->qr)){
                array_push($lista, $row);
            }

            return $lista;
        }
        public function update_objeto($id, $nome, $quantidade, $link){
            $this-> sql = "UPDATE objeto SET nome = '$nome', quantidade = '$quantidade', link_imagem='$link' WHERE id = $id;";
            if(self::exeSQL($this->sql)){
                $this->status = ("Funfo!");
            }
            else{
                $this->status = ("Não funfo!".mysqli_error());
            }
        }
        public function update_usuario($id, $nome, $senha, $nome_usuario){
            $linhas = $this->validar_usuario($nome);
            
            if($linhas == 0){
                $this-> sql = "UPDATE usuario SET nome = '$nome', senha = '$senha' WHERE id = $id;";
                if(self::exeSQL($this->sql)){
                    $this->status = ("Funfo!");
                }
                else{
                    $this->status = ("Não funfo!".mysqli_error());
                }

                $objetos=$this->get_objetos_alugados($nome_usuario);
                foreach($objetos as $objeto){
                    if($objeto["quantidade_objeto"] > 0){
                        $id_usuario_objeto = $objeto["id"];

                        $this-> sql = "UPDATE usuario_objeto SET nome_usuario = '$nome' WHERE id = $id_usuario_objeto;";
                        if(self::exeSQL($this->sql)){
                            $this->status = ("Funfo!");
                        }
                        else{
                            $this->status = ("Não funfo!".mysqli_error());
                        }
                    }
                }
            }            
        }
    }
?>