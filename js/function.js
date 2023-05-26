// Bagian show event
const eventPlace = document.getElementById("list-event");
let a = 0;

if (a == 0) {
  // Buat objek ajax
  var xhrEvent = new XMLHttpRequest();

  // Cek kesiapan ajax
  xhrEvent.onreadystatechange = function () {
    if (xhrEvent.readyState == 4 && xhrEvent.status == 200) {
      eventPlace.innerHTML = xhrEvent.responseText;
      a += 1;
    }
  };
  xhrEvent.open("GET", "ajax/show_event.php?place=Tanah%Lot", true);
  xhrEvent.send();
} else {
  eventPlace.innerHTML = "";
  a -= 1;
}

// Bagian show review
const reviewPlace = document.getElementById("list-review");
let i = 0;

if (i == 0) {
  // Buat objek ajax
  var xhrReview = new XMLHttpRequest();

  // Cek kesiapan ajax
  xhrReview.onreadystatechange = function () {
    if (xhrReview.readyState == 4 && xhrReview.status == 200) {
      reviewPlace.innerHTML = xhrReview.responseText;
      i += 1;
    }
  };
  xhrReview.open("GET", "ajax/show_reviews.php?place=Tanah%Lot", true);
  xhrReview.send();
} else {
  reviewPlace.innerHTML = "";
  i -= 1;
}
