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