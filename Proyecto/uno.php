
<?php
/*
echo "adelante";
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
*/


$host="127.0.0.1";//172.16.3.225
$usuario="root";
$clave ="";
$basedatos ="trabajar";
   if (!($link=mysql_connect("$host","$usuario","$clave"))){
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("$basedatos",$link)){
      echo "Hola Error seleccionando la base de datos.";
      exit();
   }
   return $link;

?>
