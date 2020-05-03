<html>

<head>
    <title>LiveGameLove</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="CSS/headerandfooter.css">
    <link rel="stylesheet" href="CSS/stylesheet.css">


</head>

<body>
    <div class="header">
        <div class="inner-header">
            <div class="logo-container">
                <h1>Live<span>Game</span>Love</h1>

            </div>
            <ul class="nav">
                <a href="home.php">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>Business</li>
                </a>
                <a href="#">
                    <li>Stonks</li>
                </a>
                <a href="#">
                    <li>Contact</li>
                </a>
            </ul>

        </div>

    </div>



<div class="php">
    <h1>Open Hours</h1>
<?php
date_default_timezone_set("EST");
if( date("l")=='Monday' || date("l")=='Tuesday' || date("l")=='Wednesday' || date("l")=='Thursday' || date("l")=='Friday'){
    if( date("l") =='Friday'){
        $open_time = "8:00";
        $closed_time = "6:00";
        echo"We are open from $open_time A.M. to $closed_time P.M.";
    }
    elseif(date(1) =='Monday'){
        $open_time = "10:00";
        $closed_time = "6:00";
        echo"We are open from $open_time A.M. to $closed_time P.M.<br> We don't believe in Mondays";
    }
    else{
    $open_time = "8:00";
    $closed_time = "10:00";
    echo"We are open from $open_time A.M. to $closed_time P.M.";
    }
}else{
echo "Sorry, we're gaming right now. Please come back during a week day.";
}
?>
<table>
    <tr>
    <th>
            <p>Monday</p>
        </th>
        <th>
            <p>Tuesday</p>
        </th>
        <th>
            <p>Wednesday</p>
        </th>
        <th>
            <p>Thirsday</p>
        </th>
        <th>
            <p>Friday</p>
        </th>
    </tr>
    <tr>
        <td>
            <p>10:00 A.M. - 6:00 P.M.</p>
        </td>
        <td>
            <p>8:00 A.M. - 10:00 P.M.</p>
        </td>
        <td>
            <p>8:00 A.M. - 10:00 P.M.</p>
        </td>
        <td>
            <p>8:00 A.M. - 10:00 P.M.</p>
        </td>
        <td>
            <p>8:00 A.M. - 6:00 P.M.</p>
        </td>
    </tr>
</table>


</div>
<div class="space"></div>
<div class="stock">
    <div class="info">
    <h2>Laptops</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam quidem similique totam, quibusdam voluptas est reiciendis distinctio atque suscipit optio quas odio excepturi voluptatibus ad. Nobis atque, quia deserunt aperiam vel placeat iusto reprehenderit neque voluptates et cupiditate officia natus aliquid! Amet quam esse laboriosam reiciendis ullam itaque! Error, nisi.</p>
        </div>
    <div class="pic1">

    </div>
</div>
<div class="space"></div>
<div class="stock">
    <div class="info">
    <h2>Gaming PC Setups</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, corporis? At odit mollitia minima, ut suscipit vel numquam eveniet! Animi sint corporis ipsam incidunt exercitationem? Maxime unde impedit cumque, laudantium vero veniam, quasi, minima labore rem assumenda eveniet iure? Cupiditate!</p>
    </div>
    <div class="pic2">

    </div>
</div>
<div class="space"></div>
<div class="stock">
    <div class="info">
    <h2>Mother Boards</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure esse optio maiores, libero voluptas fugit porro aut perspiciatis eveniet doloribus quod. Placeat doloremque officiis accusantium. Perferendis, eos. Natus beatae recusandae dolore totam in sint eius expedita? Placeat molestias, asperiores dolor voluptatem veniam nam necessitatibus vitae.</p>
       </div>
    <div class="pic3">

    </div>
</div>
<div class="space"></div>
<div class="stock">
    <div class="info">
    <h2>Graphics Cards</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae non culpa at unde assumenda veritatis quaerat quod maxime inventore beatae natus aut quia ipsam dicta quas, quisquam, amet explicabo repudiandae mollitia sit nesciunt commodi est doloribus. Minus fugit facere quo non corrupti tempore, voluptate ipsum ducimus beatae reiciendis quia adipisci aut voluptatibus nulla in saepe, repudiandae dicta ullam! Dolore, sit.
    </p>

    </div>
    <div class="pic4">

    </div>
</div>
<div class="space"></div>




    <div class="footer">

        <div class="footer-content">


            <div class="footer-section about">
                <h2>Live<span>Game</span>Love</h2>
                <p class="good"> This is a business where you can purchase or sell computer parts. We have all the latest stuff from the Minecraft 
                    raytracing RTX's all the way to the GTX 001. Our stock is incredible and your computer will be too. Don't worry all our parts a
                    re made in America, so you dont have to risk getting the Corona Virus.</p>
                <div class="contact">
                    <span><i class="fas fa-phone" style="font-size:20px;color:white;"></i> &nbsp; (530)680-8781</span>
                    <span><i class="fas fa-envelope" style="font-size:20px;color:white;"></i> &nbsp;
                        zmanplants@gmail.com</span>
                </div>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/zackugh/"><i class="fab fa-instagram"
                            style="font-size:30px;color:pink;"></i></a>
                    <a href="https://accounts.snapchat.com/accounts/snapcodes"><i class="fab fa-snapchat"
                            style="font-size:30px;color:yellow;"></i></a>

                </div>
            </div>
            <div class="footer-section link">
                
            </div>
            <div class="footer-section social">

            </div>
            <div class="footer-bottom">
                &copy; LiveGameLove.gov | Designed by Zachary Plants
            </div>
        </div>
    </div>

</body>

</html>