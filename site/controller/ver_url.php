<?php
class ver_url{
    public function trocar_url($url){
        if(empty($url)){
            $url = "..\secoes\home.php";
        }else{
            $url = "../secoes/$url.php";
        }
        include_once($url);
    }
}