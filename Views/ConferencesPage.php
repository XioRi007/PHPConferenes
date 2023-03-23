<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Conferences</title>
        <?php require('components/head.php'); ?>
    </head>    
    <body>       
        <?php require('components/header.php'); ?> 
        <div class="container mb-5">
            <h1 class="title">Conferences</h1>
            <div class="bordered">
                <?php foreach ($data as $item): ?>
                    <div class="card conference-card">
                        <div class="card-body d-flex row">
                            <div class="col">
                                <a class="card-title card-link" href="/conference/<?=$item['id']?>"><?= $item['title']; ?></a>
                                <p class="card-text"><?= $item['date']." ".$item['time']; ?></p>
                            </div> 
                            <div class="col-2 btn-col">
                                <a href="/conference/<?= $item['id']; ?>/edit" class="btn btn-warning ">Edit</a>
                                <a href="/conference/<?= $item['id']; ?>/delete" class="btn btn-danger ">Delete</a>
                            </div>                          
                            
                        </div>
                    </div>     
                <?php endforeach; ?>
            </div>
        </div>        
        <?php require('components/footer.php'); ?> 
        <script src="./javascript.js"></script>
    </body>
</html>
