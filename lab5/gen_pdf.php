 <!doctype html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <link rel="shortcut icon" type="image/png" href="<? echo URL; ?>/favicon.png">
        <title>
           Наталия Баранова ПИ-319
        </title>
	</head>
</html>

 <?/**php  
 function fetch_data()  
 {  
  require_once '../config/connection.php';
      $output = '';  

      $sql = "SELECT * FROM `Фильмы` ORDER BY id ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["id"].'</td>  
                          <td>'.$row["Название"].'</td>  
                          <td>'.$row["Жанр"].'</td>  
                          <td>'.$row["Режиссёр"].'</td>  
                          <td>'.$row["Год выпуска"].'</td>  
                          <td>'.$row["Кассовые сборы, $"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
     require_once('tcpdf/tcpdf_min/tcpdf.php'); 

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 055', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 14);
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">id</th>  
                <th width="20%">Название</th>  
                <th width="10%">Жанр</th>
                <th width="10%">Режиссёр</th>  
                <th width="45%">Год выпуска</th>  
                <th width="10%">Кассовые сборы, $</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      ob_end_clean();
      //$content = iconv('windows-1251', 'UTF-8', $content);
       //$obj_pdf->writeHTMLCell(0, 0, '', '', utf8_decode($html), 0, 1, 0, true, '', true); 
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  */
 ?> 
<?require_once 'engine/connection/connectionStart.php';?> 
<?ob_end_clean();ob_clean();?>
<?require_once 'engine/library/tcpdf/tcpdf.php';?>
<?
    $queryTab = "adv_Фильмы_info";
    $query = "SELECT * FROM $database.$queryTab  ORDER BY $database.$queryTab.id ASC";
    $result = mysqli_query($link, $query) or die("Не могу выполнить запрос!");
    $array = array("№ п/п", "Название фильма", "жанр", "год выпуска", "название зала", "категория", "дата и время начала показа", "количество свободных мест");
    ob_clean();
    error_reporting(E_ALL);
    ob_start();
    $pdf = new TCPDF('l', 'mm', 'A2', true, 'UTF-8');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAuthor('Наталия Баранова ПИ-319');
    $pdf->SetTitle('Фильмы');
    $pdf->SetMargins(20, 30, 20);
    $pdf->SetFont('arial', '', 14, '', true);
    $pdf->AddPage();
    $pdf->SetXY(20, 50);
    $pdf->SetDrawColor(100, 100, 0);
    $pdf->SetTextColor(200, 200, 0);
    $html = '<h1>Фильмы</h1><br>';
    $html .= "<table border='1' width='20%'>";
    $html .= "<tr>";
    for($i = 0; $i < count($array); $i++){
        $html .= "<th width='10%'>$array[$i]</th>";
    }
    $html .= "</tr>";
    while ($row=mysqli_fetch_array($result)){
        $html .= "<tr align='center'>";
        for($i = 0; $i < count($row)/2; $i++){
            $text = $row[$i];
            $html .= "<td>$text</td>";
        }
		$html .= "</tr>";
    }
    
    $html .= "";
    $html .= "";
    $html .= "</table>";
    
    
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
    $pdf->Output('Фильмы.pdf', 'I');
?>
<?require_once 'engine/connection/connectionEnd.php';?>
