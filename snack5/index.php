<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 

$cit = "Ezechiele, 25:17. Il cammino dell'uomo timorato è minacciato da ogni parte dalle iniquità degli esseri egoisti e dalla tirannia degli uomini malvagi.
Benedetto sia colui che nel nome della carità e della buona volontà, conduce i deboli attraverso la valle delle tenebre, perché egli è in verità il pastore di suo fratello e il ricercatore dei figli smarriti. E la mia giustizia calerà sopra di loro con grandissima vendetta e furiosissimo sdegno su coloro che si proveranno ad ammorbare, e infine a distruggere i miei fratelli. E tu saprai che il mio nome è quello del Signore, quando farò calare la mia vendetta sopra di te";

$frasi = explode("." , $cit);

/* var_dump($frasi); */

for($i=0; $i<count($frasi); $i++){
    echo $frasi[$i];
    echo "<br>";
}
?>