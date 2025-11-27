<?php

namespace App\Model;

use PDO;
use PDOException;
use Ramsey\Uuid\Uuid;
use App\Class\Book;



class BookModel
{
    public static function getAllBooks():?array{
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1", "miguela","aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $sql="SELECT * FROM book";
        $sentenciaPreparada=$conexion->prepare($sql);
        $sentenciaPreparada->execute();
        $resultado=$sentenciaPreparada->fetchall(PDO::FETCH_ASSOC);

        //Crea array de libros
        if($resultado){
            $libros=[];
            foreach($resultado as $libro){
                $libros[]=Book::createfromArray($libro);
            }
            return $libros;
        }else{
            return null;
        }
    }
    public static function saveBook(Book $book):bool{
        try{
            $conexiones=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela","aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="INSERT INTO book values(:id, :titulo, :autor, :isbn, STR_TO_DATE(:ano_publicacion, '%Y'), :num_paginas, :precio, :genero, :editorial, :idioma, :descripcion, :portada)";
        $sentenciaPreparada=$conexion->prepare($sql);

        $sentenciaPreparada->bindValue(':id', $book->getId());
        $sentenciaPreparada->bindValue(':titulo', $book->getTitle());
        $sentenciaPreparada->bindValue(':autor', $book->getAuthor());
        $sentenciaPreparada->bindValue(':isbn', $book->getIsbn());
        $sentenciaPreparada->binValue(':ano_publicaion', $book->getPublicationDate()->format('Y'));
        $sentenciaPreparada->binValue(':num_paginas', $book->getNumberOfPages());
        $sentenciaPreparada->bindValue(':precio', $book->getPrice());
        $sentenciaPreparada->bindValue(':genero', $book->getGenre());
        $sentenciaPreparada->bindValue(':editorial', $book->getPublisher());
        $sentenciaPreparada->bindValue(':idioma', $book->getLanguage());
        $sentenciaPreparada->bindValue(':descripcion', $book->getDescription());
        $sentenciaPreparada->bindValue(':portada', $book->getCover());

        //ejecutamos la sentencia
        $sentenciaPreparada->execute();
        //Comprobar si se ha insertado, mayor que cero se ha insertado
        if($sentenciaPreparada->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public static function getBookById(Book $book):?Book{
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela","aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="SELECT * FROM book WHERE id = :id";
        $sentenciaPreparada=$conexion->prepare($sql);

        $sentenciaPreparada->bindValue(':id', $id);
        //ejecuta la sentencia
        $sentenciaPreparada->execute();
        $resultado=$sentenciaPreparada->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            $libro=Book::createfromArray($resultado);
            return $libro;
        }else{
            return null;
        }
    }
    public static function getBookByTitle(string $title):?Book{
        try{
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela","aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="SELECT * FROM book WHERE titulo = :titulo";
        $sentenciaPreparada=$conexion->prepare($sql);

        $sentenciaPreparada->bindValue(':titulo', $title);
        $sentenciaPreparada->execute();
        $resultado=$sentenciaPreparada->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            $libro=Book::createfromArray($resultado);
            return $libro;
        }else{
            return null;
        }
    }
    public static function deleteBookById($id):bool{
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela","aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="DELETE FROM book WHERE id = :id";
        $sentenciaPreparada=$conexion->prepare($sql);
        $sentenciaPreparada->bindValue(':id', $id);
        $sentenciaPreparada->execute();
        if($sentenciaPreparada->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public static function deleteAllBooks():bool{
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela","aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="TRUNCATE TABLE books";
        $sentenciaPreparada=$conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":id",null);
        $sentenciaPreparada->execute();
        if($sentenciaPreparada->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public static function updateBook(Book $book):bool
    {
        try {
            $conexion= new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela","aleugim");
        }catch (PDOException $e){
            return false;
        }
        $sql="UPDATE book SET title=:titulo, author=:autor, isbn=:isbn, publicationDate=STR_TO_DATE(:ano_publicacion, '%Y'), numberOfPages=:num_paginas, price=:precio, genre=:genero, publisher=:editorial, language=:idioma, description=:descripcion, cover=:portada WHERE id=:id";
        $sentenciaPreparada=$conexion->prepare($sql);

        $sentenciaPreparada->bindValue(':id', $book->getId());
        $sentenciaPreparada->bindValue(':titulo', $book->getTitle());
        $sentenciaPreparada->bindValue(':autor', $book->getAuthor());
        $sentenciaPreparada->bindValue(':isbn', $book->getIsbn());
        $sentenciaPreparada->bindValue(':ano_publicaion', $book->getPublicationDate()->format('Y'));
        $sentenciaPreparada->bindValue(':num_paginas', $book->getNumberOfPages());
        $sentenciaPreparada->bindValue(':precio', $book->getPrice());
        $sentenciaPreparada->bindValue(':genero', $book->getGenre());
        $sentenciaPreparada->bindValue(':editorial', $book->getPublisher());
        $sentenciaPreparada->bindValue(':idioma', $book->getLanguage());
        $sentenciaPreparada->bindValue(':descripcion', $book->getDescription());
        $sentenciaPreparada->bindValue(':portada', $book->getCover());

        $sentenciaPreparada->execute();

        if($sentenciaPreparada->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
}