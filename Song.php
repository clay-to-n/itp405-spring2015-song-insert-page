<?php

require_once __DIR__ . '/Database.php';

class Song extends Database
{
  private $title;
  private $id;
  private $genreId;
  private $price;
  
  // setTitle($title) - sets a title instance property
  public function setTitle($title)
  {
    $this->title = $title;
  }
  //  setArtistId($id) - sets an artist_id instance property
  public function setArtistId($id)
  {
    $this->id = $id;
  }
  //  setGenreId($genre_id) - sets a genre_id instance property
  public function setGenreId($genreId)
  {
    $this->genreId = $genreId;
  }
  //  setPrice($prie) - sets a price
  public function setPrice($price)
  {
    $this->price = $price;
  }
  //  save() - performs the insert
  public function save()
  {
    
  }
  //  getTitle() - returns the song title
  public function getTitle()
  {
    return $this->title;
  }
  //  getId() - returns the id column of this song in the database (more on this below)
  public function getId()
  {
    return $this->id;
  }
}