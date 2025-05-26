 const subText =  `Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur nisi quisquam neque tempore nihil laudantium veritatis, atque similique nulla? Alias sequi in, unde quidem hic obcaecati aut minus? Earum, ipsam.`;

const products = [
    {image:'assets/images/logo.jpeg',
     name:'Graphic Design',
     price:6999,
    },

    {image:'assets/images/logo.jpeg',
        name:'UI/UX Design',
        price:5999,
    },

    {image:'assets/images/logo.jpeg',
        name:'Graphic Mobile',
        price:4999,
    },

    {image:'assets/images/logo.jpeg',
        name:'Web Development',
        price:2999,
    }
];


const services = [
    {image:'assets/images/slider.jpeg',
        name:'Graphic Design',
        description:subText
    },

    {image:'assets/images/hero.png',
        name:'Web Development',
        description:subText
    },

    {image:'assets/images/logo.jpeg',
        name:'CCTV Camera Installation',
        description:subText
    },

    {image:'assets/images/whatsapp.png',
        name:'Microsoft Office Suite',
        description:subText
    },
];

const msg ="hello";

function displayCard(item, isProduct = true){
    return `<div class="main-card">
            <img src="${item.image}" class='card-img' alt="${item.name}">
            <div class="card-title">${item.name}</div>
            <div class="card-subtitle">${isProduct?"Price: "+item.price/100:item.description}</div>
            ${isProduct? "":"<button class='button-read-more btn-dark p-2'> Read more</button>" }
          </div>`;
}


// document.querySelector('.product-card').innerHTML = products.map(p=>displayCard(p)).join("");
// document.querySelector('.service-card').innerHTML = services.map(s =>displayCard(s, false)).join("");


// const buttonReadMore = document.querySelectorAll('.button-read-more');


//     buttonReadMore.forEach((buttons)=>{
//        buttons.addEventListener('click', ()=>{
//         alert(`aah!: ${buttons.textContent}`);
//         console.log(`aah!: ${buttons.textContent}`);
//        });
// });


const productContainer = document.querySelector('.product-card');
const serviceContainer = document.querySelector('.service-card');

if (productContainer) {
    productContainer.innerHTML = products.map(p => displayCard(p)).join("");
}

if (serviceContainer) {
    serviceContainer.innerHTML = services.map(s => displayCard(s, false)).join("");
}

// This must come after DOM is updated
const buttonReadMore = document.querySelectorAll('.button-read-more');
buttonReadMore.forEach((buttons) => {
    buttons.addEventListener('click', () => {
        alert(`aah!: ${buttons.textContent}`);
        console.log(`aah!: ${buttons.textContent}`);
    });
});
