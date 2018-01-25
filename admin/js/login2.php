<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="jquery.js"></script>
	<script >
		$(document).ready (function()
{   $('#login').click( function()
{    var error=false;
	if($('#username').val()=="")
	{
		$('#username').next('.error').show();
		  error=true;
	}
	if($('#password').val()=="")
	{
		//$('#error2').show();
		$('#password').next('.error').show();
		  error=true;
	}
	if( error==true)
	{
		return false;
	}
});
	
});
	</script>
	<style >
	table{
		box-shadow: 0 0 3px #DDDDDD;
		margin-top: 100px;
	}
	td{
		color: #333333;
		font-weight: bold;
	}
	input{
		border: 0;
		box-shadow: 0 0 3px #888888;
		padding: 3px;
		border-radius: 6px;
	}
	#login{
		font-weight: bold;
		border-radius: 4px;
		padding: 3px;
		width: 70px;
		margin-top: 10px;
		opacity: 0.8 ;

	}
	.error ,.error {
		color: red;
		display: none;


	}
</style>
</head>

<body>
<form>
	<center>
 
    <table bgcolor="#EEEEEE" >
    <thead>
        <tr>
            <th colspan="2"><h2>ĐĂNG NHẬP</h2> </th>
            
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" size="30" id="username">
            <span class="error"> * chua nhap username </span>
            </td>
            
            
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" size="30" id="password">
            <span class ="error"> * chua nhap password </span>
            </td>
        </tr>

        <tr>
            <td colspan="2">
             <center><input type="submit" name="login" value="Login" id="login"></center> 
            </td>
            </center>
        </tr>
    </tbody>
</table>  


</body>
</html>