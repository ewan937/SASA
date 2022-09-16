<?php
	include 'includes/session.php';

	function generateRow($conn){
		$contents = '';
		
		 $sql = "SELECT *, costumer.id AS cosid FROM costumer WHERE status = 'NOT FINISH' order by firstname ASC";

		$query = $conn->query($sql);
		$total = 0;
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				
				<td>".$row['firstname'].", ".$row['lastname']."</td>
				<td>".$row['address']."</td>
				<td>".$row['branch']."</td>
				<td>".$row['plan']."</td>
				<td>".$row['status']."</td>
				<td>".$row['macaddress']."</td>




			
			</tr>
			";
		}

		return $contents;
	}

	require_once('../tcpdf/tcpdf.php');  
    $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-7', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('SOLID ALLIANCE PRINT PAGE');  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 10);  
    $pdf->AddPage();

    $content = '';  
    $content .= '
      	<h2 align="center">SOLID ALLIANCE CABLE TV CORP</h2>
      	<h4 align="center">COSTUMER NOT FINISH LIST</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
           		
                <th width="20%" align="center"><b>Costumer Name</b></th>
				<th width="20%" align="center"><b>Address</b></th> 
				<th width="10%" align="center"><b>Branch</b></th> 
				<th width="15%" align="center"><b>Plan</b></th> 
				<th width="15%" align="center"><b>Status</b></th> 
				<th width="17%" align="center"><b>Macaddress</b></th> 
           </tr>  
      ';  
    $content .= generateRow($conn); 
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('costumernotfinish.pdf', 'I');

?>