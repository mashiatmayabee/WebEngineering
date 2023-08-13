<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4 class = "mt-3 p-2">*Please fill-out all the fields</h4>
        <form action="submit.php" method="post">  
            <div class="mb-3 row mt-3">
            <label for="title"class="col-sm-2 col-form-label">Title of the book</label>
            <div class="col-sm-10">
            <input type="text" name="title" class="form-control" id="title">
            </div>
            
            <div class="mb-3 row mt-3">
            <label for="author"class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
            <input type="text" name="author" class="form-control" id="author">
            </div>

            <div class="input-group mb-3 mt-3 row">
                <label class="input-group-text btn btn-primary col-sm-2" for="abailable">Availability</label>
                <select class="form-select col-sm-10" name = "available" id="available">
                    <option selected>Choose...</option>
                    <option value="1">True</option>
                    <option value=" ">False</option>
                </select>
            </div>
            
            <div class="mb-3 mt-3 row">
            <label for="pages"class="col-sm-2 col-form-label">Number of Pages</label>
            <div class="col-sm-10">
            <input type="text" name="pages" class="form-control" id="pages">
            </div>
            
            <div class="mb-3 mt-3 row">
            <label for="isbn"class="col-sm-2 col-form-label">ISBN</label>
            <div class="col-sm-10">
            <input type="text" name="isbn" class="form-control" id="isbn">
            </div>
            <input class = "btn btn-primary mt-3" type="submit" value="submit"/>  
        </form>  
    </div>
    
  </div>
</body>
</html>
