<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type=text/css">
            body{
                 background-color: #333;
                font-family: 'Times New Roman';
                color: blue;
            }
            table{
                background-color: #333;
                font-family: 'Times New Roman';
                color: blue;
            }
            tr{
               background-color: #58FAD0;
                font-family: 'Times New Roman';
                color: red; 
            }
            td{
                
           background-color: #58FA82;
                font-family: 'Arial';
                color: green;
            }
        </style>
    </head>
    <body>
        <form action="registro.php" method="get"> 
        <center><table bgcolor="#cccccc" border="0" cellpadding="4"
cellspacing="0" width="350">
           
    <tr>
        <td <label for = "Nombre" >Nombre del estudiante</label></td>
        <td> <input type="text" name="nombre" size="35" maxlength="35" ></td>
    
    </tr>
    
      <tr>
          <td <label for ="Edad" >Edad</label></td>
          <td>  <input type="text" name="edad" size="35" maxlength="35"></td>
    
    
      </tr>
     <tr>
          <td <label for ="Carrera" >Carrera</label></td>
          <td>  <input type="text" name="carrera" size="35" maxlength="35" ></td>
    
    </tr>
    <tr> 
        <td align="center"><input type="submit" name="enviar" value="Enviar Datos"</input> </td>
    </tr>
            </table> </center>
             
        </form>
    </body>
</html>
  
 

