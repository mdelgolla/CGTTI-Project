<html>
<head>
<title></title>
</style>
</head>
<body>
<div class="form">
<tr height="500px">
    <td valign="top" >
	<font class="register-form-label">This is a member area 
	<br>
	<br>
	Please sign in or <a href="UserReg.php"><font color="#00CCFF"><u>sign up</u></font></a>
	</font>
    <br>
    <br>
	<form action="pages/loginchk.php" method="post" onsubmit="return validate()" name="frm1">
    <table border="0">
      <tr>
        <td  class="register-form-label">User name</td>
        <td width="12">&nbsp;</td>
        <td ><input type="text" name="uname" /></td>
      </tr>
      <tr>
        <td class="register-form-label">Password</td>
        <td width="12">&nbsp;</td>
        <td><input type="password" name="pwd" /></td>
      </tr>
       <tr>
        <td></td>
        <td width="12">&nbsp;</td>
        <td><input type="submit" value="Sign in" /></td>
      </tr>
    </table>
  </form>
  <br>

</td>
<tr>
</div>
</body>
</html>