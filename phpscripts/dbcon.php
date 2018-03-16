<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "nmiart";

  $conn = mysqli_connect($server, $username, $password, $dbname);

  function getArtwork($id){
    $query = 'SELECT *
              FROM artworks
              WHERE id = ' .$id;
    return mysqli_fetch_assoc(mysqli_query($GLOBALS['conn'],$query));
  }

  function getShowcases($name){
    $query = 'SELECT *
              FROM showcase
              WHERE name = \'' .$name. '\'';
    return mysqli_query($GLOBALS['conn'],$query);
  }
?>
