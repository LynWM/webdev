<!DOCTYPE html>
<html>

<head>
    <title> Our Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c81b2e71b.js" crossorigin="anonymous"></script>
</head>

<body>
    <style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
}


.banner{
    max-width: 100%;
}
body{
    width: 100%;
    background-color: #efefef;
    overflow:auto;
}
.my-body{
    width: 100%;
}
.main-content{
    padding: 15px;
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

.intro{
    width: 100%;
    margin: 50px auto;
    text-align: center;
    font-size: 21px;
    line-height: 1.5;
    padding: 3rem;
}
.container{
    display: flex;
    align-items: center;
    justify-content: center;
    
}
.container:hover{
    background-color: lightgray;
}
.container div{
    transition: .5s;
}
.container:hover div{
    background-color: saddlebrown;
    transform: scale(1.1);
    box-shadow: 7px 10px 12px rgb(0, 0, 0);

}
h3{
    text-align: left;
    padding-top: 0px;
}
.container img{
    max-width: 300px;
}
.container image{
    flex-basis: 40%;
}
.text{
    padding-left: 22px;
    text-align: justify;
}

.services{
    width: 100%;
   display: flex;
    margin-top: 75px;
    margin-bottom: 75px;
    }
.card{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction:column;
    margin: 0px 20px;
    padding: 20px 20px;
    background-color: lightgray;
    cursor: pointer;
    transition: .5s;

}
.card:hover{
    transform: scale(1.2);
    box-shadow: 7px 10px 12px rgb(0, 0, 0);

}
.card .icon{
    font-size: 35px;
    margin-bottom: 10px;
}
.card h2{
    font-size: 28px;
    color: saddlebrown;
    margin-bottom: 20px;
}
.card p{
    font-size: 17px;
    margin-bottom: 30px;
    line-height: 1.5;
    color: #5e5e5e;;
}
.button{
    font-size: 15px;
    text-decoration: solid;
    color:#000;
    padding: 8px 12px;
    letter-spacing: 1px;
    transition: 0.4s ease;
    background-color:#fff;
    border: 2px solid saddlebrown;
    
}
.button:hover{
    color:#fff;
    transform: scale(1.2);
    background-color:saddlebrown;

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
</style>
    <!--navigation-->
    <div class="my-body">

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



        <!--Banner was a stress. Look into that later-->
        <div class="main-content">
            <div class="title">
                <h1>Hey There!</h1>
            </div>

            <div class="intro">
                <p>
                    Welcome to the Butterfly Study Cafe!
                    We are so glad you consider our cafe as your go to space for productivity either
                    in your studies or work. Before you look at what we offer, let's first give you a
                    quick guide to the cafe.
                </p>
                <br>

                <div class="container">
                    <div class="image">
                        <img src="./images/reception.jpg">
                    </div>
                    <div class="text">
                        <h3>Reception</h3>
                        <p>
                            The cafe's entrance leads to the reception area, where one is given a user card, which
                            is used to show proof of payment and keep tabs of the expenses met during ones time at
                            the cafe; such as extended study hours and snacks/drinks bought in the resting area.
                        </p>
                    </div>
                </div>

                <br>

                <div class="container">
                    <div class="image">
                        <img src="./images/lockerarea.jfif">
                    </div>
                    <div class="text">
                        <h3>Locker Area</h3>
                        <p>
                            We have a locker area where customers can store their belongings in an indivually allocated
                            locker. This allows the customer to move to their spaces only with the items they will
                            require.
                        </p>
                    </div>

                </div>

                <hr>

                <div class="title">
                    <h1>Our Services</h1>
                </div>
                <div class="services">
                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h2>Study Space</h2>
                        <p>This space offers a quiet environment for deep focus on school/work,<br>
                            free from the noise of clicking of keyboards and group discussions.</p>
                        <a href="/studyspace" class="button">Learn More</a>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h2>Laptop Space</h2>
                        <p>For customers who would wish to use their own personal laptops or computers
                            offered by the cafe to catch up with work or school projects.</p>
                        <a href="/laptopspace" class="button">Learn More</a>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h2>Group Space</h2>
                        <p>This space has designated rooms available for group discussions, small size
                            meetings and work that requires teamwork with equipment.</p>
                        <a href="/groupspace" class="button">Learn More</a>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <h2>Resting Area</h2>
                        <p>A quiet space where customers get to unwind, relax as they order from our wide
                            selection of drinks and snacks. Assistance is also offered here.</p>
                        <a href="/restingarea" class="button">Learn More</a>
                    </div>
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