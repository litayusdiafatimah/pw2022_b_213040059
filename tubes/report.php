<?php
require '../tubes/functions.php';
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($conn,"SELECT * FROM film join genre on genre.id_genre = film.genre ORDER BY id DESC");
$html = '<center>
        <h2>DAFTAR DATA FILM INDONESIA </h2> </br>
        </center><br><br>';
$html.= '<center><h3 style="margin-top:20px; margin-bottom:20px;">KOTA BANDUNG </h3></center>';
$html.= '<br/>';
$html.= '<br/>';
$html.= '<hr>';

$html .= '<table border="1" width="100%" style="margin-top:40px;border-collapse: collapse;border: 1px solid #ddd;">
 <tr>
 <th style="text-align:center;  padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">No</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Judul</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Genre</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Durasi</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Sutradara</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Pemeran</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td style='text-align:center; font-family: Arial, Helvetica, sans-serif;'>".$no."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['judul']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['nama_genre']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['durasi']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['sutradara']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['pemeran']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('daftar_data_film');
?>