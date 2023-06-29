<?php
class ver_url_admin{
    public function trocar_url_admin($url_admin){
        if(empty($url_admin)){
            $url_admin = "../secoes_admin/admin_home.php";
        }else{
            $url_admin = "../secoes_admin/$url_admin.php";
        }
        include_once($url_admin);
    }
}