<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>  
        
        <style>    
        body{
background-color: lightpink;
}

        </style>
    </head>

    <body>
        <u><h1>Receipt</h1></u>
        <div class="bg">
            
        <!-- // Starting the session to get the session variable from last page-->

        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "The name is : ".$fullNameValue."."; 
        echo "<br></br>";
        echo "The total value is : ".$totalValue2.".";
        ?>
    
         
        </div>
        <div>
            <img src="Success.png" style="width:300px;height:200px;">
        </div>
   </body>
        
</html>

