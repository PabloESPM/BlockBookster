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
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela","aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return $e->getMessage();
        }
        $sql="INSERT INTO book values(:id, :title, :author, :isbn, :publicationDate, :numberOfPages, :price, :genre, :publisher, :languaje, :description, :cover)";
        $sentenciaPreparada=$conexion->prepare($sql);

        $sentenciaPreparada->bindValue(':id', $book->getId());
        $sentenciaPreparada->bindValue(':title', $book->getTitle());
        $sentenciaPreparada->bindValue(':author', $book->getAuthor());
        $sentenciaPreparada->bindValue(':isbn', $book->getIsbn());
        $sentenciaPreparada->bindValue(':publicationDate', $book->getPublicationDate()->format('Y'));
        $sentenciaPreparada->bindValue(':numberOfPages', $book->getNumberOfPages());
        $sentenciaPreparada->bindValue(':price', $book->getPrice());
        $sentenciaPreparada->bindValue(':genre', $book->getGenre());
        $sentenciaPreparada->bindValue(':publisher', $book->getPublisher());
        $sentenciaPreparada->bindValue(':language', $book->getLanguage());
        $sentenciaPreparada->bindValue(':description', $book->getDescription());
        $sentenciaPreparada->bindValue(':cover', $book->getCover());

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
        $sql="SELECT * FROM book WHERE title = :title";
        $sentenciaPreparada=$conexion->prepare($sql);

        $sentenciaPreparada->bindValue(':title', $title);
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
        $sql="UPDATE book SET title=:title, author=:author, isbn=:isbn, publicationDate=STR_TO_DATE(:ano_publicacion, '%Y'), numberOfPages=:numberOfPages, price=:price, genre=:genre, publisher=:publisher, language=:language, description=:descripion, cover=:cover WHERE id=:id";
        $sentenciaPreparada=$conexion->prepare($sql);

        $sentenciaPreparada->bindValue(':id', $book->getId());
        $sentenciaPreparada->bindValue(':title', $book->getTitle());
        $sentenciaPreparada->bindValue(':author', $book->getAuthor());
        $sentenciaPreparada->bindValue(':isbn', $book->getIsbn());
        $sentenciaPreparada->bindValue(':publicationDate', $book->getPublicationDate()->format('Y'));
        $sentenciaPreparada->bindValue(':numberOfPages', $book->getNumberOfPages());
        $sentenciaPreparada->bindValue(':price', $book->getPrice());
        $sentenciaPreparada->bindValue(':genre', $book->getGenre());
        $sentenciaPreparada->bindValue(':publisher', $book->getPublisher());
        $sentenciaPreparada->bindValue(':language', $book->getLanguage());
        $sentenciaPreparada->bindValue(':description', $book->getDescription());
        $sentenciaPreparada->bindValue(':cover', $book->getCover());

        $sentenciaPreparada->execute();

        if($sentenciaPreparada->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
}