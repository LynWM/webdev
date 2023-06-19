<!DOCTYPE html>
<html lang="en">

<head>
    <title>Butterfly Study Cafe</title>
    <link rel="stylesheet" href="./css/login.css">
    <link href="./css/navigation.css" rel="stylesheet">
</head>

<body>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.navbar {
    display: flex;
    width: 100%;
    height: auto;
    background:#272421;
    padding: 10px;
}
.menu {
    display: flex;
    justify-content: center;
    align-items: center;
}
/*don't forget to search for a logo*/
ul {
    display: flex;
}
ul li {
   list-style: none;
   padding: .5rem;
   transition: .5s;
}
.active {
    color: #a7784f;
    text-decoration: underline;
    font-weight: bold;
}
ul li a{
    text-decoration: none;
    color: whitesmoke;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}
ul li::hover{
    transform: scale(1.2);
}
ul li a:hover{
    color: #a7784f;
}
* {
  margin: 0;
  padding: 0;
}

body{
  height: 100vh;

}
.main {
  width: 100%;
  height: 100%;
}

/* @media (max-width: 400px) {
    .main{
        flex-direction: column;
        align-items: flex-start;
    }
} 
.btn{
    width: 85px;
    height: 40px;
    background: saddlebrown;
    border: 2px solid saddlebrown;
    margin-top: 50px;
    color: white;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline:none
}
 */
.content {
  height: 100%;
  background: linear-gradient(
      to top,
      rgba(0, 0, 0, 0.5) 50%,
      rgba(0, 0, 0, 0.5) 50%
    ),
    url(../images/studycafe1.jpg);
  background-position: center;
  background-size: cover;
  color: white;
  position: relative;
  display: flex;
  padding: 10px;
}
.content .desc {
  letter-spacing: 1px;
}

.content h1 {
  font-family: "Times New Roman";
  font-size: 50px;
  padding-left: 20px;
  margin-top: 9%;
  letter-spacing: 2px;
}

.form {
  padding: 25px;  
}
form {
  max-width: 350px;
    min-width: 300px;    
    background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.8) 50%,
    rgba(0, 0, 0, 0.8) 50%
  );
  padding: 10px;
  text-align: center;
  height: fit-content;
}
.form h2 {
  font-family: Baskerville Old Face;
  text-align: center;
  color: saddlebrown;
  
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
}
.footer{
    background-color: #6b533c;
    display: flex;
    flex-direction: column;
    font-size: 3vmin;
}
.footer p{
    color: #272421;
}
.footer a{
    color: #272421;
    text-decoration: underline;
}
.footer a:hover{
    color: whitesmoke;
}
    </style>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <!--<h2 class="logo">Butterfly</h2>-->
            </div>

            <div class="menu">
                <ul>
                    <li><a href="/about">ABOUT</a></li>
                    <li><a href="/about/#contact">CONTACTS</a></li>
                </ul>
            </div>

            <!-- <div class="search">
                <input class="srch" tpye="search" name="" placeholder="Type To Text">
                <a href="#"><button class="btn">Search</button></a>
            </div> -->

        </div>
        <div class="content">
            <div class="desc">
                <h1>Butterfly Study Cafe</h1>
                <p class="par">Are due dates worrying you? Incomplete research? Having a troublesome job/ academic week
                    and<br> you need to a place to unwind?<br>
                    Well, the Butterfly Study Cafe is the place to stay in and do all your tasks and serves you
                    drinks<br> and snacks as you study and do your research.<br>
                    We offer, study spaces, laptop/computer spaces, group spaces and a resting area. Additionally,<br>
                    we have offers for students regardless of their educational level and thus guarantee you a week<br>
                    of academic excellence!<br>
                    Join us today and book your space by filling our booking form.
                </p>

            </div>
            <div class="form">
                <form action="loginCheck.php" id="login-form" method="POST">

                    <h2>Login Here</h2>
                    <input name="email" type="text" id="email" placeholder="Your Email">
                    <input type="password" name="password" placeholder="Your Password">
                    <button class="btnn" type="submit" name="login-submit"><a href="/home">Login</a>

                    </button>
                    <p class="link">Don't have an account?<br>
                        <a href="/signup">Sign up</a> here
                    </p>
                   
                </form>

            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <br><br>
        <p>
        &lt;&lt;&lt; &copy; <a href="/about">Butterfly&Co.</a> &gt;&gt;&gt;
        </p>
        <br><br>
        <p>
           <a href="#">Back To Top</a>
        </p>
        <br><br>
      </div>
    </footer>

</body>

</html>