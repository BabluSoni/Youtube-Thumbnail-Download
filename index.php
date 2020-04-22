<?php
if(isset($_POST["submit"])){
    $url = $_POST["url"];
    $value = explode ('v=',$url);
    $videoId = $value[1];
} ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Youtube Thumbnail Downloader</title>
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <section class="head-contents">
        <div class="buffer1 col-12"></div>
        <div class="container">
            <div class="main">
                <header class="text-center col-12">
                    <h1>Youtube Thumbnail Downloader</h1>
                </header>
                <div class="buffer2 col-12">
                    <form method="POST">
                        <input name="url" type="text" class="input-feild" placeholder="https://www.youtube.com/watch?v=q2fiIRU-ICA" autocomplete="off">
                       
                        <hr>
                        <button name="submit" class=" btn btn-warning btn-st">Submit</button>
                    </form>
                </div>
               
            </div>
        </div>
    </section>
    <?php if(!empty ($videoId)){ ?>

    <section class="main-contents">
          <div class="container ">
              <h4 class="text-white text-center pt-5">To download, right click and select "Save as..."</h4>
              <p class="text-warning text-center pt-1">Click on any image to view the full size.</p><br>
              <h4 class="text-white text-center pt-1">Notice: some links do not have max resolution versions</h4>
              <p class="text-warning text-center pt-1">(Even if the video is in 1080p!)</p>
              <div class="row text-center">              
                  <div class="col-md-10 offset-md-1">
                      <h2>Full HD (1080p and above)</h2>
                         <a href="https://img.youtube.com/vi/<?php echo $videoId; ?>/maxresdefault.jpg" target="_blank">
                          <img src="https://img.youtube.com/vi/<?php echo $videoId; ?>/maxresdefault.jpg" alt="Thumbnail Full HD" class="img-fluid">
                        </a>
                  </div>

                  <div class="col-md-10 offset-md-1">
                      <h2>HD (720p)</h2>
                         <a href="https://img.youtube.com/vi/<?php echo $videoId; ?>/sddefault.jpg" target="_blank">
                          <img src="https://img.youtube.com/vi/<?php echo $videoId; ?>/sddefault.jpg" alt="Thumbnail Full HD" class="img-fluid">
                        </a>
                  </div>

                  <div class="col-md-10 offset-md-1">
                      <h2>Standard quality (480p)</h2>
                         <a href="https://img.youtube.com/vi/<?php echo $videoId; ?>/hqdefault.jpg" target="_blank">
                          <img src="https://img.youtube.com/vi/<?php echo $videoId; ?>/hqdefault.jpg" alt="Thumbnail Full HD" class="img-fluid">
                        </a>
                  </div>

                  <div class="col-md-10 offset-md-1">
                      <h2>Medium (360p)</h2>
                         <a href="https://img.youtube.com/vi/<?php echo $videoId; ?>/mqdefault.jpg" target="_blank">
                          <img src="https://img.youtube.com/vi/<?php echo $videoId; ?>/mqdefault.jpg" alt="Thumbnail Full HD" class="img-fluid">
                        </a>
                  </div>
              </div>
           </div>
           <div class="buffer3 col-12"></div>
      </section>

       <?php } ?>
    </body>

    </html>