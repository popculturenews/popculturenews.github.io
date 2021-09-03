<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Digital World - Social Network</title>
<style>
.white-header{
color:rgb(237, 245, 244);
}
.header-top{
background-color:rgb(18, 14, 10);
}
body{
background-color:rgb(14, 231, 235);
}
.form-one{
background-color:rgb(235, 66, 14);
}
a:hover{
background-color:rgb(236, 22, 22);
}
.form-two{
background-color:rgb(20, 122, 6);
}
.account{
background-color:rgb(19, 11, 179);
height:50px;
width:332px;
color:white;
}
</style>
</head>
<body>
<script src="https://www.google.com/recaptcha/api.js"></script>
<div class="header-top">
  <img src="https://static.wixstatic.com/media/fa0608_3ad0b198693f45c6a03a7eec40cd696d~mv2.png/v1/fill/w_744,h_618,al_c,lg_1,q_90/Untitled%20(1).webp">
<h1 class="white-header" id="cool-header-top">America's #1 Social Network, Sell, Post, Upload, and more.</h1>
<a href="#about-us">Click here to go to about us.</a>
<p class="white-header"><?php echo date(m, d, y) ?>
</div>
<div class="form-one" id="cool-form-one">
<form action="http://localhost/www.login.php" method="post">
<h2 class="white-header">Log In</h2>
<a href="#cool-header-top">Home</a> <br>
<a href="#cool-form-two">Don't Have An Account? Sign Up!</a> <br>
<h2 class="white-header">Please write your Email or Username.</h2> <br>
<input type="text" name="email-or-username-one" placeholder="Email or Username" required>
<h2 class="white-header">Please write your phone number.</h2>
<input type="text" name="phone-number-one" placeholder="Phone Number" required>
<h2 class="white-header">Please write your Password.</h2> <br>
<input type="password" name="password-one"placeholder="Password" required>
<h2 class="white-header">Pick your profile picture.</h2> <br>
<input type="file" name="ProfilePhoto-one"> <br>
<h2 class="white-header">Give a description of your career or hobbies.</h2>
<textarea name="description-one" placeholder="Description" required></textarea> 
<h2 class="white-header">When were you born?</h2> <br>
<input type="date" name="birthday" placeholder="Birthday" required> <br>
<h2 class="white-header">Which gender are you?</h2> <br>
<h2 class="white-header">Male:</h2>
<input type="radio" name="gender-questions" required>
<h2 class="white-header">Female:</h2>
<input type="radio" name="gender-questions" required>
<h2 class="white-header">Non-binary</h2>
<input type="radio" name="gender-questions" required> <br>
<h2 class="white-header">I'm Not A Robot</h2> <br>
<input type="radio" name="robot-questions" required> <br>
<button class="account" type="submit" name="submit">Log In</button>
</form>
</div>
<div class="form-two" id="cool-form-two">
<form action="http://localhost/www.signup.php" method="post">
<h2 class="white-header">Sign Up</h2>
<a href="#cool-header-top">Home</a> <br>
<a href="#cool-form-one">Already Have an Account? Log In!</a> <br>
<h2 class="white-header">Please write your Email.</h2> <br>
<input type="email" name="email-two" placeholder="Email" required>
<h2 class="white-header">Please write your Username.</h2> <br>
<input type="text" name="username-two" placeholder="Username" required>
<h2 class="white-header">Please write your phone number.</h2>
<input type="text" name="phone-number-two" placeholder="Phone Number" required>
<h2 class="white-header">Please write your Password.</h2> <br>
<input type="password" name="password-two" placeholder="Password" required>
<h2 class="white-header">Pick your profile picture.</h2> <br>
<input type="file" name="ProfilePhoto-two"> <br>
<h2 class="white-header">Give a description of your career or hobbies.</h2>
<textarea name="description-two" placeholder="Description" required></textarea>
<h2 class="white-header">When were you born?</h2> <br>
<input type="date" name="birthday-two" placeholder="Birthday" required>
<h2 class="white-header">Which gender are you?</h2> <br>
<h2 class="white-header">Male:</h2>
<input type="radio" name="gender-questions-two" required>
<h2 class="white-header">Female:</h2>
<input type="radio" name="gender-questions-two" required>
<h2 class="white-header">Non-binary</h2>
<input type="radio" name="gender-questions-two" required> <br>
<h2 class="white-header">I'm Not A Robot</h2> <br>
<input type="radio" name="robot-questions-two" required> <br>
<button class="account" type="submit" name="submit-two">Sign Up</button>
</form>
</div>
<div id="about-us">
<a href="#cool-header-top">Home</a> <br>
<h1>We are Saul Hirshberg and Jacob Rhodes we made this for you.</h1>
<h1>
Three reasons why we made this app!
</h1>
<ol>
<li>Because we know this will be a big hit.</li>
<li>Because we wanted to have some fun and see how skilled we are.</li>
<li>Because we wanted something new.</li>
<li>because we want you to have a platform for you to communicate.</li>
</ol>
</h1>
<h1>For more personal info about this site's founders. Click on the links below.</h1>
<a href="file:///C:/Users/saulh/Desktop/www.about-saul.html">Saul Hirshberg</a> <br>
<a href="file:///C:/Users/saulh/Desktop/www.about-jake.html">Jacob Rhodes</a> 
</div>
</body>
</html>



