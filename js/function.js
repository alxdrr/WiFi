//Bagian show event
const showEvent = document.getElementById("event");
const eventPlace =  document.getElementById("list event");
let a = 0;
showEvent.addEventListener('click', function(){
    if(a == 0){
    //Buat objek ajax
    var xhr = new XMLHttpRequest();
    
    //cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            eventPlace.innerHTML = xhr.responseText;
            a += 1;
        }
    }
    xhr.open('GET', 'php/show_event.php', true);
    xhr.send();
    }
    else{
        eventPlace.innerHTML = "";
        a -= 1;
    }

})

//Bagian show review
const showReview = document.getElementById("review");
const reviewPlace = document.getElementById("list review")
let i = 0;

showReview.addEventListener('click', function(){
    if(i == 0){
    //Buat objek ajax
    var xhr = new XMLHttpRequest();
    
    //cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            reviewPlace.innerHTML = xhr.responseText;
            i += 1;
        }
    }
    xhr.open('GET', 'php/show_reviews.php', true);
    xhr.send();
    }
    else{
        reviewPlace.innerHTML = "";
        i -= 1;
    }

})


