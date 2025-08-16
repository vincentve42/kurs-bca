
<?php 

require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);


use FetchHtml\FetchHtml;
use Kurs\Kurs;

$htmll = new FetchHtml();



$kurs = new Kurs();



?>
<html>
    <head>
        
    </head>
    <body>
        <table>
            <tr>
                <th>Nama Uang</th>
                <th>E-Rate</th>
                <th>TT</th>
                <th>BN</th>
            </tr>
            <tr>
                <th>USD</th>
                <td><?php echo $kurs->buy_usd(0) . "\n"; ?></td>
                <td><?php echo $kurs->buy_usd(1) . "\n"; ?></td>
                <td><?php echo $kurs->buy_usd(2) . "\n"; ?></td>
            </tr>
             
             
        </table>
    </body>
</html>
