<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<body>
    <h3 class="text-center mt-2"><i class="bi bi-book-half"></i>
Book Lists</h3>

    <table class = "mt-2 table table-bordered table-striped border-secondary">
        <tr>    
            <th>Title</th>
            <th>Author</th>
            <th>Availibility</th>
            <th>Pages</th>
            <th>ISBN</th>
        </tr>
        
    <?php
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
        foreach ($books as $key => $book) {
            echo "<tr>";

            echo "<td>" . $book['title'] . "</td>";
            echo "<td>" . $book['author'] . "</td>";
            echo "<td>" . $book['available'] . "</td>";
            echo "<td>" . $book['pages'] . "</td>";
            echo "<td>" . $book['isbn'] . "</td>";
            echo "</tr>";
        } 
    ?>
    </table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        

        <a href="./newBook.php" class="btn btn-primary mt-2 d-flex justify-content-center" > Add New <i class="bi bi-file-plus"> </i></a>
    </div>

    
</body>
</html>