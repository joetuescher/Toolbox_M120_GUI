<?php

class GewichtsmasseModel{

    public function __construct(){

    }

    public function Gewichtsmasse($value){
        $wert=$value['Input'];

    switch ($value['dropdown1']) {
    case 'Gramm':
        if($value['dropdown2']=='Gramm'){
            return $value;
        }

        else if($value['dropdown2']=='Pfund'){
            $value['Input']=$wert*0.00220462;
            return $value;
        }

        else if($neu=='Kilogramm'){
            $value['Input']=$wert*0.001;
            return $value;
        }

        else if($value['dropdown2']=='Tonne'){
            $value['Input']=$wert*0.000001;
            return $value;
        }
        break;

    case 'Pfund':
        if($value['dropdown2']=='Gramm'){
            $value['Input']=$wert*453.592;
            return $value;
        }

        else if($value['dropdown2']=='Pfund'){
            return $value;
        }

        else if($value['dropdown2']=='Kilogramm'){
            $value['Input']=$wert*0.453592;
            return $value;
        }

        else if($value['dropdown2']=='Tonne'){
            $value['Input']=$wert*0.000001;
            return $value;
        }
        break;

    case 'Kilogramm':
        if($value['dropdown2']=='Gramm'){
            $value['Input'] = $wert*1000;
            return $value;
        }

        else if($value['dropdown2']=='Pfund'){
            $value['Input']=$wert*2.20462;
            return $value;
        }

        else if($value['dropdown2']=='Kilogramm'){
            return $wert;
        }

        else if($value['dropdown2']=='Tonne'){
            $value['Input']=$wert*0.001;
            return $value;
        }
        break;

    case 'Tonne':
        if($value['dropdown2']=='Gramm'){
            $value['Input']=$wert*1000000;
            return $value;
        }

        else if($value['dropdown2']=='Pfund'){
            $value['Input']=$wert*2204.62;
            return $value;
        }

        else if($value['dropdown2']=='Kilogramm'){
            $value['Input']=$wert*1000;
            return $value; 
        }

        else if($value['dropdown2']=='Tonne'){
            return $value;
        }
        break;
    default:
            return 'Bitte etwas auswählen';
    }

    }
}
?>