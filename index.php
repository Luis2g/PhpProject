<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera aplicacion php</title>
</head>
<body>
    

    <?php

        $name = "Javier";
        echo( "Hola " . $name . "<br>" );
        var_dump("Hola " . $name . "<br>");
        $array = array(1, "probanso", 3, 4, 5);
        var_dump($array);

        $suma = 10 + 20;
        echo "<br> suma: " . $suma . "<br>";

        $message = 1 == 2 ? "Aprobado <br>" : "Reprobado <br>";

        echo $message;


        switch ($suma){
            case 30:
            case 31:  
            case 32:
                echo "Aquí...<br>";
                break;
            case 33: 
                echo "Allá...<br>";
            default:
                break;
        }

        for($i = 0; $i < 10; $i++){
            echo "Hola <br>";
        }


        $month = 2;
        $year = 2000;
        $isBiciesto = false;

        echo "El año es " . $year . "<br>";

        // $isBiciesto = ($year % 4) == 0 ? true : false;

        if( ($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0 ){
            $isBiciesto = true;
        }else{
            $isBiciesto = false;
        }

        var_dump( $isBiciesto);

        echo "El mes es " . $month . "<br>";

        switch($month){
            case 2:
                if($isBiciesto){
                    echo "tiene 29" . "<br>";
                }else {
                    echo "tiene 28" . "<br>";
                }
                break;
            case 1: 
            case 3: 
            case 5: 
            case 7:
            case 8:
            case 10:
            case 12:

                echo "El mes tiene 31 dias" . "<br>";

                break;
            case 4: 
            case 6:
            case 9: 
            case 11: 
                echo "El mes tiene 30 dias" . "<br>";
                break;
            
        }





    ?>

</body>
</html>