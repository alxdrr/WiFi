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
  $temp_item = [];
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
  if($temp_item == null){
    return null;
  }else{
    $wisata_places = array_unique($temp_item);
  return $wisata_places;
  }
}

  function show_wisata_image($wisata_places){
    if($wisata_places !== null){
      foreach($wisata_places as $place){
        $image_path = "Tempat Wisata\\" . $place . "\\" . $place . "-1.jpg";
        echo "<img src='$image_path' alt='no found image' width='300px' height='300px'>";
        echo "<h3>$place</h3>";
      }
    }else{
      return 0;
    }
  }