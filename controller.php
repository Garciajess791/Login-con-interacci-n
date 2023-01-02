<?php

$foto = [
    "https://cdnm.westwing.com/image/upload/v1/contenthub/app/uploads/es/2021/09/24104459/rsz_pexels-ksenia-chernaya-6129297.jpg",
    "https://www.mundopsicologos.com.ar/site/article/46327/36975/bailar-solo-trae-beneficios-a-tu-salud-0_ai1.jpg",
    "https://mejorconsalud.as.com/wp-content/uploads/2017/12/3-saludables-recetas-para-tu-cena-de-navidad.jpg",
    "https://educacion30.b-cdn.net/wp-content/uploads/2019/10/music-978x652.jpg",
    "https://d500.epimg.net/cincodias/imagenes/2015/12/02/lifestyle/1449051455_368192_1449051522_noticia_normal.jpg"
];



if (isset($_POST) && !empty($_POST)){ 
    if(isset($_POST['select'])){
        $valor = $_POST['select'];
        echo '<img src="'.$foto[$valor].'" alt="Imagen">';
        
    }
}










?>