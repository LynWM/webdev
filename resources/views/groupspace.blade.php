<!DOCTYPE html>
<html>

<head>
   <title>Group Space</title>
</head>

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

    <body>
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
            <img src="./images/groupspace.jfif" width="100%">
        </div>

        <hr>

        <div class="title">
            <h1>Group Space</h1>
            
            <p>
                This space consists of small cubicles that can host a group of 4 to 8 people, which is an 
                ideal range for effective discussions and group work. It has a large table with several 
                seats to enhance collaboration and team work, making discussions easier. A whiteboard with
                several pens are available for use and additional equipment, such as projectors, can be 
                installed seperately when ooked and paid for. it is found in Wing B of the cafe's first floor.
                Despite it being a group space, high tones of discussions or conversations that may disrupt 
                other groups is prohibited.
            </p>
            <br>
            <!--reserach on slideshow-->
            <br>

            <br>

            <a href="/booking" class="button">BOOK NOW</a>
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