<?php 
require "db.php";
function get_query($sql)
{
    global $conn;
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo mysqli_errno($conn);
    }
    $arrQuery = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $arrQuery[] = $row;
    }
return $arrQuery;
}

function search_wisata_place($search_word){
  # Menyimpan key untuk diambil data tempat wisatanya di database
  $data_pariwisata = get_wisata_place_keyword(); 
  # Mengambil key yang di input oleh user
  
  // kalok $_POST["search"] ada valuenya baru search
    $search_key = strtolower($search_word);
    $search_keys = explode(" ", $search_key);
    # Mencari tempat wisata sesuai dengan input dari user
    foreach($search_keys as $search_keyword){
      foreach($data_pariwisata as $key => $keywords){
        foreach($keywords as $keyword ){
          if ($keyword === $search_keyword){
            $temp_item[] = $key;
          }
        }
      }
    }
  
  # Menghilangkan value yang sama
  $wisata_places = array_unique($temp_item);
  return $wisata_places;
  }