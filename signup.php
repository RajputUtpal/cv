<html>
<head></head>
<body><center></b><br><br>
<?php
$fname = filter_input(INPUT_POST, 'fname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (!empty($fname)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO signup(name,email,password)values ('$fname','$email','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Father's name should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
</b><br><br>
<div class="btn-group">
    <button onclick="window.location.href = 'signup.html';">Previous</button>
    <button onclick="window.location.href = 'bustiming.html';">Next</button>
    <button onclick="window.location.href = 'index.html';">Home</button>
</div>
</center>
<div style="width: inherit; height: 200px; background-image: linear-gradient(white,yellow,white);">
       <br><br> <center><p style="font-size: 50px;">APTICH</p></center>
  </div>
  <hr style="width: 80%; margin-left: 10%;">
  <center><img src="https://cdn.worldvectorlogo.com/logos/twitter-verified-badge.svg" alt="" style="width: 100px;">

<p style="font-size: 50px;">Your Email Address Has Been Conformed!</p>
<a href="index.html">
<button style="padding: 20px 50px; font-size: 20px; background-color: rgba(126, 252, 0, 0.568); border-radius: 5px;">Go to Home</button></a>

<p style="color: rgba(128, 128, 128, 0.63);">All Due emails are from email addresses that end with "@due.com".</p>
<footer style="background-color: rgba(128, 128, 128, 0.596); width: inherit;">
    <p style="font-size: 20px; margin-top: 10px; padding-top: 10px;">©2020 Due lnc.</p><br>
    <div
    style="display: flex; width: 90%; margin-left: 3%; height: 60px; border-color: solid whitesmoke; border-width: 2px;">
    
    <br>
    
    
    <img src="http://assets.stickpng.com/images/5ecec78673e4440004f09e77.png" alt=""
        style=" width: 30px; height: 30px; margin-left: 500px; opacity: 70%;">

    <img src="https://i.pinimg.com/originals/ca/3b/f0/ca3bf05cfab74677e5b73b130bd30991.png"
        alt=""
        style=" width: 30px; height: 30px; background-color: transparent; margin-left: 80px; opacity: 70%; border-radius: 50%;">

    <img src="https://www.pinclipart.com/picdir/big/343-3439665_twitter-logo-black-png-twitter-clipart.png"
        alt="" style=" width: 30px; height: 30px; margin-left: 80px; opacity: 70%;">

    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAb1BMVEUAAAD////u7u5XV1eenp7CwsJhYWF+fn7S0tJQUFDHx8fr6+sbGxvc3NxoaGiNjY1LS0uvr6+1tbU0NDQICAi7u7uEhIQgICBubm729vaVlZWnp6dnZ2clJSXj4+N2dnY8PDwtLS3Ozs5BQUEUFBQ64PE7AAAEyklEQVR4nO2d2XriMAxGY7aQ0AxLC4XAsLXv/4zDVkgpsVQijZfvP1dzQYjONMSOLSmJudGapNlLEjovWTppVayS67/yzHVsgoy6PwzXW9dBCbMtvht2XAekQFk1nLuORoX2zfCP61iUGH0ZDl1HosbqbNh3HYci45Nh+EOghdbBcOw6CFXmB8O/roPQZZAUrkNQpkxiHOur7JJYx8Ibr64DUOfNdQAAAAAAAAAAAMKjXU72/f5+Mhy5jkSFeV7ZlVtMo5NMF+aOIqYNx+R1fe93ZOo6LDnSR37HazWWdaxOjeCBOK5Ui6AxMdxwNjbBGLaudnZBs3YdYGMKwtCUriNsyB9K0JjAl80fDoTfCXuPdUQLGuM6yEaMOYap6yibMOAY5q6jbAJH0CxcR9kA1s8w6FF/zjNsu47zeeoeKu7YuI7zeZiGM9dxPg/zKg14uGDeaXqu42wAzzDkR33WiB/0tI01aws6QzXjGIadZMy5TF3H2AzGiBj6smmLNAw9B5f8JS5dR9iYpV1w4Do+AfpWw3fX4UlgW436cB2cDPV/xa3r0KSo+S0WgS+VVskejfxhz2V+kN45LiKsY8jGV8nWNNoqhtF8NpvHsS0KAAAAAABAPe+r4XKa9w/su9NlOY9kDeHCqOz/yNM9PMfkZRxT/Y/xA7srueI286RrJ394HW1y+0H3O44pnXs13SoZ2v5nTzxMU7DmpJr7ffEZeZITfZ1kVnJV/ynD6r54j944+CLXWPpSN8yJj9YeGIhhxrtAb3QDMxz+0u/AQPpKVTWc/F7QmIXwVommYZf4VJ3iZyiG0+cED9OcQAypz1gQzf5QM2TkyNcjWSCgZfjZRFA0DUvL0L6zTCLYwUvHcLNqJiiZ06pjWPIS5izIJZfrGAoglrbrraHYoOitoVlFbyhVyOKvoVROpMeGQvcajw2FZqceGwpdpj4bytxNfTaUSW312VBm+v2/DFvFcZm8/7v5ajCGRaeymj3q8C1FFsH1Dac/nmZ7jAryEyIjorZhsXt0fMk7WKRQXtmw7nbYZh0tMubrGtYn4fY4h4s8Qaka2gY01lf4bmgfzzi3G4kqck1Dez0R56coscOvaEjdCRl/RIn3xygaUqdm1M1JlAvoGdJVffR3SBQM6BnSnRjodXGJIV/PkD43PbOR2PNWM2QER1chS6y3qRlyZs3kl0hM29QMOTl5ZKKGxDOwmiHn5GQrNYlucVqGrOpacqdfokZXy3DPOTlRg+y34YRzcnK48NmQtRJIpkxJPCBqGbJmlOTM1GdDVpIh2ePIZ0NWpgG5lOGzIavMNmhDVm8p8jHfZ0NWFzsYwhCGMIQhDGEIQxjCEIYwhCEMYQhDGMIQhjCEIQxhCEMYwhCGMIQhDGEIQxjCEIYwhCEMYQhDGMIQhjCEIQyZoZIlWR4ZFi07i4dF/9tVz86K1e44WxBnF2zyCQAAAAAAAAAAhE1Eb7ivQfBtJp4S7Vvgr0i05fOb2BerPhKih2jwLBOZdsr+skhkGtV6S2kS4XeYeca7ORqK9HH1lPXZkNeyKUSOrzg998+U6DfsIacXSF46hEY57p8bZ371QF1vXccjzexiduvymsfxeu8L6fUdGdU+tq1JmoU/OL7teuW+YvUPAwBQXaRKC6QAAAAASUVORK5CYII="
        alt="" style=" width: 30px; height: 30px; margin-left: 80px; opacity: 70%;">

    <img src="https://w7.pngwing.com/pngs/271/390/png-transparent-youtube-play-button-computer-icons-black-and-white-youtube-angle-rectangle-triangle-thumbnail.png"
        alt="" style=" width: 40px; height: 30px; border-radius: 10px; margin-left: 80px; opacity: 70%;">

    

</div>
<p>Notices Terms & Conditions Privacy Policy.</p>
<p>Copyright © 2018 ANI Technologies Pvt. Ltd. All rights reserved.</p>
</footer>
</center>
</body>
</html>