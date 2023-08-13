
<?php
    // $dbConfig = Config::getInstance()->get('db');
    require 'vendor/autoload.php';

    
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=bookstore','root','');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    $books = $db->query('SELECT * FROM book ORDER BY title');
    $html = '<table>
    <thead>
        <tr>
            <th>Book Title</th>
            <th>Author</th>
            <th>Availability</th>
            <th>Pages</th>
            <th>ISBN</th>
        </tr>
    </thead>';
    foreach ($books as $book) {
        $html .= '
            <tr>
                <td>' . $book['title'] . '</td>
                <td>' . $book['author'] . '</td>
                <td>' . $book['availability'] . '</td>
                <td>' . $book['pages'] . '</td>
                <td>' . $book['isbn'] . '</td>
            </tr>
        ';
    }
    $html.= '</table>';
    // echo $html;
    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream("table");
    ?>
    

