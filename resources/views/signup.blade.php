<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
  </head>
  <body>
    <style>
      * {
  margin: 0;
  padding: 0;
}

body{
    overflow: hidden;

}
.main {
  width: 100;
  background: linear-gradient(
      to top,
      rgba(0, 0, 0, 0.5) 50%,
      rgba(0, 0, 0, 0.5) 50%
    ),
    url(../images/studycafe3.jpg);
  background-position: center;
  background-size: cover;
  height: 109vh;
}

.navbar {
  width: 1200px;
  height: 75px;
  margin: auto;
}

.icon {
  width: 200px;
  float: left;
  height: 70px;
}

.logo {
  color: saddlebrown;
  font-size: 45px;
  font-family: "Curlz MT";
  padding-left: 20px;
  float: left;
  padding-top: 10px;
}

.content{
    max-width: 350px;
    min-width: 300px;
    margin: 10px auto;
    /* border: 2px dashed white; */
    background: rgba(0, 0, 0, 0.5);
    box-shadow: 10px 12px 15px rgba(0, 0, 0, 0.3);
    padding: 5px;
}
.content h1 {
  color: white;
  font-family: "Times New Roman";
  font-size: 45px;
  
  margin-top: 1%;
  letter-spacing: 2px;
  text-align: center;

}

.form {
  margin: 0;
  padding: 0;
  display: grid;
  place-content: center;
  min-height: 50vh;
}

.form h2 {
  width: 220px;
  font-family: Baskerville Old Face;
  text-align: center;
  color: saddlebrown;
  font-size: 22px;
  background-color: white;
  border-radius: 5px;
  margin: 2px;
  padding: 8px;
}

.form input {
  width: 240px;
  background: transparent;
  border: none;
  border-bottom: 1px solid saddlebrown;
  color: white;
  font-size: 15px;
  padding: 20px 0px;
}

.form input:focus {
  outline: none;
  

}

::placeholder {
  color: white;
  font-family: Arial;
}

.btnn {
  width: 240px;
  height: 40px;
  background: saddlebrown;
  border: none;
  margin-top: 30px;
  font-size: 18px;
  cursor: pointer;
  color: white;
  transition: 0.4s ease;
  
}

.btnn:hover {
  background: white;
  color: saddlebrown;
  box-shadow: 10px 12px 15px rgba(0, 0, 0, 0.9);
  background-color: white;
  border: 1px solid saddlebrown;
  transform: scale(1.03);
}

.btnn a {
  text-decoration: none;
  color: black;
  font-weight: bold;
}

.form .link {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 17px;
  padding-top: 20px;
  text-align: center;
}
.form .link a {
  text-decoration: none;
  color: saddlebrown;
}

.liw {
  font-family: Arial, Helvetica, sans-serif;
  padding-top: 15px;
  padding-bottom: 10px;
  text-align: center;
  color: white;
}
  </style>

    <div class="main">
      <div class="navbar">
        <div class="icon">
          <h2 class="logo">Butterfly</h2>
        </div>
      </div>
      <div class="content">
        <h1>Sign Up</h1>
        <form class="form" action="{{ route('register') }}" method="POST" id="form">
          @csrf
          <div id="error"></div>
          <input type="text" id="fname" name="fname" placeholder="First Name" />
          <input type="text" id="lname" name="lname" placeholder="Last Name" />
          <input type="text" id="email" name="email" placeholder="Your Email" />
          <input type="password" id="pwd" name="password" placeholder="Your Password" />
          <input type="password" id="pwd-c" name="password-confirm" placeholder="Confirm Password" />
          <button type="submit" class="btnn" id="btn" name="signup-submit">
            <a href="/">SIGN UP</a>
          </button>
        
</form>
      </div>
    </div>
    <!-- <script>
      const form = document.getElementById('form')
      const fname = document.getElementById('user-fname')
      const lname = document.getElementById('user-lname')
      const email = document.getElementById('email')
      const pwd = document.getElementById('pwd')
      const pwdC = document.getElementById('pwd-c')
      const errorBox = document.getElementById('error')
      const btn =  document.getElementById('btn')

      // form.setAttribute('action', './user_rec_insert.php')

function emailValidator(){

}
function pwdMatch(){
  if(pwd.value!==pwdC.value){
    errorBox.innerText="Passwords do not match!"
    errorBox.style.color= 'Red'
    errorBox.style.padding= '15px'
    errorBox.style.fontSize= '20px'
    return false;
  }else{
    return true;
  }
}
function emptyFieldsCheck(){
  if (fname.value === ''||lname.value ===''||email.value===''||pwd.value===''||pwd.value===''||pwdC.value==='') {
    errorBox.innerText="All the fields are required!"
    errorBox.style.color= 'Red'
    errorBox.style.padding= '15px'
    errorBox.style.fontSize= '20px'
    return false;
}else{
  
    return true;
  }
}
// function setAction(){
//   if(emptyFieldsCheck==true && pwdMatch==true){
//       form.setAttribute('action', './user_rec_insert.php')
//     }
// }
function formValidator(e) {  
  e.preventDefault()
  emptyFieldsCheck()
    pwdMatch()

}

btn.addEventListener('click', formValidator)  
// fname.addEventListener('change', emptyFieldsCheck)
// lname.addEventListener('change', emptyFieldsCheck)
// email.addEventListener('change', emptyFieldsCheck)


    </script>
  -->

</body>  
</html>
