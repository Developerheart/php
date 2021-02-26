<?php
include_once "includes/mensagem.php";
include_once "includes/header.php";
?>
<div class="row">
    <div class="col s12 m6 push-m3">

        <h3 class="light">Concessionaria</h3>
        <table class="striped">
            <?php

            require __DIR__."/../vendor/autoload.php";




            ?>
            <a href="<?php echo "http://localhost/aplication/adicionar"; ?>" class="btn">Adicionar</a>
            <thead>
                <th>marca:</th>
                <th>modelo:</th>
                <th>cor:</th>
                <th>placa:</th>
            </thead>

            <tbody>

            <?php



                use  CoffeeCode\DataLayer\Connect;
                $coon = Connect::getInstance();
                $query = $coon->query("SELECT * FROM carros");

                $dados = $query->fetchAll();


                foreach ($dados as $valor):


            ?>


            <tr>

                <td><?php echo $valor->modelo;?></td>
                <td><?php echo $valor->marca;?></td>
                <td><?php echo $valor->cor;?></td>
                <td><?php echo $valor->placa;?></td>
                <td><a href="http://localhost/aplication/edit/?id=<?php echo $valor->id; ?>" class="btn-floating orange">
                        <i class="material-icons">edit</td>
                <td><a href="#modal<?php echo $valor->id; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</td>

                <!-- Modal Trigger -->


                <!-- Modal Structure -->
                <div id="modal<?php echo $valor->id; ?>" class="modal">
                    <div class="modal-content">
                        <h4>Ooopa!</h4>
                        <p>Tem certeza que desejar excluir essas informações?</p>
                    </div>
                    <div class="modal-footer">

                        <form action="http://localhost/aplication/delet/?id=<?php echo $valor->id; ?>" method="POST">
                            <input type="hidden" name="id" value="<?php echo $valor->id; ?>">
                            <button type="submit" name="btn-deletar" class="btn red">Sim, Eu quero!</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cacelar</a>
                        </form>



                    </div>
                </div>

            <?php
            endforeach;
            ?>


            </tbody>
        </table>

        <br>

    </div>
</div>





<?php
include_once "includes/footer.php";
?>

