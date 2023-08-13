<?php  
    $title=$_POST["title"];
    $author=$_POST["author"];
    $available=$_POST["available"];
    $pages=$_POST["pages"];
    $isbn=$_POST["isbn"];


    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=bookstore','root','');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    $bookString = array(
        'title' => $title,
        'author' => $author,
        'available' => $available,
        'pages' => $pages,
        'isbn' => $isbn
    );
    $query = <<<SQL
    INSERT INTO book (isbn, title, author, pages, availability)
    VALUES ("$isbn","$title", "$author", "$pages", "$available")
    SQL;
    echo $query;
    $result = $db->exec($query);
    var_dump($result); // false
    $error = $db->errorInfo()[2];
    var_dump($error); // Duplicate entry '9788187981954' for key 'isbn'


    header('Location: ./booklist.php');
    exit;

?>