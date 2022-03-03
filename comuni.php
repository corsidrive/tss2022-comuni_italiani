<?php 
// xx.xx.com?colore=rosso&altezza=10 
// print_r($_SERVER);
print_r($_GET);

// echo "non mi vedrai mai";
?>
<?php 
$cicio = file_get_contents("https://comuni-ita.herokuapp.com/api/comuni/piemonte");
// var_dump($comuni);
$comuni = json_decode($cicio,true);

// FILTRO DI RICERCA TESTUALE NOME COMUNE
$cerca_comune = $_GET['nome_comune'];
$risultato = array();

foreach ($comuni as $comune) {
    if($comune['nome'] == $cerca_comune){
        // Aggiunge un comune all'array dei risultati
        $risultato[] = $comune;
    }
}

print_r($risultato);

?>
<?php include "./layout/header.php" ?>

    <main class="container">
        <table class="table table-striped">
            <tr>
                <th class="text-end">index</th>
                <th class="nome">nome</th>
                <th>codice catastale</th>
                <th>latitudine</th>
                <th>longitudine</th>
            </tr>
            <?php 
            //$i = 0;
            foreach($risultato as $key => $comune) { ?>
            <tr>
                <th class="text-end" ><?php echo  $key + 1 ?></th>
                <td><?php echo $comune['nome'] ?></td>
                <td class="text-center text-primary"><?= $comune['codiceCatastale'] ?></td>
                <td width="1%"><?= $comune['coordinate']['lat'] ?> </td>
                <td class="px-5" width="1%"><?= $comune['coordinate']['lng'] ?></td>
            </tr>
           <?php } ?>
        </table>
    </main>
<?php include "./layout/footer.php" ?>