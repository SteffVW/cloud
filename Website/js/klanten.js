//een fetch aanroep voor de api met willekeurige gebruikers
fetch("https://randomuser.me/api/?results=12")
    .then(function (response) {
        //omzetten naar json
        return response.json()
    })
    .then(function (response) {
        // alle elementen ophalen 
        const titel = document.getElementsByClassName('aanspreektitel');
        const fName = document.getElementsByClassName('voornaam');
        const lName = document.getElementsByClassName('achternaam');
        const land = document.getElementsByClassName('land');
        const foto = document.getElementsByClassName('klantenfoto');
        // een loop maken zodat elke customer de gegevens heeft 
        for (let i = 0; i < response.results.length; i++) {
            //html aanpassen
            const customer = response.results[i];
            titel[i].textContent = customer.name.title;
            fName[i].textContent = customer.name.first;
            lName[i].textContent = customer.name.last;
            land[i].textContent = customer.location.country
            foto[i].src = customer.picture.medium
        }

    }
    );
