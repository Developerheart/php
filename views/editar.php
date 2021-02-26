<?php

include_once "includes/header.php";
use Source\Models\Carro;
if (isset($_GET['id'])):
    $id = $_GET['id'];

    $dados = (new Carro())->findById($id);

    session_start();
    $_SESSION['id'] = $id;
endif;

?>




<div class="row">
    <div class="col s12 m6 push-m3">

        <h3 class="light"> Editar dados de um carro</h3>
        <form action="<?php echo "$url"; ?>/edit" method="POST">
            <div class="input-field col s12">
                <input type="text" name="marca" id="marca" value="<?php echo $dados->marca ?>">
                <label for="marca">Marca</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="modelo" id="modelo" value="<?php echo $dados->modelo ?>">
                <label for="modelo">Modelo</label>
            </div>


            <div class="input-field col s12">
                <input type="text" name="cor" id="cor" value="<?php echo $dados->cor ?>">
                <label for="cor">Cor</label>
            </div>


            <div class="input-field col s12">
                <input type="text" name="placa" id="placa" value="<?php echo $dados->placa ?>">
                <label for="placa">Placa</label>
            </div>

            <button type="submit" name="btn-editar" class="btn" >atualizar</button>
            <button type="submit" class="btn green">home</button>


        </form>
    </div>
</div>





<?php
include_once "includes/footer.php";
?>

