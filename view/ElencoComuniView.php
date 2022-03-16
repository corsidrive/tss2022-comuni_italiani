<?php
class ElencoComuniView
{

    private $comuni;
    public function __construct($comuni)
    {
        $this->comuni = $comuni;
    }

    public function render()
    { ?>
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
                foreach ($this->comuni as $key => $comune) { ?>
                    <tr>
                        <th class="text-end"><?php echo  $key + 1 ?></th>
                        <td><?php echo $comune['nome'] ?></td>
                        <td class="text-center text-primary"><?= $comune['codiceCatastale'] ?></td>
                        <td width="1%"><?= $comune['coordinate']['lat'] ?> </td>
                        <td class="px-5" width="1%"><?= $comune['coordinate']['lng'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </main>
        <?php include "./layout/footer.php" ?>

<?php
    }
}//fine class