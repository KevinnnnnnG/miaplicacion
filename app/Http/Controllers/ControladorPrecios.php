<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function Desucentos ($Dinero) {

        $Total=0;
        $Porcentaje='';

        if (is_numeric($Dinero)) {

        if ($Dinero>=0 && $Dinero<100000){
            return 'Este producto no tiene descuento';
        }
        if ($Dinero>=100000 && $Dinero<150000){

            $Resultado=$Dinero*0.2;
            $Total = ($Dinero-$Resultado);
            $Porcentaje='2%';
        }

        if ($Dinero>=150000 && $Dinero<300000){
            $Resultado=($Dinero*0.3);
            $Total = ($Dinero-$Resultado);
            $Porcentaje='3%';
        }

        if ($Dinero>=300000 && $Dinero<500000){
            $Resultado=($Dinero*0.3);
            $Total = ($Dinero-$Resultado);
            $Porcentaje='4%';
        }

        if ($Dinero>=500000){
            $Resultado=($Dinero*0.4);
            $Total = ($Dinero-$Resultado);
            $Porcentaje='5%';
        }
        if ($Dinero<0){

            return 'Ingresaste un valor negativo. Inténtelo nuevamente';
        }

        }

        else{
            return 'Ingresaste una letra';
        }

        return 'El descuento es de'.$Porcentaje.'el descuento es de:' .$Total;
    }

    public function IVA ($NombreArticulo,$SinIVA){
        $IVA=0.19;
        $IVA2=$SinIVA*$IVA;
        $Total=$SinIVA+$IVA2;

        return 'El articulo:'.$NombreArticulo.
                'Sin IVA:'.$SinIVA.
                'y el precio del IVA es'.$IVA.
                'el total a pagar por el articulo es de'.$Total;
    }
}
