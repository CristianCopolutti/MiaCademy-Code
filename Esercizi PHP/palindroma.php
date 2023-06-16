<html>
    <head>
        <title>Esercizio parola palindroma</title>
        <style>
            .container{
                margin-top: 100px;
                text-align: center;
            }

            .button{
                cursor: pointer;
                padding: 10px 20px;
                font-size: 20px;
            }

            .button:hover{
                background-color: green;
            }

            .campo-input {
                margin-bottom: 10px;
            }

            .risultato {
                font-weight: bold;
                color: red;
            }

            
        </style>
    </head>
    <body>
        <?php
        function isPalindroma($parola){

            //metodi per lavorare sulle stringhe:
            // - strrev --> restituisce la parola passata come input a tale funzione al contrario
            // strrev(ciao)  --> oaic
            //strrev(gatto) --> ottag
            //strrev(anna) --> anna

            $parola_contrario = strrev($parola);

            //ritorno true --> se parola è palindroma
            //ritorno false --> se parola non è palindroma
            //strlower(CIAO)--> ciao
            
            return strtolower($parola) === strtolower($parola_contrario);
        }

        //isset --> is set: serve per verificare se la variabile è stata impostata
        // $_POST --> Cconterrà un solo dato
        $word = (isset($_POST['word'])) ? $_POST['word'] : '';
        $risultato = '';

        if (isset($_POST['verificaPalindroma'])){
            //controllare se la parola non è vuota
            if(!empty($word)){
                $risultato = isPalindroma($word) ? 'è una parola palindroma' : 'non è una parola palindroma'; 
            }
        }
        ?>
    <div class="container">
        <h1>Verifica se la parola è palindroma:</h1>
        <!-- metodo post: serve per elaborazione dei dati messi all'interno del form -->
        <form method="post">
            <label for="word">Parola:</label>
            <input type="text" class="campo-input" name="word" id="word" required><br>
            <input type="submit" class="button" name="verificaPalindroma" value="Verifica">
            <?php if (!empty($risultato)):?>
                <div class="risultato">La parola "<?php echo $word; ?>" <?php echo $risultato;?>.</div>
            <?php endif; ?>
        </form>
    </div>
    <body>
</html>