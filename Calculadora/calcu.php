<html>
    <head>
        <title>Calculadora</title>
    </head>
        <body>
<form action ="operacion.php" method="post" name="operacion">
    <label>Introduce los valores:<br/></label>
    <input type="text" name="numero1" /><br/><br/>
    <input type="text" name="numero2" /><br/><br/>  
    <input type="text" name="numero3" /><br/><br/> 
    <label> Seleciona una operacion:<br/>
        <select name="lista">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
    </label>
    <br/>
    <input type ="submit" value="Resultado" />
</form>
</body>
</html>   
        
        



