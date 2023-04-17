<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- testo iniziale -->
    <h1>BadWords</h1>
    <?php
        $testo =  $_GET['text'];
        $badWord = $_GET['word'];
        $replace = "***"
    ?>
    <h2>Il tuo testo originale</h2>
    <p>
    <?php
        echo $testo;
    ?>

    </p>
    <!-- /testo iniziale -->
    <div>
        La lunghezza del testo è di :
        <?php
            echo strlen($testo);
        ?>
        caratteri.

    </div>
    <br>
    <hr>

    <!-- testo modificato -->
    <h2>Testo con parola censurata</h2>
    <p>
        <?php
            if(strpos($testo, $badWord) !== false){
                str_replace($badWord, $replace, $testo);

                $nuovoTesto = str_replace($badWord, $replace, $testo);
                echo $nuovoTesto;

            }else{
                echo "parola non trovata";
            }
        ?>
    </p>

    <div>

        La lunghezza del nuovo testo è di: 
        <?php
            if(strpos($testo, $badWord) !== false){
                echo strlen($nuovoTesto);
            }else{
                echo 0;
            }
        ?> 
        caratteri.

    </div>

    <div>
        Parola censurata : 
        <?php 
            echo $badWord;
        ?>
        
    </div>

    <!--/ testo modificato -->
</body>
</html>