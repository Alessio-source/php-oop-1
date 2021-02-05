<?php

    class Book {

        public function __construct($title, $overview, $author, $cover, $date) {
            return var_dump($title, $overview, $author, $cover, $date);
        }

    };

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    
        <?php
            $book1 = new Book("i promessi sposi", "I fatti si svolgono sullo sfondo della campagna lombarda e della città di Milano, tra il 1628 e il 1630. Don Abbondio è il curato incaricato di celebrare le nozze di due giovani filatori, Renzo e Lucia. Gli scagnozzi di Don Rodrigo, il signorotto del paese, gli intimano di non celebrare il matrimonio. Il prete non sa opporsi alle minacce e inventa delle scuse per rimandare il matrimonio arrivando poi a confessare che chi si oppone è Don Rodrigo. Renzo e Lucia, insieme alla madre di questa, Agnese, e a padre Cristoforo, loro guida spirituale, tentano di porre rimedio al sopruso. Renzo si reca dall'avvocato Azzeccagarbugli, mentre padre Cristoforo va al castello di Don Rodrigo per tentare di convincerlo a cambiare idea. Entrambi saranno scacciati in malo modo. Ai giovani non resta che tentare un matrimonio a sorpresa. Arriva la cosiddetta 'notte degli imbrogli': falliscono le nozze dei due giovani filatori, ma anche il tentativo di rapimento di Lucia architettato da Don Rodrigo. Intanto, padre Cristoforo ha organizzato la fuga dei due giovani che porterà Renzo a Milano e Lucia insieme ad Agnese in convento a Monza, sotto la protezione di Gertrude. Renzo capiterà in città in un periodo scosso da rivolte popolari; in questa occasione il giovane farà un'invettiva contro i potenti che lo porterà a essere ricercato dagli sbirri come capo dei rivoltosi. Don Rodrigo tenta ancora il rapimento di Lucia affidandosi a un oscuro signore del tempo, l'Innominato, che ne incarica il primo dei suoi bravi, il Nibbio, con la connivenza della monaca di Monza e di Egidio, il suo amante. Lucia viene rapita e portata al castello dell'Innominato: lì fa voto di castità impietosendo così il suo rapitore. Pentito, l'Innominato lascia andare Lucia e questa si ritrova coinvolta nelle ‘sciagure milanesi’: la discesa dei lanzichenecchi e l'epidemia di peste. Saranno contagiati dalla peste anche Lucia, padre Cristoforo e Don Rodrigo e condotti al lazzaretto dove, al termine di varie peripezie, arriverà finalmente anche Renzo. Quest'ultimo perdona il morente Don Rodrigo, mentre padre Cristoforo scioglie il voto di castità fatto da Lucia. Finita la peste, i due giovani possono finalmente ritrovarsi e cominciare un futuro prospero insieme.", "Alessandro Manzoni", "https://sites.google.com/site/aleemanzoomatii/_/rsrc/1490455454952/i-promessi-sposi/I-promessi-sposi.jpg", "agosto 1825");
        ?>

    </body>
</html>