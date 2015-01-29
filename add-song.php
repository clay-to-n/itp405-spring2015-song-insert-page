<?php
  require_once __DIR__ . '/Song.php';
  require_once __DIR__ . '/GenreQuery.php';
  require_once __DIR__ . '/ArtistQuery.php';
  
  $artistQuery = new ArtistQuery();
  $artists = $artistQuery->getAll();

  $genreQuery = new GenreQuery();
  $genres = $genreQuery->getAll();


?>
<!DOCTYPE html>
<html>
  <head>
    <!-- jQuery might be overkill for this tiny app but we need it for bootstrap-select -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="/add-song.css">
    
    <title>Add Song</title>
  </head>
  
  <body>
    <div class="container">     
      <div class="row">
        <div class="add-song col-md-4 col-md-offset-4">

          <form method="post"> 
            <div class="input-group add-song">
              <input type="text" class="form-control" name="title" placeholder="Song Title">
              <span>
                <select class="selectpicker" data-live-search="true" data-width="100%">
                  <option data-hidden="true" value="">Artist</option>
                  <?php
                    foreach($artists as $artist){
                      echo "<option value=" . $artist['id'] . ">" . $artist['artist_name'] . "</option>";
                    }
                  ?>
                </select>
                <select class="selectpicker" data-live-search="true" data-width="100%">
                  <option data-hidden="true" value="">Genre</option>
                  <?php
                    foreach($genres as $genre){
                      echo "<option value=" . $genre['id'] . ">" . $genre['genre'] . "</option>";
                    }
                  ?>
                </select>
              </span>
              <input type="text" class="form-control" name="price" placeholder="Price" style="margin-top:8px">
              <button class="btn btn-default" type="submit" value="add" style="width:100%">Add</button>
            </div>
          </form>
          
        </div>
      </div> 
    </div>
  </body>
  
</html>