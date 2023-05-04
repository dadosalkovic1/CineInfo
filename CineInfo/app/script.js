


function showelement(film){
    film.querySelector(".Info").style.display="block";
    film.querySelector(".Title").style.display="block";
}
function hideelement(film){
    film.querySelector(".Info").style.display="none";
    film.querySelector(".Title").style.display="none";
}



function gridshow(movies){

    movies.querySelector(".grid-movies-title").style.display="block";
    movies.querySelector(".grid-movies-desc").style.display="block";
    movies.querySelector(".grid-movies-info").style.display="block";
}
function gridhide(movies){

    movies.querySelector(".grid-movies-title").style.display="none";
    movies.querySelector(".grid-movies-desc").style.display="none";
    movies.querySelector(".grid-movies-info").style.display="none";
}

