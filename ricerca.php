<?php include "./layout/header.php" ?>
<main class="container">

    <form action="comuni.php">
    
    <div class="mb-3">
        <label class="form-label" for="cerca">Scrivi il nome del comune da cercare</label>
        <input class="form-control" id="cerca" type="text"> 
    </div>
 

    <button class="btn btn-primary" type="submit">cerca</button>
    </form>

</main>
<?php include "./layout/footer.php" ?>