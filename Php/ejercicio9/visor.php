<HTML>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
echo "El method usado fué: ",$HTTP_SERVER_VARS["REQUEST_METHOD"],"<br>";
echo  $HTTP_POST_VARS['nombre'],"<br>";
echo  $HTTP_POST_VARS['trab'],"<br>";
echo  $HTTP_POST_VARS['jub'],"<br>"; 
echo  $HTTP_POST_VARS['estud'],"<br>";
echo  $HTTP_POST_VARS['desemp'],"<br>"; 
echo  $HTTP_POST_VARS['sexo'],"<br>"; 
?>
</body>
</HTML>
