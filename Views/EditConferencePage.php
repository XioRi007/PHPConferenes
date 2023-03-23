<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require('components/head.php'); ?> 
        <title>Edit Cnference</title>   
    </head>    
    <body>     
        <?php require('components/header.php'); ?> 
        <div class="container mb-5">
            <h1 class="title">Edit Conference</h1>
            <form method="POST" class="bordered form">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" name="title" required minlength="2" maxlength="255" value="<?php echo $title?>">
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required value="<?php echo $date?>">
                    </div>
                    <div class="mb-3 col">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time" name="time" required value="<?php echo $time?>">
                    </div>                    
                </div>
                <label for="country" class="form-label">Country</label>
                <select class="form-select" aria-label="Default select example" id="country" name="country" required>
                    <?php 
                        use Components\Utils;
                        $countries = Utils::getCountries();
                        foreach($countries as $_country): ?>
                            <option value="<?=$_country?>" <?php echo($_country == $country ? ' selected="selected"' : '');?>><?=$_country?></option>
                        <?php endforeach; 
                    ?>
                </select>   
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
                    <a href="/conference" class="col-2 btn btn-primary mb-3">Back</a>
                    <button type="submit" class="col-2 btn btn-success mb-3">Save</button>
                </div>            
            </form>
            
        </div>        
        <?php require('components/footer.php'); ?> 
        <script type="module" src="../../Views/assets/js/initMapClick.js"></script>
        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCORehQ0Aj4Sg_2wV5h5goAeBo5yjheSbU&callback=initMapClick">
        </script>
    </body>
</html>