<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        

        return true;
    }
</script>
<?php
 //TODO 2: add PHP Code
 //empty is for php and checks if place is empty
 if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])) {
     //get the email key from $_POST, default to "" if not set, and return the value
     $email = se($_POST, "email", "", false);
     //smae as above but for password and confirming password
     $password = se($_POST, "password", "", false);
     $confirm = se($_POST, "confirm", "", false);
 //TODO 3: validate/use
 $hasError = false;
     if(empty($email)) {
         echo "Email must not be empty";
         $hasError = true;
     }

     if(empty($passowrd)) {
        echo "Password must not be empty";
        $hasError = true;
     }

     if(empty($email)) {
        echo "Confirm password must not be empty";
        $hasError = true;
     }

     if(empty($email)) {
       echo "Email must not be empty";
       $hasError = true;
     }
     
     if(strlen($password)) {
        echo "Password too short";
        $hasError = true;
     }
     
     if(strlen($password) > 0 && $passowrd !== $confirm) {
        echo "Passwords must match";
        $hasError = true;
     }
     
     if(!$hasError) {
        echo "Welcome, $email";
     }

     //to test is it php -S localhost:3000 -t public_html
 }
?>