<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require('components/head.php'); ?> 
        <title>Conference</title>   
    </head>    
    <body>     
        <?php require('components/header.php'); ?> 
        <div class="container mb-5">
            <h1 class="title"><?=$title?></h1>
            
            <form method="POST" class="bordered form">
                <div class="row">
                    <div class="mb-3 col">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required value="<?php echo $date?>" readonly>
                    </div>
                    <div class="mb-3 col">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time" name="time" required value="<?php echo $time?>" readonly>
                    </div>                    
                </div>
                <div>
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" value="<?=$country?>" readonly>
                </div>    
                <div class="row d-none">
                    <div class="mb-3 col">
                        <label for="longtitude" class="form-label">Longtitude</label>
                        <input type="number" class="form-control" id="longtitude" name="longtitude" required value="<?php echo $longtitude?>" readonly>
                    </div>
                    <div class="mb-3 col">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="number" class="form-control" id="latitude" name="latitude" required value="<?php echo $latitude?>" readonly>
                    </div>                    
                </div>
                <div id="map"></div>  
                <div class="btn-col mt-5">
                    <a href="/conference/<?=$id?>/edit" class="col-2 btn btn-warning mb-3">Edit</a>
                    <a href="/conference/<?=$id?>/delete" class="col-2 btn btn-danger mb-3">Delete</a>
                </div>                       
            </form>
            
        </div>        
        <?php require('components/footer.php'); ?> 
        <script type="module" src="../../Views/assets/js/initMap.js"></script>
        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCORehQ0Aj4Sg_2wV5h5goAeBo5yjheSbU&callback=initMap">
        </script>
    </body>
</html>