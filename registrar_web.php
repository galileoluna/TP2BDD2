<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        
        <style>
		
		table{
			width:300px;
			margin:auto;
			background-color:#FFC;
			border:2px solid #F00;
			padding:5px;
			
		}
		
		td{
			text-align:center;
			
		}
		h1{text-align:center}
		
		</style>
        
    </head>
    
    <body>
    <h1>REGÍSTRATE</h1>
    
        <form action="registrar.php" method="post">
        <table>
        <tr>
          <td>
            nombre</td><td><input type="text" name="nom" id="nom">
          </td>
        </tr>
           <tr>
             <td> apellido</td><td><input type="text" name="apel" id="apel">
             </td>
             </tr>
             <tr>
             <td> alias </td><td><input type="text" name="alias" id="alias">
             </td>
             </tr>
             <tr>
             <td> Contraseña </td><td><input type="text" name="contra" id="contra">
             </td>
             </tr>
           
           <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Dale!">
        </td></tr></table>
        </form>
    
    </body>
    
</html>