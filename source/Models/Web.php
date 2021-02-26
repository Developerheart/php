<?php

namespace source\Models;
use Source\Models\Carro;


class Web
{



    public function home($dados){
        require __DIR__."/../../views/listasHome.php";


    }

    public function blog($dados){
        echo "<h1> WEB blog </h1>";
        var_dump($dados);
    }


    public function edit($dados){
        $url = URL_BASE;
        require __DIR__."/../../views/editar.php";

    }


    public function confirm($dados){

        if (isset($dados['confirmar'])):

            $carro = new  Carro();
            $carro->marca = $dados['marca'];
            $carro->modelo = $dados['modelo'];
            $carro->cor = $dados['cor'];
            $carro->placa = $dados['placa'];


            if ($carro->save()):
                session_start();
                $_SESSION['MENSAGEM'] = "Cadastrado com sucesso!";
                require __DIR__."/../../views/listasHome.php";
            ;

            endif;

         endif;

    }


    public function editConfirm($dados){
        session_start();
        if (isset($dados['btn-editar'])):
            $carro = (new Carro())->findById($_SESSION['id']);

                $carro->marca = $dados['marca'];
                $carro->modelo = $dados['modelo'];
                $carro->cor = $dados['cor'];
                $carro->placa = $dados['placa'];

                session_unset();
                session_abort();


            if ($carro->save()):
                session_start();
                $_SESSION['MENSAGEM'] = "atualizado com sucesso!";
                require __DIR__."/../../views/listasHome.php";
                ;

            endif;

        endif;

    }

    public function delet($dados){


        if (isset($dados['btn-deletar'])):
            $carros = (new Carro())->findById($dados['id']);
            $carros->destroy();
            session_start();
            $_SESSION['MENSAGEM'] = "Deletado com sucesso!";
        require __DIR__."/../../views/listasHome.php";
        endif;
    }



    public function add($dados){
        $url = URL_BASE;
        require __DIR__."/../../views/adicionar.php";



    }
    public function error($data){
        echo "<h1> ERROR!!! {$data['errcode']}</h1>";
        var_dump($data);
    }

}