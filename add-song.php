<?php
  require_once __DIR__ . '/Song.php';
  require_once __DIR__ . '/GenreQuery.php';
  require_once __DIR__ . '/ArtistQuery.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Song</title>
</head>
<body>
  <form method="post">
    Song: <input type="text" name="username"><br/>
    Artist: <input type="password" name="password"><br/>
    
    <input type="submit" value="Login" name="submit">
  </form>
</body>
</html>