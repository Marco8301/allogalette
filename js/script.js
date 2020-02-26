



// Code qui gère la géolocalisation
let geoloc = document.getElementById('zoneLivraison');

if (navigator.geolocation) {
    console.log('il y a géoloc');

    navigator.geolocation.getCurrentPosition(function (position) {
        console.log(position)
        $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&key=AIzaSyA9VCeYTBLZprpSfqWOtlw-j9rQUVTsCzg", function (data) {
            console.log(data)

            adresse = data.results[9].formatted_address
            geoloc.innerHTML = adresse
        })
    })
}

// Code qui gère le changement de taille du headerheader


var header = document.getElementById('myHeader');
var linkLogo = document.getElementById('linkLogo');
var sticky = header.offsetTop;

window.addEventListener("scroll", myFunction);

// Autre manière de l'écrire :
// window.onscroll = function () { myFunction() };


function myFunction() {

    if (window.pageYOffset > sticky && window.innerWidth >= 640) {
        linkLogo.style.width = "10%";
        header.classList.add("is-shrinkable");
    } else {
        linkLogo.style.width = "20%"
        header.classList.remove("is-shrinkable");
    }
}






// Code qui gère la page planning
let prev = document.getElementById('previous');
let next = document.getElementById('next');
let planning = document.getElementById('containerPlanning');
let div1 = document.getElementById('div1');
let div2 = document.getElementById('div2');
let div3 = document.getElementById('div3');
let tab = [div1, div2, div3];
let i = 0;
let resa = [];
let input = document.getElementById('coucou');
let input2 = document.getElementById('coucou2');
let input3 = document.getElementById('coucou3');
let but = document.getElementById('button');

function check(el) {
    input.checked = true;
    input.value = el.data("date");
    input2.value = el.data("heure");
    input3.value = el.data("id");

}

function uncheck(el) {
    input.checked = false;
}

$(function () {

    prev.addEventListener('click', function (event) {
        if (i > 0) {
            i--;
            tab[i + 1].style.display = "none";
            tab[i].style.display = "block";
        } else {
            i = 2
            tab[i].style.display = "block";
            tab[i - 1].style.display = "none";
            tab[i - 2].style.display = "none";
        }
    });

    next.addEventListener('click', function () {
        if (i < 2) {
            tab[i].style.display = "none";
            tab[i + 1].style.display = "block";

            i++
        } else {
            i = 0;
            tab[i].style.display = "block";
            tab[i + 1].style.display = "none";
            tab[i + 2].style.display = "none";
        }
    });

    $('#containerPlanning').on('click', 'td', function () {

        let thiss = $(this);

        if (thiss[0].classList.contains('is-selected')) {
            alert('Ce créneau est déja réservé');
        }

        else if (resa.length < 1) {
            thiss[0].classList.toggle('is-clicked');
            resa.push(thiss[0]);
            check($(this));

            but.removeAttribute("disabled");
            but.style.backgroundColor = '#c82437';
        }

        else {
            resa[0].classList.toggle('is-clicked');
            thiss[0].classList.toggle('is-clicked');
            uncheck()
            resa.pop();
            resa.push(thiss[0]);
            check($(this));
        }
    })

})


