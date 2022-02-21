//--------------------------------------------------------------------------------
//   Lab 1
//   Nom: William Tremblay
//   Date: 2022-02-04
//

function albumChange()
{
    if (document.querySelector("#lstAlbums").value === "album1")
    {
        var data = $.getJSON("https://jsonplaceholder.typicode.com/albums", function (donnees,status)
        {
            console.log(donnees)
        })
        document.getElementById("demo").innerHTML = data;
    }
    else if (document.querySelector("#lstAlbums").value === "album2")
    {
        $.get("https://jsonplaceholder.typicode.com/albums", function (donnees,status)
        {
            console.log(donnees)
        })
        document.getElementById("demo").innerHTML = "Album 2";
    }
    else if (document.querySelector("#lstAlbums").value === "album3")
    {
        $.get("https://jsonplaceholder.typicode.com/albums", function (donnees,status)
        {
            console.log(donnees)
        })
        document.getElementById("demo").innerHTML = "Album 3";
    }
}
