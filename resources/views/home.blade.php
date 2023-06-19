<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Homepage</title> 
    </head>

    <body>
        <style>
* {
    font-family:  verona ;
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}
a {
    text-decoration: none;
    color: whitesmoke
}
body, html{
    overflow-x:hidden;
}

/*NAVBAR*/
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
header {
    width: 100vw;
    height: 70vh;
    background-color: #6b533c;
    background-position: bottom;
    background-size: cover;
    display: flex;
    align-items: flex-end;
    justify-content: center; 
}
.header-content {
    margin-bottom: 150px;
    color: whitesmoke;
    text-align:center;
    align-items: flex-end;
}
.header-content  h2 {
    font-size: 7vmin;
    font-family: garamond;
}
.line {
    width: 240px;
    height: 4px;
    background: #272421;
    margin: 10px auto;
    border-radius: 5px;
}
.header-content h1{
    font-size: 7vmin;
    margin-top: 10px;
    margin-bottom: 10px;
    font-family: garamond;
}
.events{
    width: 100%;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    
}
.title {
    text-align: center;
    font-size: 4vmin;
    margin-bottom: 10px;
    font-family: garamond;
}
.row{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    justify-content: space-between;
}
.row .col {
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
h4{
    font-size: 5vmin;
    color:#272421;
    margin: 20px auto;
}
p{
    padding: 20px;
    font-size: 3vmin;   
}
.content{
    padding: 20px;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    flex-direction: column;
    font-size: 3vmin;
}
.content h1{
    font-size: 7vmin;
    text-align: center;
    margin-bottom: 4px;
    font-family: garamond;
}
content .line{
    width: 240px;
    height: 4px;
    background: #272421;
    margin: 10px auto;
    border-radius: 5px;
}
.content .btn{
    margin-top: 40px;
}
img{
    width: 750px;
    height: 550px;
    margin: 10px;
    display: flex;
}
.button{
    padding: 8px 15px;
    background: #6b533c;
    border-radius: 30px;
    color: whitesmoke;
    align-items: center;
    margin-top: 10px;
}
.button a:hover {
    color: black;
    
}
.footer{
    background-color: #6b533c;
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
        <!--navbar-->
        
        <div class="navbar">
            <!--Insert logo here-->
            <div class="menu">
             <ul>
                <li class="active"><a href="/">HOME</a></li>
                <li><a href="/services">SERVICES</a></li>
                <li><a href="/booking">BOOKING</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/about/#contact">CONTACTS</a></li>
             </ul>
            </div>
        </div>
       <header>
        <div class="header-content">
            <h2>The</h2>
            
            <h1>Butterfly Study Cafe</h1>
            <div class="line"></div>
        </div>
       </header>

       <br>
       <br>

       <section class="events">
        <div class="title">
            <h1>Welcome!</h1>
            <div class="line"></div>
        </div>
        <div class="row">
          <div class="col">
            <img src="./images/studyaesthetic2.jpg" alt="">
            <h4>Hey There</h4>
            <p>Welcome to The Butterfly Study Cafe, an education center where both a Cafe and a Library are blended.<br>
            We provide a learning environment where you can study consistently to reach your goals.<br>
         </p>
            <div class="button"><a href="/about" class="btn">Learn More</a></div>
         </div>
        </div>
       </section>

       <section class="member">
         <div class="content">
           <p>
           <h4>New to the Butterfly Community?</h4>
           <div class="line"></div>
            Sign up to receive newsletters on various cafe events, opportunities, discounts and more!<br>
            </p>
           <div class="button"><a href="/signup" class="btn">Sign Up</a></div>
           <br>
           <p>
            <h4>Already a Member?</h4>
            <div class="line"></div>
            <br>
            Log In to connect to your account and check out for personalised deals and discounts, just for you.<br>
            </p>
            <div class="button"><a href="/login" class="btn">Log In</a></div>
         </div>

        </section>

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