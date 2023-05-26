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
  $data_pariwisata = get_wisata_place_keywords(); 
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

function get_detail_search(){
  global $conn;
  $query = mysqli_query($conn, "SELECT * FROM detail_wisata");
  while( $temp = mysqli_fetch_assoc($query)){
    $detail_places[] = $temp;
  }
  for($i=0; $i < count($detail_places); $i++){
    $list_details[$detail_places[$i]["place_name"]] = $detail_places[$i];
  }
  return $list_details;  
}

function show_wisata_image($wisata_places){
  // var_dump($wisata_places);
  if($wisata_places !== null){
    $details = get_detail_search();
  //   var_dump($details["Tanah Lot"]["address"]);
    foreach($wisata_places as $place){
      $title = $details[$place]["title"];
      $desc = $details[$place]["quick_desc"];
      $address = $details[$place]["address"];
      $definition = $details[$place]["quick_definition"];
      $image_path = "Tempat Wisata\\" . $place . "\\" . $place . "-1.jpg";
      echo "<div class='result-card'>";
      echo "<img src='$image_path' alt='no found image' class='card-img-top'";
      echo "<h1 class='card-title'>$title</h1>";
      echo "<h1 class='card-desc'>$desc</h1>";
      echo "<h1 class='card-location'>$address</h1>";
      echo "<p class='card-text'>$definition</p>";
      echo "<a id='btn-card' href='wisata_page.php?place=$place' class='bx bx-right-arrow-alt' type='button'></a>";
      echo "</div>";
    }
  }else{
    return 0;
  }
}
