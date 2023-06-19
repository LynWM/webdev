<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>
        <link rel="stylesheet" href="about.css">
        
    </head>

    <body>
        <style>
           * {
    font-family:  verona ;
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}
body, html{
    overflow-x: hidden;
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
h2 {
    text-align: center;
    color: #272421;
    font-size: 6vmin;
    font-family: garamond;
}
section{
    background-color: #dbd8d8;
    margin-left: 80px;
    margin-right: 80px;
    padding: 40px;
    border-radius: 15px;
    align-items: center; 
    display: flex;
    flex-direction: column;
    position: relative;
}
section p{
    margin: 20px;
    font-size: 3vmin;
}
section p a{
    color: #272421;
    text-decoration: underline;
}
section p a:hover{
    color: #a7784f;
}
 
        </style>
        <!--navbar-->
        
        <div class="navbar">
            <!--Insert logo here-->
            <div class="menu">
             <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/services">SERVICES</a></li>
                <li><a href="/booking">BOOKING</a></li>
                <li class="active"><a href="/about">ABOUT</a></li>
                <li><a href="/about/#contact">CONTACTS</a></li>
             </ul>
            </div>
        </div>
<!--Search For Icons for each section and each page-->
          <header>
            <div class="header-content">
                <h1>About Us</h1>
                <div class="line"></div>
            </div>
          </header>

          <br><br>

           <section id="intro">
            <br><br>
             <h2>Welcome</h2>
             <div class="line"></div>
             <br>
             <p>
                At Butterfly Study Cafe, we believe that the right environment can greatly enhance productivity and learning.<br><br>
                We have created a unique space that combines the comfort of a café with the conducive atmosphere of a study center.<br><br>
                Our aim is to provide students and professionals with a welcoming and inspiring environment where they can focus, study, and achieve their goals.
             </p>
             <br><br>
           </section>

           <br>

           <section id="story">
            <br><br>
            <h2>Our Story</h2>
            <div class="line"></div>
            <br>
            <p>
                Butterfly Study Cafe was established in 2022 by a group of passionate individuals.<br><br>We understood how hard it was for people to find a perfect studying spot, since normal cafes are too noisy whereas libraries require maximum silence thus limiting them from group discussions.<br> <br>After seeing these challenges, we have been dedicated to providing a haven where students and professionals can thrive academically and professionally.
            </p>
            <br><br>
           </section>

           <br>

           <section id="mission">
            <br><br>
            <h2>Mission</h2>
            <div class="line"></div>
            <br>
            <p>
                Our mission is to create an optimal study environment that fosters concentration, collaboration, and personal growth.<br><br> We strive to offer exceptional services and amenities that support our visitors' goals and aspirations.<br><br> Our goal is to be the preferred study destination, empowering individuals to excel in their educational and professional pursuits.
            </p>
            <br><br>
           </section>

           <br>

           <section id="values">
            <br><br>
            <h2>Our Values</h2>
            <div class="line"></div>
            <br>
            <p>
                Our Values
                <br>
                <br>
                Excellence: We are committed to providing excellent service, creating an atmosphere that promotes excellence in learning and productivity.
                <br>
                <br>
                Community: We believe in fostering a sense of community among our patrons, encouraging collaboration, and creating opportunities for networking and personal connections.
                <br>
                <br>
                Comfort: We prioritize the comfort of our visitors, ensuring a cozy and welcoming space that promotes focus and relaxation.
                <br>
                <br>
                Flexibility: We understand the diverse needs of our guests, and we strive to accommodate different study preferences by offering a variety of seating options and amenities.
                <br>
                <br>
                Sustainability: We are dedicated to environmentally friendly practices, using eco-conscious materials, and minimizing our ecological footprint.
                
            </p>
            <br><br>
           </section>

           <br>

           <section id="team">
            <br><br>
            <h2>The Team</h2>
            <div class="line"></div>
            <br>
            <p>
                At Butterfly Study Cafe, our team is passionate about providing a supportive and conducive study environment.<br> <br>Our staff members are knowledgeable, friendly, and always ready to assist you. <br><br>We are here to ensure that your time at our café is productive and enjoyable.
            </p>
            <br><br>
           </section>

           <br>

           <section id="community">
            <br><br>
            <h2>Join Our Community</h2>
            <div class="line"></div>
            <br>
            <p>
                We invite you to become a part of the Butterfly Study Cafe community. <br><br>Whether you are a student preparing for exams, a professional working remotely, or an individual seeking a quiet space for personal development, we are here to support you on your journey.<br><br> Visit us today and experience the perfect blend of study and relaxation at Butterfly Study Cafe.
            </p>
            <br><br>
           </section>

           <br>

           <section id="contact">
            <br><br>
            <h2>Contact Us</h2>
            <div class="line"></div>
            <br>
            <p>
                For any inquiries or futher information, contact us through;
                <br>
                <br>
                Instagram:<em>@butterflycafe</em><br><br>
                Twitter:<em>@thebutterflycafe</em><br><br>
                
                Send us your feedback using<a href="mailto:info@butterflystudycafe.com"> our email address</a>
                <br><br>
                Call <a href="tel:+254788965231">our customer care desk</a>.
                <br><br>
                We are located at 
                <br>
                <br>
                Prudential Building, Mama Ngina Street<br><br>
                    Nairobi, Kenya

                  <br><br>
                  <br><br>
                   You can also follow us on social media for updates and promotions.
                  <br>
                  <br>    
                   We look forward to welcoming you to Butterfly Study Cafe!

            </p>
            <br><br>
           </section>
           <br><br>
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