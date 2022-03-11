<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heladosController extends Controller
{
    public function helados($opc){
       //if ( $opc>=1 && $opc<=3 ){}
       if ($opc==1 or $opc==2 or $opc==3){
           //se recomienda incializar las variables
           $valorHelado=3000;
           $valorTopping=0;
           $Topping='';
           $valorTotal=0;

           //programa la opcion de chocolate
            if ($opc==1){
                $valorTopping=500;
                $Topping='Chocolate';
            }

            elseif ($opc==2){
                $valorTopping=1000;
                $Topping='Brownie';
            }

            elseif ($opc==3){
                $valorTopping=1500;
                $Topping='Delicatessen';
            }

        $valorTotal = $valorHelado + $valorTopping;
        return 'El Topping escogido es: ' .$Topping. 'y su precio es' .$valorTopping. 'El valor total a paagr es:' .$valorTotal;
       }
       else{
            return 'Opcion no valida';
        }
    }
}
