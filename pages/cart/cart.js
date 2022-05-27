const cart  = [
    {
        id: 1,
        name: 'Ryzen 3 3200G',
        price: '290',
        quantity: 1,
        img: '../../assets/ryzen-3-3200g.jpg',
        brand : 'AMD',
        ratings: '4.7',
        nbr_votes: "7300",
        cpu_manufacturer : 'AMD',
        cpu_model : 'AMD Ryzen 3 3200G 4-Core Unlocked Desktop Processor with Radeon Graphics',
        cpu_socket : 'AM4',
        cpu_core : '8',
        cpu_thread : '16',
        cpu_base_frequency : '3.5 GHz',
        cpu_turbo_frequency : '4.0 GHz',
        about_this_item : "Includes advanced Radeon Vega 8 graphics, no expensive graphics card required Can deliver smooth high definition performance in the world's most popular games 4 processing cores, bundled with the quiet AMD Wraith stealth cooler 4.0 GHz max boost, unlocked for overclocking, 6 MB cache, DDR 2933 support For the advanced socket AM4 platform. Base clock 3.6 GHz",
    },
    {
        id: 2,
        name: 'Ryzen 5 3600',
        ratings: '4.2',
        nbr_votes: "3452",
        price: '400',
        quantity: 2,
        img: '../../assets/RYZEN-5-3600.jpg',
        cpu_manufacturer : 'AMD',
        cpu_model : 'AMD Ryzen 5 3600 6-Core, 12-Thread Unlocked Desktop Processor with Wraith Stealth Cooler',
        about_this_item : "The world's most advanced processor in the desktop PC gaming segmentCan deliver ultra-fast 100+ FPS performance in the world's most popular games6 cores and 12 processing threads bundled with the quiet AMD wraith stealth cooler max temps 95°C4 2 GHz max Boost unlocked for overclocking 35 MB of game Cache DDR4 3200 support For the advanced socket AM4 platform can support PCIe 4 0 on x570 motherboards. OS Support-Windows 10 - 64-Bit Edition, RHEL x86 64-Bit, Ubuntu x86 64-Bit. Note-Operating System (OS) support will vary by manufacturer",
        
    },
    {
        id: 3,
        ratings: '4.0',
        nbr_votes: "9200",
        name: 'Intel core i3 10100f',
        cpu_manufacturer : 'INTEL',
        cpu_model : 'Intel CPU BX8070110100F Core i3-10100F / 3.6GHz / 6MB LGA1200 4C / 8T',
        price: '240',
        quantity: 1,
        img: '../../assets/intel-core-i3-10100f-36-ghz-43-ghz.jpg',
        about_this_item: "10th Generation Intel Core i3 Processor, 4 Cores; 8 Threads, 4.30 GHz Max Turbo Frequency, 3.60 GHz Processor Base Frequency, 6 MB Intel Smart Cache",
    },
]

const main = document.querySelector('#main');
if(cart.length === 0){
    main.innerHTML = `<div class="cart-empty">
    <h2 class="cart-empty__title">Your cart is empty</h2>
    <p>You have no items in your cart. To buy one or more items, click "Add to cart" next to the item.</p>
    </div>`;}
else{
    main.innerHTML = `<div class="cart"> 
    <div class="cart__header">
        <p>image</p>
        <p>name</p>
        <p>price</p>
        <p>quantity</p>
        <p>total</p>
    </div>
    ${cart.map(item => `
    <div class="cart__item">
    <a href = "../detail/detail.php?item=${encodeURIComponent(JSON.stringify(item))}"class="cart__item-img">
    <img src="${item.img}" alt="${item.name}"></a>
    <p class="cart__item-name">${item.name}</p>
    <p class="cart__item-price">${item.price}$</p>
    <p class="cart__item-quantity">Quantity: ${item.quantity}</p>
    <p class="cart__item-total">Total: ${item.quantity * item.price}$</p>
    </div>`).join('')}
    </div>`;
}
