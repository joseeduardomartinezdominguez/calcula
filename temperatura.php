
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilos.css">
        <title>PAGINA PARA CALCULAR TEMPERATURA</title>
    </head>  
    <body>
        <div id="contenido">
            <center>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            <header>
                    <h1>CALCULA TEMPERATURA</h1>
            </header>
                
                   <?php
                   if ($_POST AND isset( $_REQUEST['temperatura']) and isset( $_REQUEST['temperatura2']))
                   {
                       $cantidad=$_POST['cantidad'];
                       $temperatura=$_REQUEST['temperatura'];
                       $temperatura2=$_REQUEST['temperatura2'];
                   
                       echo $cantidad,"  ", $temperatura,"  ", $temperatura2;
                   }
                   
                   ?>
<form action="temperatura.php" method="post" name="form">
<table width="1000" border="0">
    <tr+><h3>TEMPERATURA<input type="number" name="cantidad" /></h3>
    

   </tr>
   <tr>
    <div >    
        <select name="temperatura">
            <option value="uno">Grados Centigrados</option>
            <option value="uno">Grados Fahrenheit</option>
            <option value="uno">Kelvin</option>
        </select>
    </div>
 </tr>
    <tr>
   
    <h4>CALCULAR A</h4>
    <div class="custom-select" style="width:50px;">        
        <select name="temperatura2" >
           <option value="uno">Grados Centigrados</option>
            <option value="uno">Grados Fahrenheit</option>
            <option value="uno">Kelvin</option>
        </select>
    </div> 
     
    </tr>

<tr>
<td>&nbsp;</td>
<td><input type="image" src="images.jpg" value="CALCULAR TEMPERATURA" width="160" height="60"> </td>
</tr>
</table>
</form>
            </center>
            
        </div>
        
      
        
    </body>

    
 </html>