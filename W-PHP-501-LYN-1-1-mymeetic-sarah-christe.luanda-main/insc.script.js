let fnameInput = document.getElementById("fname");
let lnameInput = document.getElementById("lname");
let emailInput = document.getElementById("email");
let pwdInput = document.getElementById("pwd");
let repeatpwdInput = document.getElementById("repeat-pwd");
let dateInput = document.getElementById("date");
let genreInput = document.getElementById("genre");
let cityInput = document.getElementById("city");
let hobbyInput = document.getElementsByName("hobbies");
let submit = document.getElementById("submit");

let fname = fnameInput.value;
let lname = lnameInput.value;
let email = emailInput.value;
let pwd = pwdInput.value;
let repeatpwd = repeatpwdInput.value;
let date = dateInput.value;
let genre = genreInput.value;
let city = cityInput.value;
let hobby = hobbyInput.on;


// form.addEventListener("input", () => {

//   if (fname) {



//     if (fname.match(/[a-zA-Z]/) && fname.length > 2) {


//       var validFname = true;

//     } else {

//       validFname = false;
//       let pFname = document.createElement("p");
//       pFname.innerText = "Prénom invalide";

//       pFname.insertAdjacentElement("beforebegin", fnameInput);

//     }


//   } else if (lname) {



//     if (lname.match(/[a-zA-Z]/) && lname.length > 2) {


//       var validLname = true;

//     } else {

//       validLname = false;
//       let pLname = document.createElement("p");
//       pLname.innerText = "Nom invalide";

//       pLname.insertAdjacentElement("beforebegin", lnameInput);

//     }


//   } else if (email) {


//     let regexEmail = '/^[a-z][_a-z0-9-]+(\.[_a-z0-9-]+)*@([a-z0-9-]{2,})+(\.[a-z0-9-]{2,})*$/';

//     if (email.match(regexEmail) && email.length > 6) {

//       var validEmail = true;

//     } else {

//       validEmail = false;
//       let pemail = document.createElement("p");
//       pemail.innerText = "Email invalide";

//       pemail.insertAdjacentElement("beforebegin", emailInput);

//     }


//   } else if (pwd) {


//     let regexPwd = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';

//     if (pwd.match(regexPwd) && pwd.length > 8) {

//       var validPwd = true;

//     } else {

//       validPwd = false;
//       let pPwd = document.createElement("p");
//       pPwd.innerText = "Mot de passe invalide";

//       pPwd.insertAdjacentElement("beforebegin", pwdInput);

//     }


//   } else if (repeatpwd) {


//     if (repeatpwd = pwd) {

//       var validRepeatPwd = true;

//     } else {

//       validRepeatPwd = false;
//       let pRepeatPwd = document.createElement("p");
//       pRepeatPwd.innerText = "leot de passe ne correspond pas";

//       pRepeatPwd.insertAdjacentElement("beforebegin", repeatpwdInput);

//     }


//   } else if (date) {

//     if (date >= 18) {

//       var validDate = true;

//     } else {

//       validDate = false;
//       let pDate = document.createElement("p");
//       pDate.innerText = "Age invalide";

//       pDate.insertAdjacentElement("beforebegin", dateInput);

//     }

//   }
// })

let form = document.getElementById("form");


form.addEventListener('submit', event => {

  // if (fname == ""
  //   || lname == ""
  //   || email == ""
  //   || pwd == ""
  //   || repeatpwd == ""
  //   || date == ""
  //   || genre == ""
  //   || city == ""

  // ) {

  //   alert("Un ou plusieurs champs vident");

  // } else {

    event.preventDefault();

    let formData = new FormData(form);

    formData.append('firstname', fnameInput);
    formData.append('lastname', lnameInput);
    formData.append('gender', genreInput);
    formData.append('birthdate', dateInput);
    formData.append('city', cityInput);
    formData.append('mail', emailInput);
    formData.append('password', pwdInput);
    // let data = Object.fromEntries(formData);
    
// console.log(formData)

    fetch("http://localhost:3000/vues/inscription.php", {
      method: 'POST',
      body: formData
    })
      .then(response => {
        if (response.ok) {
          return response.json();
        }
        throw new Error("Erreur données");
      })
      .then(data => {
        console.log(data);
      })
      .catch(error => {
        console.error("Erreur",error);
      });
  // };

});


