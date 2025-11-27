<?php

namespace App\Controller;

use App\Interface\ControllerInterface;
use App\Model\BookModel;
use App\Class\Book;
use App\Class\Auxiliar;

class BookController implements ControllerInterface
{
    public function index()
    {
        $libros = BookModel::getAllBooks();
        return include_once DIRECTORIO_BACKEND . "listaProductos.php";
    }
    public function show($id)
    {
        $libro=BookModel::getBookById($id);
        return include_once DIRECTORIO_BACKEND . "perfilProducto.php";
    }
    public function create()
    {
        include_once DIRECTORIO_BACKEND . "cargarProductos.php";
    }
    public function store()
    {
        $errores=Book::validateBookRegister($_POST);
        if(is_array($errores)){
            return include_once DIRECTORIO_BACKEND . "cargarProductos.php";
        }else{
            $libro = Book::createFromArray($_POST);
            BookModel::saveBook($libro);
            header("Location: /book/");
        }
        // Las Imagenes
        //$rutaDestinoImg=\App\Class\Auxiliar::gestionarImagen($_POST, $_FILES);
        //Guardar la información del libro en la base de datos
        //header('Location:/book/'.$_POST['id']);
    }
    public function edit($id)
    {
        $libro=BookModel::getBookById($id);
        include_once DIRECTORIO_BACKEND . "editarProducto.php";
    }
    public function update($id)
    {
        $put=json_decode(file_get_contents("php://input"),true);
        $put['id']=$id;

        $resultado=Book::validateBookUpdate($put);
        if(is_array($resultado)){
            http_response_code(400);
            return json_encode([
                "error"=>true,
                "message"=>"Hay errores en el proceso",
                "data"=>$resultado,
                "code"=>400
            ]);
        }else{
            $oldBook=BookModel::getBookById($id);
            $newBook=Book::createFromArray($oldBook, $put);
            BookModel::updateBook($newBook);
            http_response_code(201);
            return json_encode([
                "error"=>false,
                "message"=>"Libro actualizado correctamente",
                "data"=>$newBook,
                "code"=>201
            ]);
        }
        return json_encode($resultado);
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        BookModel::deleteAllBooks();
    }
    public function destroyAll()
    {
        BookModel::deleteAllBooks();
    }
    public function verify()
    {
        //Comprobar si el libro esta creado
        $libro=BookModel::getBookByTitle($_POST["titulo"]);

    }
}