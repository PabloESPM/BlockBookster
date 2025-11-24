<?php

namespace App\Class;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Book
{
    private UuidInterface $id;
    private string $title;
    private string $author;
    private string $isbn;
    private DateTime $publicationDate;
    private int $numberOfPages;
    private int $price;
    private string $description;
    private string $genre;
    private string $language;
    private string $publisher;
    private string $cover;

}