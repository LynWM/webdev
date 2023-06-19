<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Booking</title>
</head>

<body>
    <style>
* {
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
body {
  font-family: "Times New Roman", Times, serif;
  font-weight: 400;
  width: 100%;
  letter-spacing: 1px;  
}

.container {
  position: relative;
  padding: 10px;
  height: 80vh;
}

.container-time {
  background-color: saddlebrown;
  color: #fff;
  outline: 3px dashed #fff;
  outline-offset: -20px;
  text-align: center;
  max-width: 350px;
  min-width: 280px;
  height: 90%;
  padding: 2rem;
  position: absolute;
  transition: .6s;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
  

}
.container-time button{
  
  font-size: 18px;
  font-weight: bold;
  padding: 10px 20px;
  background: white;
  color: black;
  border: none;
  cursor: pointer;
  transition: .5s;
  margin-top: 20px;
}
.container-time button:hover{
transform: scale(1.1);
}
.heading {
  font-size: 35px;
  text-transform: uppercase;
  text-decoration: dashed;
}
.heading-days {
  color: #000;
  font-size: 30px;
}
.heading-phone {
  font-size: 20px;
  font-display: initial;
  font-style: inherit;
}

.container-form {
  background-color: lightgray;
  position: absolute;
  color: rgb(7, 8, 6);
  padding: 5px;
  min-width: 280px;
  max-width: 300px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: -1;
  transition: .6s;
  box-shadow: 10px 15px 20px rgba(12, 3, 3, 0.5);  
}
form {
  margin-left: 10px;
  padding: 4px;
  display: flex;
  flex-direction: column;
  }

  form h2{
    color: saddlebrown;
    align-self: center;
  }
.form-field {
  display: flex;
  justify-content: space-between;
  padding: 7px;
  align-items: center;
  
}
input,
select {
  padding: 8px 10px;
  width: 10rem;
  border-style: none;
}
.form-field:last-child{
  align-self: center;
}
.btn {
  background-color: rgb(247, 247, 247);
  color: black;
  border: 1px solid saddlebrown;
  font-size: 18px;
  padding: 10px 20px;
  box-shadow: 7px 10px 12px rgba(60, 90, 124, 0.1);
  transition: .5s;
  cursor: pointer;
  
}
.btn:hover {
  transform: scale(1.04);  
  background-color: saddlebrown;
  color: white;
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

/* @media (min-width=700px) {
  .container-form > h2 {
    text-align: center;
    padding-right: 5px;
  }
} */

    </style>

    <div class="navbar">
        <div class="icon">
            <h2 class="logo">Butterfly</h2>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/services">SERVICES</a></li>
                <li class="active"><a href="/booking">BOOKING</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/about/#contact">CONTACTS</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="container-time" id="container-time">
            <h2 class="heading">TIME OPEN</h2>
            <h3 class="heading-days">Monday-Friday</h3>
            <p>7am - 11am (Morning Session)</p>
            <p>11am - 2pm (Morning 2 )</p>
            <p>2pm - 6pm (Afternoon Session)</p>
            <p>7pm - 9pm (Night Session)</p>

            <h3 class="heading-days">Sarturday and Sunday</h3>
            <p>9am - 1pm (Morning Session)</p>
            <p>1pm - 6pm (Afternoon Session)</p>
            <hr>
            <h4 class="heading-phone">Call us: +2547 43 161 628 </h4>
            <button id="bk-now-btn">BOOK NOW</button>

        </div>

        <div class="container-form" id="container-form">
            <form action="/bookings" method="post">
                <h2 class="section-head">BOOK A SPACE</h2>

                <div class="form-field">
                    <label for="first-name">First Name</label>
                    <input type="text" name="first-name" value="name"  id="first-name">
                </div>
                <div class="form-field">
                    <label for="last-name">Last Name</label>
                    <input type="text" name="last-name" id="last-name">
                </div>
                <div class="form-field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-field">
                    <label for="phone-number">Phone</label>
                    <input type="tel" name="phone-number" id="phone-number">
                </div>
                <div class="form-field">
                    <label for="booking-date">Date</label>
                    <input type="date" name="booking-date">
                </div>
                <div class="form-field">
                    <label for="space-type">Space Type</label>
                    <select id="space-type" name="space-type">
                        <option value="" hidden></option>
                        <option value="study-space">Study Space</option>
                        <option value="laptop-space">Laptop Space</option>
                        <option value="group-space">Group Space</option>
                        <option value="resting-area">Resting Area</option>
                    </select>
                </div>
                <div class="form-field">
                    <label for="time-slot">Time Slot</label>
                    <select id="time-slot" name="time-slot">
                        <option value="" hidden></option>
                        <option value="morning">7am - 11am (Morning Session)</option>
                        <option value="mid-morning">11am - 1pm (Mid - Morning)</option>
                        <option value="afternoon">2pm - 6pm (Afternoon Session)</option>
                        <option value="evening">7pm - 9pm (Evening Session)</option>
                    </select>
                </div>

                <div class="form-field">
                    <label for="pricing">Pricing</label>
                    <input type="number" name="pricing" id="pricing" readonly>
                </div>
                <div class="form-field">
                    <button class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let timeSlot = document.getElementById("time-slot")
        let pricing = document.getElementById("pricing")
        let space = document.getElementById("space-type")
        let price

        function priceCalc() {
            switch (timeSlot.value) {
                case "morning":
                    price = 400
                    pricing.value = price
                    break
                case "mid-morning":
                    price = 300
                    pricing.value = price
                    break
                case "afternoon":
                    price = 200
                    pricing.value = price
                    break
                case "evening":
                    price = 300
                    pricing.value = price
                    break
            }
        }

        function spaceRate() {
            switch (space.value) {
                case "laptop-space":
                    price = +100
                    break
                case "group-space":
                    price = +50
                    break
                case "resting-area":
                    price = +150
            }

        }
        timeSlot.onchange = priceCalc

        const bkNowBtn = document.getElementById("bk-now-btn")
        const containerForm = document.getElementById("container-form")
        const containerTime = document.getElementById("container-time")

        function slider() {
            containerForm.style.marginLeft = "200px"
            containerTime.style.marginLeft = "-140px"
            containerForm.style.zIndex = "1"
            containerForm.style.transform = "scale"
            containerForm.style.scale = "1.05"
        }
        bkNowBtn.onclick = slider;
    </script>
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