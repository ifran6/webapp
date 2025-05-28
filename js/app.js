// import axios from "/axios";

// document.addEventListener('DOMContentLoaded', function() {
//     function loginUser() {
//         const lgnForm = document.querySelector('.lgn-form');

//         if (lgnForm) {
//             lgnForm.addEventListener("submit", (ev) => {
//                 ev.preventDefault();
//                 const lgnUsername = document.querySelector('.lgn-username')?.value || '';
//                 const lgnPassword = document.querySelector('.lgn-password')?.value || '';

//                 if (lgnUsername !== "" && lgnPassword !== "") {
//                     alert(`You clicked login ${lgnUsername} ${lgnPassword}`);
//                     axios.post('sign_in.php', { name: lgnUsername, pass: lgnPassword })
//                         .then(function (response) {
//                             console.log('Server response:', response.data);
//                         })
//                         .catch(function (error) {
//                             console.log('Error:', error);
//                         });
//                 } else {
//                     alert(`You clicked login but Username OR Password is Empty`);
//                 }
//             });
//         }
//     }

//     function signUpUser() {
//         const signForm = document.querySelector('.sgn-up-form');

//         if (signForm) {
//             signForm.addEventListener("submit", (evt) => {
//                 evt.preventDefault();
//                 const sgnUsername = document.querySelector('.s-username')?.value || '';
//                 const sgnEmail = document.querySelector('.s-email')?.value || '';
//                 const sgnPassword = document.querySelector('.s-password')?.value || '';
//                 const sgnConfirmPassword = document.querySelector('.s-confirm-password')?.value || '';

//                 if (sgnUsername !== "" && sgnPassword !== "") {
//                     if (sgnPassword !== sgnConfirmPassword) {
//                         alert(`Passwords don't match!`);
//                     } else {
//                         alert(`You clicked sign up ${sgnUsername} ${sgnPassword} ${sgnEmail}`);
//                         axios.post('register.php', { name: sgnUsername, pass: sgnPassword, email:sgnEmail})
//                             .then(function (response) {
//                                 console.log('Server response:', response.data);
//                             })
//                             .catch(function (error) {
//                                 console.log('Error:', error);
//                             });
//                     }
//                 } else {
//                     alert(`You clicked Sign up but the fields are empty!`);
//                 }
//             });
//         }

//     }

//     function contactMessage(){
//         const contactForm = document.querySelector('.contact-form');

//         if(contactForm){
//             contactForm.addEventListener('submit', function(evt){
//                 evt.preventDefault();

//                 const contName = document.querySelector('.conta-name')?.value || '';
//                 const contEmail = document.querySelector('.conta-email')?.value || '';
//                 const contMsg = document.querySelector('.conta-msg')?.value || '';

//                 if (contName !== "" && contEmail !== "" && contMsg !== "") {
                    
//                         alert(`Thank Your ${contName} ${contEmail} for contact us!`);
//                         axios.post('contact.php', { name:contName, email:contEmail, message:contMsg})
//                             .then(function (response) {
//                                 console.log('Server response:', response.data);
//                             })
//                             .catch(function (error) {
//                                 console.log('Error:', error);
//                             });
                   
//                 } else {
//                     alert(`Please fill this Forms`);
//                 }

//                 // alert('contact Form Loading');
//             });
//         }
//     }
  

//     loginUser();
//     signUpUser();
//     contactMessage();

//     // using to switch b/w two forms
// //  function showForm(formId){
// //     document.querySelectorAll(".form-box").forEach(form=>form.classList.remove("active"));
// //     document.getElementById(formId).classList.add("active");

// //  }
// });
