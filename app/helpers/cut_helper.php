<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('cut_img'))
{
	function cut_img($id,$a,$b)
	{
	   $file = realpath("img/wallpaper/{$id}/{$id}.jpg");
       $image = imagecreatefromjpeg($file);
       $i_ancho = imagesx($image);
       $i_alto = imagesy($image);
       $x = $a;
       $y = $b;
       $p = 2 * ($x + $y);
       $Xmax = $p / 4;
       $Ymax = $y * ($Xmax / $x);
       $K1 = $i_ancho / $Xmax;
       $K2 = $i_alto / $Ymax;
       if ($K1 <= $K2)
       {
            $ancho = $K1 * $Xmax;
            $alto = $K1 * $Ymax;
            $cut = imagecreatetruecolor($ancho, $alto);
            $origen_x = ($i_ancho - $ancho) / 2;
            $origen_y = ($i_alto - $alto) / 2;
            imagecopy($cut, $image, 0, 0, $origen_x, $origen_y, $ancho, $alto);
        }
        elseif ($K1 > $K2)
        {
            $ancho = $K2 * $Xmax;
            $alto = $K2 * $Ymax;
            $cut = imagecreatetruecolor($ancho, $alto);
            $origen_x = ($i_ancho - $ancho) / 2;
            $origen_y = ($i_alto - $alto) / 2;
            imagecopy($cut, $image, 0, 0, $origen_x, $origen_y, $ancho, $alto);
        }
        imagedestroy($image);
        //obtenemos la imagen pekena
        $i_w = imagesx($cut);
        $i_h = imagesy($cut);
        $resized = imagecreatetruecolor($a, $b);

        imagecopyresampled($resized, $cut, 0, 0, 0, 0, $a, $b, $i_w, $i_h);

        imagejpeg($resized,"img/wallpaper/{$id}/{$a}x{$b}-{$id}.jpg",100);
	}
}