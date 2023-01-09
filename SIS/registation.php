

<?php
   error_reporting();
   session_start();
   session_destroy();

   if($_SESSION['message'])
   {
    $message=$_SESSION['message'];
     echo "<script type='text/JavaScript'>

           alert('$message');

     </script>";
   }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>leanr html css</title>
        <link rel="stylesheet" href="style.css"/>

    </head>
      <style type="text/css">
          
          body{


    background-color: teal;

}
*{
    box-sizing: border-box;
}
.container{
    margin: auto;
     width: 50%;
     padding:16px;
     background-color: white;
     box-shadow: 20px 20px 20px 20px rgba(red, green, blue, alpha);
}
input[type='text'],
input[type='password']{
    width: 100%;
     display:inline-block;
     padding: 16px;
     background: rebeccapurple;
     margin:10px 0px 20px 0px;
     border: none;
}
h1{
    border-radius: 1px solid white;
    font-size: medium;
    color:salmon;
}
p{
    font-size: small;
    color:sandybrown;
}
.registation{
    width: 100%;
    color: white;
    background-color: sienna;
    padding: 15px;
    margin: auto;
    border:none;
    opacity: 0.5;
    cursor: pointer;

}
.registation:hover{
    opacity: 1;
}
      </style>
    
    <body>
        
        <form action="db_registation.php"method="POST">
           <div class="container">
            <h1>Registation form</h1>
            <p>please fillup this table</p>
            <label for="fn"><b>First Name</b></label>
                <input type="text" placeholder="First Name"name='fname'id='fn'required/>
                <label for="psw"><b>password</b></label>
                <input type="password"placeholder="enter password"name='password'id='pass'required/>
                <hr>
                <label for="cpsw"><b>cpassword</b></label>
                <input type="password"placeholder="enter conform password"name='cpassword'id='cpass'required/>
                <hr>
                <label for="cpsw"><b>email</b></label>
                <input type="text"placeholder="enter conform email"name='email'id='email'required/>
                <hr>
                
                <button class="btn btn-primary" name="registation"type="submit">Registation</button>
        </form>
        </div>
   

        
    </body>
</html>