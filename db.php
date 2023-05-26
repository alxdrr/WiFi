<?php
$host = "localhost";
$name = "wisata_finder";
$user = "root";
$pass = "125125";
$conn = mysqli_connect($host, $user, $pass, $name);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

function get_wisata_place_keywords(){
  global $conn;

  // Mengambil data dari database
  $query = mysqli_query($conn, "SELECT * FROM keyword_tempat_wisata");
  // Mekonversi data menjadi array
  while( $tempat_wisata = mysqli_fetch_assoc($query)){
    $data[] = $tempat_wisata;
  }
  // Memproses keywordnya
  $list_keyword_wisata_place = [];
  foreach($data as $place){
    $key = $place["place_name"];
    $detail_name = explode(" ", $place["detail_name"]);
    $detail_location = explode(" ",$place["detail_location"]);
    $value = array_merge($detail_name, $detail_location);
    $list_keyword_wisata_place[$key] = $value;
  }
  return $list_keyword_wisata_place;
}

function get_wisata_place_photo_path(){
  global $conn;
  $query = mysqli_query($conn, "SELECT * FROM photo_wisata_place");
  while( $tempat_wisata = mysqli_fetch_assoc($query)) {
    $data[] = $tempat_wisata;
  }
  $list_photo_path = [];
  foreach($data as $place){
    $list_photo_path[$place["place_name"]] = $list_photo_path["folder_path"];
  }
  return $list_photo_path;
}

function get_detail_wisata($keyword){
  global $conn;
  $query = mysqli_query($conn, "SELECT * FROM detail_wisata WHERE place_name = '$keyword'");
  while( $temp = mysqli_fetch_assoc($query)){
    $detail[] = $temp;
  }
  return $detail[0];
}

function get_review($keyword){
  global $conn;
  $query = mysqli_query($conn, "SELECT * FROM reviews WHERE place_name = '$keyword'");
  while( $temp = mysqli_fetch_assoc($query)){
    $reviews[] = $temp;
  }
  return $reviews;
}

function get_events($keyword){
  global $conn;
  $query = mysqli_query($conn, "SELECT * FROM wisata_events WHERE place_name = '$keyword'");
  while( $temp = mysqli_fetch_assoc($query)){
    $events[] = $temp;
  }
  return $events;
}
