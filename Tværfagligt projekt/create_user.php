<style>
<?php include 'mystyle.css'; ?>
</style>
<header class="knapcu">
<button class="knaph" onclick="history.go(-1);">Back</button>
</header>
<br>

   <div class="container">
    <!--Her er en HTML form til at oprette en bruger -->
    <h1 class="text-center">Create user</h1> 
    <form action="signup.php" method="post">
    <br>
        <div class="form-group"> 
            <label for="username" class="infotekst">Username</label>
            <font color=red>*</font>
        <input type="text" class="form-control" id="username"
            name="username" aria-describedby="emailHelp">    
        </div><br>
    
        <div class="form-group"> 
            <label for="password" class="infotekst">Password</label> 
            <font color=red>*</font>
            <input type="password" class="form-control"
            id="password" name="password"> 
        </div>
        <br>

        <div class="form-group"> 
            <label for="firstname" class="infotekst">Firstname</label>
            <font color=red>*</font> 
            <input type="text" class="form-control"
            id="firstname" name="firstname"> 
        </div>
        <br>

        <div class="form-group"> 
            <label for="lastname" class="infotekst">Lastname</label>
            <font color=red>*</font> 
            <input type="text" class="form-control"
            id="lastname" name="lastname"> 
        </div>
        <br>

        <div class="form-group"> 
            <label for="Etage" class="infotekst">Floor & Door</label> 
            <font color=red>*</font>
            <input type="text" class="form-control"
            id="Etage" name="Etage"> 
        </div><br>

        <div class="form-group"> 
            <label for="Email" class="infotekst">E-mail</label>
            <font color=red>*</font> 
            <input type="text" class="form-control"
            id="Email" name="Email"> 
        </div>
        <br>

        </div>      
        
        <button type="submit" class="knap">
        Create user
        </button> 

        
    </form>