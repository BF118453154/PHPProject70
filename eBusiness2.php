<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
/**
 *Allocate the mobile number session variable to a text box
 */
?>
<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Ebusiness 2</title>
       
        <style>    
        body{
background-color: lightpink;
}
        </style>
       
    </head>
    
    
    <body>
        
        
    
            
        <form name="Details" method="post" action="eBusiness3.php">
                
      
                
                <center>
                    
                    
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" minlength="4" maxlength="4" value="" /></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                        
                    </table>
                </center>
                
                <center>
                    
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
 
                    
                </center>
                
 

        
</form>
            
    </body>
    
    
</html>