<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/services2.css">
</head>

    <body>
     <style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
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
.banner{
    max-width: 100%;
}
body{
    width: 100%;
    background-color: #efefef;
    overflow:auto;
}
.title h1{
    text-align: center;
    padding-top: 50px;
    font-size: 42px;
    font: sans-serif;
   
}
.title h1::after{
    content: "";
    height: 4px;
    width: 230px;
    background-color: saddlebrown;
    display: block;
    margin: auto;
}
img{
    padding: 42px;
}
h3{
    text-align:left;
    padding-top: 50px;
    font-size: 42px;
    font: sans-serif;
   
}
h3::after{
    content: "";
    height: 4px;
    width: 150px;
    background-color: saddlebrown;
    display: block;
}
.title p{
    font-size: 22px;
    margin-bottom: 30px;
    line-height: 1.5;
    text-align: justify;
}

.button{
    font-size: 15px;
    text-decoration: solid;
    color:antiquewhite;
    background-color:saddlebrown;
    padding: 8px 12px;
    border-radius: 5px;
    letter-spacing: 1px;
    text-align: center;
    
}
.button:hover{
    background-color:black;
    transition: 0.4s ease;

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
.title p {
    padding: 20px;
    width: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    font-size: 4vmin;
}
 </style>
        <!--navigation-->
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Butterfly</h2>
            </div>
            <div class="menu">
                <ul>
                <li><a href="/">HOME</a></li>
                    <li class="active"><a href="/services">SERVICES</a></li>
                    <li><a href="/booking">BOOKING</a></li>
                    <li><a href="/about">ABOUT</a></li>
                    <li><a href="/about/#contact">CONTACTS</a></li>
                </ul>
            </div>
        </div> 
        
          <!-- banner--> <!-- might try slideshow later-->
          <div id="banner">
            <img src="./images/restingarea.png" width="100%">
        </div>

        <hr>

        <div class="title">
            <h1>Resting Area</h1>
            
            <p>
                The Resting Area is found on the ground floor, alongside the reception and locker area. It is 
                divided into three sections, the Snack Bar, the Drink Bar and the Lounge Area. High tone 
                discussions are still not allowed here, to avoid disrupting the peaceful environment of the cafe.
            </p>
            <br>
            <p>
                The Snack Bar offers a variety of pastries and snacks such as confectioneries. A few vending matchines
                are also found next to the snack bar, with a large Offering to chose from.
            </p>
            <br>
            <p>
                The Coffee Bar has a long list of cold and hot drinks to offer, from a hot cup of Americano to a 
                cold can of Sprite. Each day the cafe offers a free drink to the customers, which is accompanied 
                with five free refills!!
            </p>
            <br><
            <p>
                The Lounge Area is a space where customers can sit together at tables and rest/unwind while 
                catching up with their fellow colleagues or classmates.

            </p>
            <!--reserach on slideshow-->
            <br>

            <!--menu picture in download format-->
            <a href="./images/menu.jpg" class="button">OUR MENU</a>
           
            <br>
            
        </div>

        <br>
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