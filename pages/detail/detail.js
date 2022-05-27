var url = new URL(window.location.href);
var item = url.searchParams.get('item');
console.log(item)


const main = document.querySelector('#main');
if(item === null){
    main.innerHtml = `<div class = "error">
    <h2 class = "error__title">Error 404</h2>
    <p class = "error__text">The page you are looking for does not exist</p>
    </div>`;
}
else{
    main.innerHTML = `<div class = item_card>
    <img class = "item_card__img" src = "${item.img}" alt = "${item.name}">
    <div class = "item_card__info">
    <p class = "item_card__title">${item.cpu_model}</p>
    <p> Rating: <span class = "item_card__rating">${item.ratings}⭐ ${item.nbr_votes} votes</span></p>
    <p> Price: <span class = "item_card__price">${item.price}$</span></p>
    <p class = "item_card__description">${item.about_this_item}</p>
    <div class = "item_card__buttons">
    <button class = "item_card__button">Add to cart</button>
    <button class = "item_card__button">Buy now</button>
    </div>
    </div>
    </div>`;
}