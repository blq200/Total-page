       <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in</title>
    <!------------------------StyleSheet------------------------>
        <link rel="stylesheet" href="style.css">
    <!------------------------Bootstrap------------------------>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <!---------------------------Logo-------------------------------->
        <div class="container" >
        <img src="logo1.png" style=" display: block; margin-left: auto; margin-right: auto; width:32%; margin-top:2em;"> 
        </div>
    <!----------------------------Form---------------------------->   
        <form>
            <div class="form_input" id="form" style="  text-align: center;margin-top: 2em;">
    <!-----------------------Full Name------------------->
                <input id="name" style=" width: 50%;height: 2.2em;border-radius: 10px;background-color: white;border: white;" type="text" name="fullname" placeholder="FULL NAME">
                <br><br>
    <!-----------------------Birthday-------------------->           
                <input id="date" style=" width: 50%;height: 2.2em;border-radius: 10px;background-color: white;border: white;" type="text" name="date" placeholder="BIRTHDAY">
                <br><br>
    <!-- Phone -->
    <div class="input-group"   style="width: 50%; height: 2.2em; margin-left: auto;margin-right: auto; ">
            <div class="input-group-prepend" >
            <div class="input-group-text"><img src="maroc.png" ></div>
            </div>
            <input type="tel" class="form-control" id="inlineFormInputGroupUsername" placeholder="+212">
        </div>
        <br><br>
    <!-- Phone -->
    <!------------------------City------------------------>
                <input id="city" style=" width: 50%; height: 2.2em; border-radius: 10px; background-color: white; border: white" type="text" name="city" placeholder="CITY">
                <br><br>
    <!------------------------Email------------------------>
                <input id="email" style=" width: 50%; height: 2.2em; border-radius: 10px; background-color: white; border: white;" type="email" name="email" placeholder="E-MAIL(EX..person@example.com)">
                <br><br>
        <!------------------------Adress------------------------>
                <input id="adress" style=" width: 50%; height: 2.2em; border-radius: 10px; background-color: white; border: white;" type="text" name="adress" placeholder="ADRESS">
                <br><br>
        <!------------------------Carts------------------------>
                <input id="carts" style="  width: 50%; height: 2.2em; border-radius: 10px; background-color: white; border: white;" type="text" name="carts" placeholder="XXXXX---XXXXX--XXXXX">
                <br><br>
                <img style="width:50%;" src="carts.png">
                <br><br>
        <!------------------------Checkbox------------------------>
                <input   type="checkbox" id="check" name="check">
                <label for="check" style="color:grey;">I have read the terms and agreed on MakeTAJ<br> payment terms and agreement</label>
                
                <br><br>
        <!------------------------btns------------------------>        
                <button id="back" style="  background-color: #ae7b4c00; border: 1px solid #D3A589; border-radius: 10px;width: 15%; height: 2em; color: white;">BACK </button>
                <button id="submit"style="background-color: #ae7b4c00; border: 1px solid #D3A589; border-radius: 10px; width: 15%; height: 2em; color: white; margin-left: 12em;">Submit</button>
                <br><br> 
                <br><br> 
                <br><br>
            </div>
        </form>
    </body>
    </html>
