<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>GoIP SMS Manage Server</title>
<SCRIPT type=text/javascript>
function CheckForm()
{
	if(document.login.username.value=="")
	{
		alert("input username!");
		document.login.username.focus();
		return false;
	}
	if(document.login.password.value == "")
	{
		alert("input password!");
		document.login.password.focus();
		return false;
	}
}
</script>
</head>

<body onload="document.login.username.focus();">

<center>
	<h1>GoIP SMS Manage Server</h1>
  <p>&nbsp;</p>
  <form name="login" method="post" action="dologin.php" onSubmit="return CheckForm();">
    <table width="500" height="241" border="0" cellpadding="0" cellspacing="0">
      <tr align="center">
        <td colspan="2" bgcolor="#999999">Administrator Logon Screen  </td>
      </tr>
      <tr bgcolor="#CCCCCC">
        <td width="137" align="center">UserName</td>
        <td width="363"><input name="username" type="text" id="username"></td>
      </tr>
      <tr bgcolor="#D9D9D9">
        <td align="center">Password</td>
        <td><input name="password" type="password" id="yd631_pws"></td>
      </tr>
      <tr align="center" bgcolor="#CCCCCC">
        <td colspan="2"><input type="submit" name="Submit" value="Sign in"> 
          <input type="reset" name="submit" value="Cancel"> 
		  
        </td>
      </tr>
    </table>
	<input type="hIdden" name="lan" value="3">
  </form>
  <p>&nbsp;</p>
</center>

</body>
</html>
