document.addEventListener("DOMContentLoaded", function() {

  // const users = new Array();
  const loginForm = document.getElementById('loginForm');
  loginForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(this);

      doRequest(formData);
    });

});

function doRequest(formData){

fetch('api.php', { 
  method: 'POST', 
  body : formData
})
.then(response => response.json())
.then(data => {
  console.log('odzpowiedz z serw', data);
  })
  .catch(error => console.error('błąd:', error));
}
 

  

/*
//     const users = new Array();
//     const imie = document.getElementById('imie');
//     const nazwisko = document.getElementById('nazwisko');
//     const email = document.getElementById('email');
//     const password = document.getElementById('password');
//     const id = users.length + 1
    



// let errors = []

//     const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[.a-zA-Z]$/;
// if(!emailRegex.test(email.value)) {
//     email.classList.add("error");
//     email.classList.remove("success");

//         errors.push("mail jest niepoprawny");
//         error1.textContent = "Niepoprawny email"
//         error1.style.color = "red"  
//         console.log(errors);
//     }
// else{
//       email.classList.add("success");
//       email.classList.remove("error");  
//         error1.textContent = ""
//    }




   
// const passwordRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/
// if(!passwordRegex.test(password.value)) {
//     password.classList.add("error");
//     password.classList.remove("success");

//           errors.push("hasło jest niepoprawne");
//           error2.textContent = "Niepoprawne haslo"
//           error2.style.color = "red"  
//           console.log(errors);
//      }
// else{
//       password.classList.add("success");
//       password.classList.remove("error");
//           error2.textContent = ""        }
   
// if (errors.length > 0) 
//      console.log('błąd');

//   });

//     return;

/*
 users.push({
  'email' : email.value,
  'password' : password.value,
  id
})
console.log("email:", email);
console.log("password:", password);


renderUsers(users)
function renderUsers(users) {
const list = document.getElementById('usersList');
list.innerHTML = '';
users.map(function (user) {
  const item = document.createElement("li");
  item.innerText  = 'email:  ' + user.email + ', haslo:  ' + user.password


  
  addProperty("key");
  const key = user.id
  function addProperty(key, value) {
    users[key] = value;
}



  const button = document.createElement("button");
  button.innerText = "x"
  button.id = user.id;


  button.addEventListener('click', () =>{
     deleteUser(user);
     
  });
  item.append(button);
  list.append(item);
});

}

function deleteUser(user) {
let index = users.findIndex(raw => raw.id === user.id);
if(index !==-1){
users.splice(index, 1);
renderUsers(users);

}
else{
console.error("nie znaleziono użytkownika")
}
}
*/
// let data = {

//   imie :"imie",
//   nazwisko : "nazwisko",
//   email : "email",
//   password : "password",
// }

// const formData = new FormData(document.getElementById("loginForm"))


// loginForm.addEventListener("formData", (e) => {
//   console.log("formData fired");

//   const fdata = e.formData;
//   for (const value of fdata.values()) {
//     console.log(value);
//   }})





//   let jsonData = JSON.stringify(data); 
//   fetch("http://127.0.0.1/api.php", {
//     method : 'POST',
  
//     body: new FormData(loginForm)
//     })
//     .then((response) => response.json())
//     .then((data) => alert(data))
//     .catch(err => {console.log(err)})
  

  





/*
let data = {

    imie :"imie",
    nazwisko : "nazwisko",
    email : "email",
    password : "password",
  }
  console.log(data)



let jsonData = JSON.stringify(data);

fetch("http://127.0.0.1/api.php",{
  method : "POST",
  headers: {
    "Content-Type": "application/json"
  },
  body: jsonData
}
).then(response => {
  console.log(response)
  .then((response) => response.json())
 }).catch(err => {
  console.log(err)
  
 }) 
 */

