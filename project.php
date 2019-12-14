<!DOCTYPE html>
<? require 'db.php';
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Expires: " . date("r"));
?>

<html>
    <title>Book It Yourself</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ittle-logo.png" type="image/png">    
    <link href="style/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="style/main.css" rel="stylesheet" type="text/css" />
    <link href="style/classtype.css" rel="stylesheet" type="text/css"/>
    <link href="style/animate.css" rel="stylesheet" type="text/css"/>
    <link href="style/fontello.css" rel="stylesheet" type="text/css"/>
    <link href="style/fontello-codes.css" rel="stylesheet" type="text/css"/>
    <link href="style/fontello-embedded.css" rel="stylesheet" type="text/css"/>
    <link href="style/auditories.css" rel="stylesheet" type="text/css"/>
    <link href="style/practice-auditories.css" rel="stylesheet" type="text/css"/>
    <link href="style/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link href="style/datepicker.css" rel="stylesheet" type="text/css"/>
    <link href="style/popup-calendar.css" rel="stylesheet" type="text/css"/>
    <link href="style/confirmation.css" rel="stylesheet" type="text/css"/>
<body>
    <header class="header">
        <button class="header__menu-button">
                <img class="img-o" src="img/photo.png" alt=""/>
                <img class="img-t" src="img/shot.png" alt=""/>
            </button>
        <div class="hamburger-menu">
            <button class="closemenu-btn"><img src="img\closed.png" alt=""></button>
            <ul class="hamburger-menu__list">
                <li class="humburger-menu__items"><a class="item-a" href="">home</a></li>
                <li class="humburger-menu__items"><a class="item-a" href="">my bookings</a></li>
                <li class="humburger-menu__items"><a class="item-a" href="">contacts</a></li>
                <li class="humburger-menu__items"><a class="item-a" href="">support</a></li>
            </ul>
        </div>    
        <h2 class="main-text animated pulse">Book It Yourself</h2>
        <button class="header__button">Book Now</button>
    </header>
    <main class="main">
        <div class="calendar">
            <ul class="weekday">
                <li class="day">Mon</li>
                <li class="time">08:00</li>
                <li class="line">|</li>
                <li class="close-time">20:00</li>
            </ul>
            <ul class="weekday">
                <li class="day">Tue</li>
                <li class="time">08:00</li>
                <li class="line">|</li>
                <li class="close-time">20:00</li>
            </ul>
            <ul class="weekday">
                <li class="day">Wed</li>
                <li class="time">08:00</li>
                <li class="line">|</li>
                <li class="close-time">20:00</li>
            </ul>
            <ul class="weekday">
                <li class="day">Thu</li>
                <li class="time">08:00</li>
                <li class="line">|</li>
                <li class="close-time">20:00</li>
            </ul>
            <ul class="weekday">
                <li class="day">Fri</li>
                <li class="time">08:00</li>
                <li class="line">|</li>
                <li class="close-time">20:00</li>
            </ul>
            <ul class="weekday">
                <li class="day">Sat</li>
                <li class="time"></li>
                <li class="weekend">weekend</li>
                <li class="close-time"></li>
            </ul>
            <ul class="weekday">
                <li class="day">Sun</li>
                <li class="time"></li>
                <li class="weekend">weekend</li>
                <li class="close-time"></li>
            </ul>

        </div>
        <div class="contacts">
            <img src="img/mail.png" class="contacts__img" alt="" />
            <a href="#" class="mail contacts__link">polkamarka@gmail.com</a>

            <p class="location"><img src="img/location.png" class="contacts__img" alt="" />Sumy State University, Ryms'koho-Korsakova St 2, Sumy, UA</p>
            <img src="img/planet.png" class="contacts__img" alt="" />
            <a href="https://sumdu.edu.ua/uk/" class="web contacts__link">sumdu.edu.ua</a>
        </div>
        <div class="more">
            <a href="#" class="details">Details</a>
        </div>
    </main>
    <!--##################################TYPES################################-->
    <div class="classtype">
        <span class="service">types</span>
        <button class="back-button classtype__button"><i class="icon-left-open"></i>Back</button>
        <div class="types">
            <div class="type lecture">
                <h3 class="type__title">Lecture class</h3>
                <div class="time">
                    <img src="img/clock.png" alt="" class="type__clock">
                    <span class="type__time">1:20 h.</span>
                </div>
                <button class="type__reserv-button classtype__button lecture-button">Select</button>
            </div>
            <div class="type practice">
                <h3 class="type__title">Practice class</h3>
                <div class="time">
                    <img src="img/clock.png" alt="" class="type__clock">
                    <span class="type__time">1:20 h.</span>
                </div>
                <button class="type__reserv-button classtype__button practice-button">Select</button>
            </div>
        </div>    
    </div>
   <!--##################################LECTURE################################-->
   <div class="auditoies">
        <span class="lecture-type">lecture classes</span>
        <button class="back-button__lecture classtype__button"><i class="icon-left-open"></i>Back</button>
         <? require 'create_carousel_lec.php';?>
    </div>
   
   <!--##################################PRACTICE################################-->
   <div class="practice-auditories">
        <span class="practice-type">practice classes</span>
        <button class="back-button__practice classtype__button "><i class="icon-left-open"></i>Back</button>
        <? require 'create_carousel_prac.php';?>
   </div>
   
   <!--##################################POPUP CALENDAR################################-->
   
   <div class="b-popup" id="popup1">
        <div class="b-popup-content">
            <h3 class="popup__header">Choose a date</h3>
            
            <div class="datepicker-here  popup__calendar" data-timepicker="true"></div>
            <button class="popup__submit-btn">Ok</button>
        
        </div>
    </div>
   <!--##################################CONFIRMATION################################-->
   <div class="confirm">
       <button class="confirm__back-button classtype__button"><i class="icon-left-open"></i>Back</button>
       <p class="practice-type pers-data">personal data</p>
       <div class="input-fields">
            <span class="confirm__name fields">name:</span>
            <input type="text" class="name-field input" placeholder="Enter your name"><br>
            <span class="confirm__name fields">email:</span>
            <input type="text" class="email-field input" placeholder="Enter email address"><br>
            <span class="confirm__name fields">phone:</span>
            <input type="text" class="phone-field input" placeholder="Enter phone number">
        </div>    
       <div class="data">
            <span class="confirm__type">Practice</span>
            <div class="date">
                <span class="confirm__date data-item">Date:</span>
                <span class="date-value">01.02.13</span>
            </div>
            <div class="time">
                <span class="confirm__time data-item">Starts at:</span>
                <span class="time-value">11:25</span>
            </div>
            <div class="number">
                <span class="confirm__number data-item">Number:</span>
                <span class="number-value">241</span>
            </div>
            <button class="confirm__btn">Confirm booking</button>
       </div> 
   </div>






    <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="owl.carousel.min.js" type="text/javascript"></script>
    <script src="datepicker.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript"></script>
    
</body>

</html>