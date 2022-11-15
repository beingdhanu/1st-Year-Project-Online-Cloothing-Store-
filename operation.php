<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="operation.php" method="POST">
        <?php 
    $con=new mysqli("localhost","root","","project");
    // include 'connect.php';
if (isset($_POST['submit'])){
    $name=$_POST['user'];
    $add=$_POST['address'];
    $pass=$_POST['mypass'];
    $number=$_POST['num'];
    $email=$_POST['myemail'];
$login_query="INSERT INTO xuchotable( Name, Address, Password,  Contact, Email) VALUES('$name','$add','$pass','$number','$email')";
$result= mysqli_query($con,$login_query);
if($result){
    echo"Data is inserted successfully";
}
else{
    die(mysqli_error($con));
}
}
?>
        <div class="s">
        User Name:<input type="text" name="user" placeholder="Enter your name" id="name" required><b><span></span></b><br><br>
        Address:<input type="text" name="address" placeholder="Enter your address" id="address" required><b><span class="formerror"></span><b></b><br><br>
        Password:<input type="password" name="mypass" placeholder="Enter your password"id="pass"required  onchange="validateform()"><b><span class="formerror" id="cp"></span></b><br><br>
        Confirm password:<input type="password" name="mycpass" placeholder="Confirm your password" id="cpass"required onchange="validateform()"><b><span class="formerror"id="ccp"></span></b><br><br>
        Contact number:<input type="phone" name="num" placeholder="Enter your contact number"id="phone" required onchange="validateform()"><b><span class="formerror"id="con"></span>,</b><br><br>
        Email:<input type="email" name="myemail" placeholder="Enter your email" id="mail" required><b><span class="formerror"></span></b><br><br>
    </div>
    <input type="submit"name="submit" class="but" value="Submit" >
    <input type="reset" class="butt" value="Reset" >
     
    </form>
     <style>
        *{
            background-color: antiquewhite;
         padding-left: 30px;
            margin-top: 30px;
            font-weight:bolder ;
        }
        .but{
            color: blue;
            width:100px;
            
        }
        .butt{
            color: blue;
            width:100px;
        }
        .s{
            border-radius: 1px;
            width:150%;
            font-size: medium;
            color: blue;
        }
        .formerror{
            color: brown;
        }
            .s input{
                width: 20%;
            }
    </style>
    <script>
        function validateform(){
    let a = document.getElementById("pass").value;
    let b = document.getElementById("cpass").value;
    let c=document.getElementById("phone").value;
if(a!=b){
document.getElementById("ccp").innerHTML="**password doesnot match**";
}
else{
document.getElementById("ccp").innerHTML="";
}
if(a.length<8){
    document.getElementById("cp").innerHTML="**password should be of 8 characters**";
    return false;
}
if(a.search(/[0-9]/)==-1){
    document.getElementById("cp").innerHTML="**password should be of at least of one numeric characters**";
return false;
}
if(a.search(/[A-Z]/)==-1){
    document.getElementById("cp").innerHTML="**password should be of at least of one uppercase characters**";
return false;
}
if(a.search(/[!\@\#\$\%\^\&\*\?]/)==-1){
    document.getElementById("cp").innerHTML="**password should be of at least of one special characters**";
return false;
}
else{
document.getElementById("cp").innerHTML="";
}
if(c==""){
    document.getElementById("con").innerHTML="** Contact number should be mentioned**";
    return false;
    }
    if((c.charAt(0)!=9)&&(c.charAt(1)!=8)){
	    document.getElementById("con").innerHTML="**Number must start with 98**";
	    return false;
	}
if(c.length<10){
    document.getElementById("con").innerHTML="**Number should be  of 10 digits**";
    return false;
}
if((c.length>10)){
    document.getElementById("con").innerHTML="**Number should be  of 10 digits**";
    return false;
}	
else{
    document.getElementById("con").innerHTML="";
}   
    };
    </script>
</body>
</html>