<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora</title>
        <style>
            
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
            }
            
            .calculator {
                width: 250px;
                margin: 0 auto;
                margin-top: 100px;
                background-color: #fff;
                border: 1px solid #ccc;
                padding: 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            
            .calculator h2 {
                text-align: center;
            }
            
            .calculator form {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-gap: 10px;
            }
            
            .calculator input[type="submit"] {
                width: 100%;
                height: 60px;
                background-color: #4caf50;
                color: #fff;
                border: none;
                font-size: 18px;
                text-align: center;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            
            .calculator input[type="submit"]:hover {
                background-color: #45a049;
            }
            
            .calculator input[type="text"], .mostrar{
                grid-column: 1 / span 4;
                display: flex;
                justify-self: center;
                width: 90%;
                height: 30px;
                padding: 10px;
                font-size: 24px;
                text-align: right;
                border: 1px solid #ccc;
                box-shadow: inset 0 2px 2px rgba(0, 0, 0, 0.1);
            }

            .mostrar {
                margin-bottom: 15px;
            }
        </style>
    </head>

    <body>
        <div class="calculator">
        <h2>Calculadora</h2>
            <div class="mostrar">
                <?php?>
            </div>
            
            <form method="post">
                <input type="submit" name="number" value="7">
                <input type="submit" name="number" value="8">
                <input type="submit" name="number" value="9">
                <input type="submit" name="operator" value="/">
                <input type="submit" name="number" value="4">
                <input type="submit" name="number" value="5">
                <input type="submit" name="number" value="6">
                <input type="submit" name="operator" value="*">
                <input type="submit" name="number" value="1">
                <input type="submit" name="number" value="2">
                <input type="submit" name="number" value="3">
                <input type="submit" name="operator" value="-">
                <input type="submit" name="number" value="0">
                <input type="submit" name="decimal" value=".">
                <input type="submit" name="operator" value="=">
                <input type="submit" name="operator" value="+">
            </form>
        </div>
    </body>
</html>
