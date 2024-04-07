// array voor productitels in op te laan
let titles = [];
// array voor productprijzen in op te laan
let prices = [];
//elementen ophalen
let titlesElements = document.getElementsByClassName('title');
let priceElements = document.getElementsByClassName('price');
//producten en prijzen ophalen en in de arrays steken
for (let i = 0; i < priceElements.length; i++) {
    let getPrice = priceElements[i].textContent;
    let price = parseFloat(getPrice);
    prices.push(price);

    let getTitle = titlesElements[i].textContent;
    titles.push(getTitle);
}

// maken van de array counters met waarde 0 met dezelfde lengte als de titles array 
// Wanneer een product wordt toegevoegd, wordt de overeenkomstige teller verhoogd
let counters = Array(titles.length).fill(0);
// de ul opragen om de games aan toe te voegen
const ul = document.getElementById('list');
// array voor bijhouden van de li elementen
const li = [];
// button en totaal prijs elementen ophalen
const button = document.getElementsByClassName('button');
const totalP = document.getElementById('total');
//winkelwagen items bijhouden
const cartItems = [];
//eventlisteners toevoegen aan knoppen
for (let i = 0; i < button.length; i++) {
    button[i].addEventListener('click', function (e) {
        //teller van het gekozen product verhogen
        counters[i]++;
        //kijken of het item al in de winkelmand zit 
        const itemInCart = li.some(item => item.textContent.includes(titles[i]));
        // knop aanmaken voor het verwijderen van het product
        const deleteButton = document.createElement('button');
        deleteButton.style.width = '1rem';
        deleteButton.style.height = '1rem';
        deleteButton.style.paddingBottom = '1rem';
        deleteButton.textContent = 'X';
        //als het product er nog niet in zit word er een nieuwe li gemaakt
        if (!itemInCart) {
            li[i] = document.createElement('li');
            li[i].appendChild(document.createTextNode(`${titles[i]} ${prices[i]}eu `));
            li[i].appendChild(deleteButton);
            ul.appendChild(li[i]);
        }
        //als het er al in zit update de li 
        else {
            const priceUpdate = prices[i] * counters[i];
            li[i].textContent = `${counters[i]}x ${titles[i]} ${priceUpdate}eu `
            li[i].appendChild(deleteButton);
        }
        //eventlisteners toevoegen aan deleteknop
        deleteButton.addEventListener('click', function (e) {
            //counter laten aftellen
            counters[i]--;
            //als de counter op 0 komt word de text leeg 
            if (counters[i] === 0)
                li[i].innerHTML = "";
            //anders word de prijs geupdate 
            else {
                const priceUpdate = prices[i] * counters[i];
                li[i].textContent = `${counters[i]}x ${titles[i]} ${priceUpdate}eu `
                li[i].appendChild(deleteButton);
                ul.appendChild(li[i]);
            }
            //het totaal bedrag berekenen en bijwerken
            let total = 0;
            for (let index = 0; index < prices.length; index++) {
                total += prices[index] * counters[index];
            }
            totalP.textContent = `Totaal bedrag: ${total}eu`;
        });
        //Totaalbedrag opnieuw berekenen en bijwerken na toevoegen van een product
        let total = 0;
        for (let index = 0; index < prices.length; index++) {
            total += prices[index] * counters[index];
        }
        totalP.textContent = `Totaal bedrag: ${total} eu`;
    });

}


