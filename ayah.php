<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Mhmood Alrusli</title>
<style type="text/css">
input[type="text"] {
  background-color: rgba(0, 0, 0, 0.3);
  border: none;
  padding: 50px;
  border-radius: 30px;
  font-size: 52px;
  outline: none;
  width: 500px;
  box-shadow: 3px 3px 0px 0px black;
}
input[type="text"]::placeholder {
  color: #FFFFFF;
}
body {
    justify-content: center; 
    align-items: center;
    font-size: 110;
    color: #FFF;
    background-image: url('aya.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    font-family:  "Monaco",Inconsolata;}
.site-border {
    text-align:center;
    width:60%;
    margin:0px auto;
    margin-top:100px;}
.avater {
    border-radius:50%;
    height:200px;
    padding:15px 5px;}
.location {
    opacity:0.8;
    padding:5px;
    user-select:none;}
.full-name {
  font-size: 40px;
  user-select: none;
  color: white;
}
.fname1 {
  background-color: rgba(0, 128, 0, 0.6);
  color: white;
  border: none;
  padding: 50px;
  border-radius: 30px;
  font-size: 50px;
  outline: none;
  width: 500px;
  box-shadow: 3px 3px 0px 0px black;
  user-select:none;
  text-align: left;
}
.fname {
  background-color: rgba(0, 0, 0, 0.6);
  color: white;
  border: none;
  padding: 50px;
  border-radius: 30px;
  font-size: 50px;
  outline: none;
  width: 500px;
  box-shadow: 3px 3px 0px 0px black;
  user-select:none;
}
.menu__container {
max-width: 500px;
height: 100px;
margin-left: auto;
margin-right: auto;
margin-top: 70px;
margin-bottom: 70px;
border-radius: 115px;
box-shadow: 0 10px 40px rgba(0,0,0,0.1);
background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
transform: perspective(1000px) rotateX(-45deg) rotateY(0deg) rotateZ(0deg);
transform-origin: center center 0px;
transition: all 0.4s ease-out;}
.menu__container .menu {
display: flex;
justify-content: space-around;
align-items: center;
max-width: 100%;
height: 100%;}
.menu__container .menu a {
text-decoration: none;
color: #fff;
font-size: 35px;
transition: all 0.1s linear;}
.menu__container--2 {
background: linear-gradient(20deg, #20202088 160%, #8ec5fcb7 100%);
transform: perspective(10000px) rotateX(5deg) rotateY(30deg) rotateZ(0deg);}
.menu__container--2:hover {
transform: perspective(1000px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);}
footer {
    background-color: #222;
    color: #fff;
    font-size: 15px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;}
footer p {
    margin: 30px 0;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida  Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}
footer .fa-heart{
    color: red;}
footer .fa-dev{
    color: #fff;}
footer .fa-twitter-square{
  color:#1da0f1;}
footer .fa-instagram{
  color: #f0007c;}
fotter .fa-linkedin{
  color:#0073b1;}
footer .fa-codepen{
  color:#fff}
footer a {
    color: #3c97bf;
    text-decoration: none;
  margin-right:5px;}
</style></head>
  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      const audio = new Audio();
      audio.src = 'b.mp3';
      audio.autoplay = true;
      audio.addEventListener('ended', () => {
        audio.currentTime = 0;
        audio.play();
      });
    });
  </script>
<container>
<div class="site-border">
<img src="aya.jpg" class="avater">
<p class="location"> <i class="fas fa-map-marker-alt"></i> Syria 🇸🇾 </p>
<div class="full-name">Random Ayah</div>
<br><br><br><br>
<body>
    <?php
error_reporting(E_ERROR | E_PARSE);
$sora=rand(0,114);
$url='https://api.alquran.cloud/v1/surah/'.$sora;
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 0);
//  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//  curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
$cc= curl_exec ($ch);
$whisper=(json_decode($cc, true));
$ayat=intval($whisper['data']['numberOfAyahs']);
$aya=rand(0,$ayat);
$an=$aya+1;
$ayah=$whisper['data']['ayahs'][$aya]['text'];
$name=$whisper['data']['name'];
curl_close ($ch);
echo "<font color='red' size='666'><bold>$name<br>";
echo "<font color='red' size='666'><bold><hr>الآية $an";
echo "<div class='success'><center>
<font color='green'><hr>$ayah</font></center></div>";
?>