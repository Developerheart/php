
<?php

include_once "includes/header.php";
?>


<div class="row">
    <div class="col s12 m6 push-m3">

        <h3 class="light"> Novo Carro </h3>
        <form action="<?php echo "$url"; ?>/adicionar" method="POST">
            <div class="input-field col s12">
                <input type="text" name="marca" id="marca">
                <label for="marca">Marca</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="modelo" id="modelo">
                <label for="modelo">Modelo</label>
            </div>


            <div class="input-field col s12">
                <input type="text" name="cor" id="cor">
                <label for="cor">Cor</label>
            </div>


            <div class="input-field col s12">
                <input type="text" name="placa" id="placa">
                <label for="placa">Placa</label>
            </div>

            <button type="submit" name="confirmar" class="btn" >Confirmar</button>
            <a href="http://localhost/aplication/" class="btn green">home</a>


        </form>
    </div>
</div>
<?php
include_once "includes/footer.php";
?>

