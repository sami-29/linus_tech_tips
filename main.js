
const AddToCart = document.querySelectorAll('.add-to-cart');
const quantity_modifier = document.querySelector('.special_quantity_modifier');

// when the user clicks on the add to cart button give prompt to add or decrease quantity
AddToCart.addEventListener('click', (e) => {
    quantity_modifier.style.display = 'block';
    console.log('clicked');
});


//<a href=<?php echo "./pages/cart/cart.php?search_id=".$product['id'] ?> > ADD TO CART</a> 