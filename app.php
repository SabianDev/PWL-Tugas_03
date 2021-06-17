<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>TheWebsite</title>
    <link rel="stylesheet" type="text/css" href="ss-index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body background="bg.jpg">
<p align="right"><a href="action-logout.php" id="white">Logout</a></p>
    <div class="container">

        <div class="header">
            <h1 id="headertitle">TheWebsite.com</h1>
            <div class="topnav">
                <a href="#">Contact</a>
                <a href="#">Portofolio</a>
                <a href="#">Home</a>
            </div>
        </div>


        <div class="mainpage">
            <font size= 5 px>
            <h1>Hello !</h1>
            My name is Reyhan Sabian and I am student of Faletehan University.<br>
            Welcome to TheWebsite.com !<br>
            <font size="4">
            This page is dedicated for college project. Thanks for visiting !!!
            </font>
            </font>
            <br><br>
            <b>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Reyhan Assisrazi Sabian</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>11119012</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>Informatika 2019</td>
                </tr>
            </table></b>
            <br>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a odio vitae tortor rutrum aliquet ac id ipsum. Ut vel tempus velit. Vestibulum pellentesque molestie nibh vel ultricies. Integer fermentum et eros et consectetur. Quisque elementum tortor mi. In eros mauris, faucibus at est in, pretium porta turpis. Aliquam id luctus turpis.
            </p>
            <p>
                Morbi euismod dui eget cursus ultricies. Aenean aliquet in est bibendum sagittis. Praesent non iaculis dolor, in luctus nibh. Praesent sagittis volutpat eros eu convallis. Fusce ultricies diam non dui vehicula commodo. Pellentesque gravida sem in dignissim feugiat. Pellentesque fringilla fringilla cursus. Praesent at orci mi. Aliquam luctus, dolor et dignissim faucibus, orci sapien condimentum felis, vitae mollis ex augue quis massa. Proin ornare lacus in lorem aliquet, ac consequat odio dictum. Aenean vel eros at dolor fermentum tristique. Aenean facilisis nisl eu ultrices congue. Donec ac quam cursus, euismod elit non, tincidunt metus. Nulla rutrum nec odio sed placerat.
            </p>

            
        </div>
        <div class="footer">
            <h4 id="white2">Contact Me :</h4>
            <table>
                <tr>
                    <td>
                        <img id="icon" src="ig.png">
                    </td>
                    <td>
                        <a id="white2" href="https://www.instagram.com/reyhan_sabian/">@reyhan_sabian</a>
                    </td>
                </tr>
            </table>

        </div>
    </div>
    <div class="pp">
        <img id="profile" src="pp.png">
    </div>
</body>
</html>