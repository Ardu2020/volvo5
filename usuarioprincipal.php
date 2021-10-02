<?php
 if(($_POST)){
# Aqui definimos el usuario y password
# Puedes cambiar el usuario y clave x lo q sea
$usuario = 'soy';
$clave = 'volvo';
# Aqui compruebo q los datos(usuario y contraseña) ingresados sean igual a lo que eh definido
# Y si son correcto los datos redireciona al enlace de tu sitio Autorizado
# En que caso que no sean correcto los datos  recirecciona al enlace de Error de  Datos Ingresados
if(trim($_POST['user'])==$usuario && trim($_POST['pass'])==$clave) {
header('Location: 0inicio.html');
 }else{
header('Location: index.html');
 }
   }

?>