<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <link rel="shortcut icon" href="favicon.png" type = "image/png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   <div class="main">


    <div class="head">

        <input type="text" id="search" placeholder="دنبال کجا می‌گردی؟">
        


    </div>
    <div class="mapContainer">
         <div id="map"></div>
    </div>
    <img src="assets/img/current.png" class="currentLoc">
   </div>

   <div class="modal-overlay" style="display: none;">
        <div class="modal">
            <span class="close">x</span>
            <h3 class="modal-title">ثبت لوکیشن</h3>
            <div class="modal-content">
                <form id='add-location-form' action="<?=site_url("process/add_location.php");?>" method="POST">
                <div class="field-row">
                            <div class="field-title">مختصات</div>
                            <div class="field-content">
                                <input name = "latitude" id="lat-display"  readonly style="width: 160px; text-align: center;">
                                <input name = "longitude" id="lng-display" readonly style="width: 160px; text-align: center;">
                            </div>
                    </div>
                    <div class="field-row">
                            <div class="field-title">نام مکان</div>
                            <div class="field-content">
                                <input type="text" name="title" id='l-title' placeholder="مثلا: دفتر مرکزی سون لرن">
                            </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">نوع</div>
                        <div class="field-content">
                            
                            <select name="type" id='l-type'>
                            <?php foreach(location_types as $key => $value):?>
                            <option value="<?=$key?>" style="font-family: sahel ;" ><?=$value?></option>
                            <?php endforeach;?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">ذخیره نهایی</div>
                        <div class="field-content">
                            <input type="submit" value=" ثبت ">
                        </div>
                    </div>
                    <div class="ajax-result"></div>
                </form>
            </div>
        </div>
    </div>

 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" ></script>
<script src="assets/js/script.js"></script>







    
</body>
</html>
