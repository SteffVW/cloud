/* elementen selecteren*/
const wishlistText = document.getElementById('wishlistText');
const button = document.getElementById('wishlist');

//voor de button een eventlistener aanmaken
button.addEventListener('click', function (e) {
    // als de text er al in staat word het verwijdert
    if (wishlistText.innerHTML == "Wishlisted!") {
        wishlistText.innerHTML = ""
    }
    //anders word het toegevoegd
    else {
        wishlistText.innerHTML = "Wishlisted!"
    }
}
)


