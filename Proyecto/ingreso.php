<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" href="jquery-ui-1.8.6.css" rel="Stylesheet" />
<title>XXXXXXXX</title>
</head>
<body>
<?php
echo "<a>holas</a>";
/*include("conexion.php");

$conn=ocilogon($user,$clave,$db);
if(!$conn)(
echo "Conexion inválida".var_dump (ocierror());
die();
)
else{
echo"BIEN";
}
$var1=$_POST["nombre"];
$var2=$_POST["nombre2"];
$var3=$_POST["apellidos"];
$var4=$_POST["apellidos2"];
$var5=$_POST["cedula"];
$var6=$_POST["dob"];
$var7=$_POST["ciudad"];
$var8=$_POST["pais"];
$var9=$_POST["placas"];
$var10=$_POST["usuario"];
$var11=$_POST["clave"];

$query =($conn,"INSERT INTO USUARIOS VALUES(:dato1,:dato2,:dato3,:dato4,:dato5,:dato6,:dato7,:dato8,:dato9,:dato10,:dato11 )")
ocibindbyname($query, ":dato1", $var1);
ocibindbyname($query, ":dato2", $var2);
ocibindbyname($query, ":dato3", $var3);
ocibindbyname($query, ":dato4", $var4);
ocibindbyname($query, ":dato5", $var5);
ocibindbyname($query, ":dato6", $var6);
ocibindbyname($query, ":dato7", $var7);
ocibindbyname($query, ":dato8", $var8);
ocibindbyname($query, ":dato9", $var9);
ocibindbyname($query, ":dato10", $var10);
ocibindbyname($query, ":dato11", $var11);

ociexecute($query, Oci_default);
ocicommit($conn);
ocilogoff($conn);
*/
$user="system";
$clave="oracle";
$db="xe";



$conn=ocilogon($user,$clave,$db);
if(!$conn){
echo "Conexion inválida".var_dump (ocierror());
die();
}
else{
echo"BIEN";
}
$var1=$_POST["nombre"];
$query =($conn,"INSERT INTO USERS VALUES(:dato1)")
ocibindbyname($query, ":dato1", $var1);
ociexecute($query, Oci_default);
ocicommit($conn);
ocilogoff($conn);
?>
</body>
</html>