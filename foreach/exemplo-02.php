// O formulário abaixo não possui definido action nem method, logo assume os valores padrão: executado na própria página e método é o $_GET.
<form>
    <input type="text" name="nome" />
    <input type="date" name="nascimento" />
    <input type="submit" value="Enviar" />
</form>
<?php
    // Testa se a variável $_GET foi inicializada
    if (isset($_GET)){
        // Percorre o array super global $_get trazendo:
        // $key = nome do imput
        // $value = valor digitado no campo
        foreach($_GET as $key => $value){
            echo "Nome do campo: " . $key . "</br>";
            echo "Valor do campo: " . $value . "</br></br>";
            echo "<hr>";
        }
    }
?>