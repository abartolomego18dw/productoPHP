<!doctype html>
<html>
    <head>
		<title>
			DWES03 - Ejercicio de Recuperacion
		</title>
    </head>
    <body>
    <?php
        function stringtoarray ($string_producto,&$array_producto) {
                    //Convierte la agenda de datos (string) en un array asociativo
                    $a=explode (";",$string_producto);
                    for($i=0; $i<count($a); $i++) {
                        $array_producto[$a[$i]]=$a[$i+1];
                        $i++;
                    }
                    return true;
                }
                function arraytostring ($array_producto) {
                    //Convierte el array asociativo en una cadena de caracteres cada elemento separado por ;
                    foreach($array_producto as $key_nombre => $value)
                    {
                    $string_producto.=$key_nombre.";".$value.";";
                    }
                    //Quitamos el ultimo ';''
                    $string_producto=substr($string_producto, 0, -1);
                    return $string_producto;
                }
    ?>
    <?php
    function add_contact ($codigo,$descripcion,&$array_producto) {
				//Añadir contacto al array con clave 'nombre' y valor 'email'
				$array_producto[$codigo]=$descripcion;
				return true;
			}
        ?>
    
        <form method="POST" action="#">
            <input name="agenda" type="text" value="<?php echo  arraytostring ($array_producto) ?>"/>
            <label for="codigo">Codigo</label>
            <input type="text" name="codigo" name="codigo"  value="<?php echo empty($_POST['codigo'])?"":$_POST['codigo'];?>">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion">
            <label for="cantidad">cantidad</label>
            <input type="text" name="cantidad">
            <button type="submit" name="submit">Añadir producto</button>
            <?php
				  		// recorremos el array y mostramos los contactos
				  		foreach ($array_producto as $codigo => $descripcion) {
				  			echo ucwords($codigo," ");
				  			echo $email;
				  		}
					?>
        </form>
    </body>
</html>