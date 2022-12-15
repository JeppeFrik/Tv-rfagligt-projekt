<style>
<?php include 'mystyle.css'; 
?>
</style>

<body>
<section class="background">
<!-- Her er vores login form -->
<h2 class="overskrift_login">Login</h2><br>
<br>
    <form action='login.php' method='post'>
        <input type='text' name='username' placeholder='Username'><br>
        <input type='password' name='password' placeholder='Password'><br>
        <br>
        <input class="knap" type='submit' value='Login'>   
    </form> 
    

    <form action="create_user.php" method="post">   
    <button class="knap" type="submit" href="/create_user.php">Create user</button> 
</form>
</div>
</section>
</body>