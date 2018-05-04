<form> <!-- method get e action para a mesma página por padrão -->
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Enviar">
</form>

<?php

    if(isset($_GET)){
        foreach ($_GET as $key => $value) {
            echo "Nome do campo: ". $key ."<br>";
            echo "Valor do campo: ". $value;
            echo "<hr>";
        }
    }

?>