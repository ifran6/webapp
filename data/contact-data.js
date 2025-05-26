
const contactText = `Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur nisi quisquam neque tempore nihil laudantium veritatis, atque similique nulla? Alias sequi in, unde quidem hic obcaecati aut minus? Earum, ipsam.`;
const subTitleContent = `.....`;

const contactData = [
    {name:'mission',
     descriptions:contactText,
     subtitle:subTitleContent,
    },

    {name:'Vision',
        descriptions:contactText,
        subtitle:subTitleContent,
    }
];

const officeAddress = `Lorem ipsum dolor, sit amet consectetur adipisicing elit.`;

const offices = [
    {name:'Head Office',
        descriptions:officeAddress,
        officeCont:'+234',
    },

    {name:'Branch Office',
        descriptions:officeAddress,
        officeCont:'+234',
    }
];


function contactDisplay(item, isContactCore = true){
    return `<div class="contact-card">
                <div class="contact-card-title">${item.name}</div>
                <div class="contact-details">${item.descriptions}</div>
                <div class="contact-subtitle">${isContactCore?item.officeCont:item.subtitle}</div>
            </div>`;
}

const contactHistory = document.querySelector('.js-contact-a');
const contactOffices = document.querySelector('.js-contact-b');

if(contactHistory){
    contactHistory.innerHTML = contactData.map(c=>contactDisplay(c, false)).join("");
}


if(contactOffices){
  contactOffices.innerHTML = offices.map(b=>contactDisplay(b)).join("");
}