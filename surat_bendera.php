<?php
header('Content-type: application/pdf');
include 'koneksidatabase.php';
require('fpdf/fpdf.php');
$id=$_GET['id'];



   $sql="select * from surat where no='$id' ";
    $hasil=mysqli_query($con,$sql);
    
	while ($data=mysqli_fetch_assoc($hasil)) {
    	$tanggal = $data['tanggal'];
		$no = $data['no'];
		$hal = $data['hal'];
		$lampiran = $data['lampiran'];
		$kepada = $data['kepada'];
		$ttd = $data['ttd'];
    
    }

$pdf = new FPDF("P","cm","A4");
$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',14);
$pdf->Image('logodoscom.png',2,0.4,1.5);
//$pdf->Image('../logo/malasngoding.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(13,0.5,'DINUS OPENSOURCE COMMUNITY',0,'C');
$pdf->SetX(4);
$pdf->MultiCell(13,0.5,'FAKULTAS ILMU KOMPUTER',0,'C');    
//$pdf->SetFont('Arial','B',14);
$pdf->SetX(4);
$pdf->MultiCell(13,0.5,'UNIVERSITAS DIAN NUSWANTORO',0,'C');
$pdf->SetX(4);
$pdf->MultiCell(13,0.5,'website : www.doscom.org email : sekretariat@doscom.org',0,'C');
$pdf->Line(1,3.1,20,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,20,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,0.7,"Semarang, ".$tanggal,0,0,'R');
$pdf->ln(1);
$pdf->MultiCell(15,0.5,'No Surat : '.$no.'/ReleaseParty/VI/2017',0,'L');
$pdf->MultiCell(15,0.5,'Hal       	: '.$hal,0,'L');
$pdf->MultiCell(15,0.5,'Lampiran	: '.$lampiran,0,'L');
$pdf->ln(1);
$pdf->MultiCell(15,0.5,'Yth  '.$kepada,0,'L');
$pdf->MultiCell(5,0.5,'Di tempat',0,'L');
$pdf->ln(1);
$pdf->MultiCell(5,0.5,'Dengan hormat,  ',0,'L');
//$pdf->SetX(4);
//$pdf->SetTextColor(255,255,255);
$txt="																			";
//$pdf->SetFont('Arial','',12);
//$pdf->SetTextColor(0,0,0);
$txt .= "Sehubungan dengan akan diadakannya Seminar Nasional Release Party TeaLinuxOS 9 Open Source dan Kehidupan oleh Dinus Open Source Community (DOSCOM), kami atas nama panitia bermaksud memohon izin untuk meminjam bendera Universitas Dian Nuswantoro sebagai perlengkapan pada acara tersebut yang akan dilaksanakan pada :";
//$pdf->Cell()
$pdf->MultiCell(0,0.5,$txt,0,'J',0); 
$pdf->SetX(4);
$txt = "Hari/Tanggal   : Sabtu, 13 Mei 2017";
$pdf->MultiCell(0,1.0,$txt,0,'J',0,15);
$pdf->SetX(4);
$txt = "Waktu            : 07.00 s/d 13.00 WIB";
$pdf->MultiCell(0,1.0,$txt,0,'J',0,15);
$pdf->SetX(4);
$txt = "Tempat           : Astoria Ballroom Hotel Dafam Jl. Imam Bonjol 188 Semarang";
$pdf->MultiCell(0,1.0,$txt,0,'J',0,15);
$txt = "Demikian surat permohonan ini kami sampaikan. Atas perhatian Bapak/Ibu kami ucapkan terima kasih.";
$pdf->MultiCell(0,0.5,$txt,0,'J',0,15); 
$pdf->ln(3);
$pdf->MultiCell(0,0.5,'Hormat kami 		',0,'R');
$pdf->MultiCell(0,0.5,'Ketua Pelaksana',0,'R');
$pdf->ln(2);
$pdf->MultiCell(0,0.5,''.$ttd,0,'R');

$pdf->Output("surat_bendera","I");
?>