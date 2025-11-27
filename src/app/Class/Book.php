<?php

namespace App\Class;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use App\Model\BookModel;
use \DateTime;
use App\Enum\UserType;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class Book
{
    private UuidInterface $id;
    private string $title;
    private string $author;
    private string $isbn;
    private DateTime $publicationDate;
    private int $numberOfPages;
    private float $price;
    private string $description;
    private string $genre;
    private string $language;
    private string $publisher;
    private string $cover;
    private bool $activo = true; // por defecto activo
    private bool $destacado = false; // por defecto no destacado


    public function __construct(UuidInterface $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    // ----Geters----
    public function getId(): UuidInterface{
        return $this->id;
    }
    public function getTitle(): string{
        return $this->title;
    }
    public function getAuthor(): string{
        return $this->author;
    }
    public function getIsbn(): string{
        return $this->isbn;
    }
    public function getPublicationDate(): DateTime{
        return $this->publicationDate;
    }
    public function getNumberOfPages(): int{
        return $this->numberOfPages;
    }
    public function getPrice(): float{
        return $this->price;
    }
    public function getDescription(): string{
        return $this->description;
    }
    public function getGenre(): string{
        return $this->genre;
    }
    public function getLanguage(): string{
        return $this->language;
    }
    public function getPublisher(): string{
        return $this->publisher;
    }
    public function getCover(): string{
        return $this->cover;
    }
    public function getActivo(): bool {
        return $this->activo;
    }
    public function getDestacado(): bool {
        return $this->destacado;
    }

    //----Seters----
    public function setId(Uuid $id): Book{
        $this->id = $id;
        return $this;
    }
    public function setTitle(string $title): Book{
        $this->title = $title;
        return $this;
    }
    public function setAuthor(string $author): Book{
        $this->author = $author;
        return $this;
    }
    public function setIsbn(string $isbn): Book{
        $this->isbn = $isbn;
        return $this;
    }
    public function setPublicationDate(\DateTime $publicationDate): Book{
        $this->publicationDate = $publicationDate;
        return $this;
    }
    public function setNumberOfPages(int $numberOfPages): Book{
        $this->numberOfPages = $numberOfPages;
        return $this;
    }
    public function setPrice(float $price): Book{
        $this->price = $price;
        return $this;
    }
    public function setDescription(string $description): Book{
        $this->description = $description;
        return $this;
    }
    public function setGenre(string $genre): Book{
        $this->genre = $genre;
        return $this;
    }
    public function setLanguage(string $language): Book{
        $this->language = $language;
        return $this;
    }
    public function setPublisher(string $publisher): Book{
        $this->publisher = $publisher;
        return $this;
    }
    public function setCover(string $cover): Book{
        $this->cover = $cover;
        return $this;
    }
    public function setActivo(bool $activo): Book{
        $this->activo = $activo;
        return $this;
    }
    public function setDestacado(bool $destacado): Book{
        $this->destacado = $destacado;
        return $this;
    }

    //----Funciones Estaticas ----
    public static function createFromArray(array $bookData): Book{
        if(!key_exists('id', $bookData)){
            $bookData['id'] = Uuid::uuid4()->toString();
        }
        $libro = new Book(
            Uuid::fromString($bookData['id']),
            $bookData['titulo'],
        );
        $libro->setTitle($bookData['titulo']);
        $libro->setAuthor($bookData['autor']);
        $libro->setIsbn($bookData['isbn']);
        $libro->setPublicationDate(DateTime::createFromFormat('Y',$bookData['ano_publicacion']));
        $libro->setNumberOfPages($bookData['num_paginas']);
        $libro->setPrice((float)$bookData['precio']);
        $libro->setDescription($bookData['descripcion']);
        $libro->setGenre($bookData['genero']);
        $libro->setLanguage($bookData['idioma']);
        $libro->setPublisher($bookData['editorial']);
        $libro->setCover($bookData['portada']);
        return $libro;
    }
    public static function editFromArray(Book $title, array $bookData): Book{
        $libro->setTitle($bookData['titulo']??$title->getTitle());
        $libro->setAuthor($bookData['autor']??$title->getAuthor());
        $libro->setIsbn($bookData['isbn']??$title->getIsbn());
        $libro->setPublicationDate(DateTime::createFromFormat('Y',$bookData['ano_publicacion']));
        $libro->setNumberOfPages($bookData['num_paginas']);
        $libro->setPrice($bookData['precio']??$title->getPrice());
        $libro->setDescription($bookData['descripcion']??$title->getDescription());
        $libro->setGenre($bookData['genero']??$title->getGenre());
        $libro->setLanguage($bookData['idioma']??$title->getLanguage());
        $libro->setPublisher($bookData['editorial']??$title->getPublisher());
        $libro->setCover($bookData['portada']??$title->getCover());
        return $libro;
    }
    public static function validateBookRegister(array $bookData):array|true{
        try{
            v::key('title', v::stringType())
                ->key('author', v::stringType())
                ->key('isbn', v::stringType())
                ->key('publicationDate', v::date('Y'), false)
                ->key('numberOfPages', v::intVal())
                ->key('price', v::floatVal())
                ->key('description', v::stringType())
                ->key('genre', v::in(['ficcion','no_ficcion','misterio','thriller','romance','fantasia','ciencia_ficcion','terror','biografia','historia','poesia','ensayo','infantil','juvenil','autoayuda']))
                ->key('language', v::in(['es','in','fr','al','it','pt','ca','otros']))
                ->key('publisher', v::stringType())
                ->key('cover', v::stringType())
                ->assert($bookData);
        }catch (NestedValidationException $errores){
            return $errores->getMessages();
        }
        return true;
    }
    public static function validateBookUpdate(array $bookData):array|true{
        try{
            v::key('id', v::uuid()->notEmpty())
                ->key('title', v::stringType())
                ->key('author', v::stringType())
                ->key('isbn', v::stringType())
                ->key('publicationDate', v::date('Y'), false)
                ->key('numberOfPages', v::intVal())
                ->key('price', v::floatVal())
                ->key('description', v::stringType())
                ->key('genre', v::in(['ficcion','no_ficcion','misterio','thriller','romance','fantasia','ciencia_ficcion','terror','biografia','historia','poesia','ensayo','infantil','juvenil','autoayuda']))
                ->key('language', v::in(['es','in','fr','al','it','pt','ca','otros']))
                ->key('publisher', v::stringType())
                ->key('cover', v::stringType())
                ->assert($bookData);
        }catch (NestedValidationException $errores){
            return $errores->getMessages();
        }
        return true;
    }
}