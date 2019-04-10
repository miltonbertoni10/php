<?php
class Acessos 
{
    //configurando contador de sistas
    public static function contadorVisitas(){
        if(!isset($_COOKIE['visita'])){
            //seta cookie para 7 dias na semana
            setcookie('visita','true',time() + ((((60*60)*24)*7)));
        }
    }

    public static function validateImage($image){
        if(($image['type'] == 'image/jpeg') || ($image['type'] == 'image/jpg') || 
        $image['type'] == 'image/png'){
            $tamanho = intval($image['size']/1024);
            if($tamanho < 300){
                return true;
            }else{
                return false;
            }
            
        }else{
            return false;
        }
    }
    //move o arquivo para uma pasta especifica
    public static function uploadFile($file){
        if(move_uploaded_file($file,UPLOADFILE . $file['name'])){
            return $file['name'];
        }else{
            return false;
        }
    }
}
