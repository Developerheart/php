<?php

require __DIR__ . "/vendor/autoload.php";


use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);
$router->namespace("source\Models");


/*
 * WEB
*home
*/

$router->group(null);
$router->get("/", "Web:home");
$router->get("/{filter}", "Web:home");


/*
 * Edit
 *
 */


$router->group("edit");
$router->get("/", "Web:edit");
$router->get("/{filter}", "Web:edit");
$router->post("/", "Web:editConfirm");
/*
 * contato
 */


/*
 * adicionar
 */

$router->group("adicionar");
$router->get("/", "Web:add");
$router->post("/", "Web:confirm");


/*
 * Delete
 */

$router->group("delet");
$router->get("/", "Web:delet");
$router->post("/", "Web:delet");
$router->post("/{filter}", "Web:delet");

/*
 * ERROS
 */

$router->group("ooops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();


if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}