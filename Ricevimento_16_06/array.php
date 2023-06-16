<?php

function myFunction($arr){
    foreach($arr as $elemento) {
        echo $elemento . " ";
    }
}

//richiamo la funzione sull'array

$mioArray = [1, 2, 3, 4, 5];
myFunction($mioArray);



//funzionamento for:
    /*

indici  0 1 2 3 4    

//inizio for
array[0] --> 3
array[1] --> 5
array[2] --> 6
array[3] --> 2
array[4] --> 1
array[5] --> ERRORE

count(array) --> restituisco la dimensione dell'array

array  3 5 6 2 1  --> 5 elementi

*/


function stampa_for($array){

    //contiene numero di elementi che passo come parametro in ingresso alla funzione stampa_for
    //count --> conta elementi array

    $lunghezza = count($array);  // --> 5

    for($contatore=0; $contatore < $lunghezza; $contatore=$contatore+1){
        //accesso posizione --> array['posizione'] 
        echo $array[$contatore] . " ";
    }
}


//ORDINAMENTO

/*

  [3 1 2]

  devi fare confronti:

  - Prendi prima posizione e seconda posizione: 3 e 1
    - 3 > 1 se vero --> sono disordinati
        - scambi di posizione: [1 3 2]
    - 3 > 2 se vero --> sono disordinati
        - scambiare di posizione: [1 2 3]


    i=0;
    J=1;
    
     i j  
    [3 1 2]

    for:
        if array[i] > array[j]
            temporanea = array[j] --> 1
            array[j] = array[i]   --> 3  [- 3 2]
            array[i] = temporanea;      [1 3 2]





*/



?>