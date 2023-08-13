<?php  
    $title=$_POST["title"];
    $author=$_POST["author"];
    $available=$_POST["available"];
    $pages=$_POST["pages"];
    $isbn=$_POST["isbn"];

    if($title == '' || $author == '' || $available == '' || $pages == '' || $isbn == ''){

        echo 'please fill all values';
        header('Location: ./newBOOK.php');
        exit;
    }
    else{ 
        $bookString = array(
            'title' => $title,
            'author' => $author,
            'available' => $available,
            'pages' => $pages,
            'isbn' => $isbn
        );
        
        $newBook = file_get_contents('books.json');
        $jsonfile = json_decode($newBook);
        
        $jsonfile[] = $bookString ;
        $jsonData = json_encode($jsonfile);
        
        file_put_contents('books.json', $jsonData);
        header('Location: ./booklist.php');
        exit;

exit;   
    }

?>