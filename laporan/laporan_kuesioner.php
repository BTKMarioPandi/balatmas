<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{

    // Logo
    $this->Image('../img/desa.jpg',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);

    // Title
    $this->Cell(50,10,'PEMERINTAH KOTA PEKANBARU',0,0,'C');
    $this->Ln(5);
    $this->Cell(80);

    $this->Cell(50,10,'KEMENTRIAN DESA',0,0,'C');
    $this->Ln(5);
    $this->Cell(80);
    $this->Cell(50,10,'PEMBANGUNAN DAERAH TERTINGGAL DAN TRANSMIGRASI',0,0,'C');
    $this->Ln(5);
    $this->Cell(80);
    $this->Ln(20);
    $this->Cell(80);

    $this->Cell(50,10,'Laporan Data Kuesioner',0,0,'C');
    $this->Line(10,35,260,35);

    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);

$pdf->Cell(10,7,'No. ',1,0,'C');
$pdf->Cell(20,7,'Nama Pemandu ',1,0,'C');
$pdf->Cell(40,7,'Nama Wacana ',1,0,'C');
$pdf->Cell(30,7,'Nama Peserta ',1,0,'C');
$pdf->Cell(30,7,'Nilai ',1,0,'C');
 
 include "../koneksi.php"; 
        $hasil = mysqli_query($koneksi, "SELECT * FROM kuesioner
                        INNER JOIN pemandu_pelatihan ON kuesioner.id_pemandu = pemandu_pelatihan.id_pemandu
                        INNER JOIN wacana_pelatihan ON kuesioner.no_wacana = wacana_pelatihan.no_wacana
                        INNER JOIN peserta_pelatihan ON kuesioner.id_peserta = peserta_pelatihan.id_peserta ") or die (mysqli_error($koneksi));
        $no=1;
        while($kolom=mysqli_fetch_array($hasil))
        {
                      
    $pdf->SetFont('Times','B',11);
    $pdf->Cell(10,7,$no++,1,0,'L');
    $pdf->Cell(20,7,$kolom['nama'],1,0,'L');
    $pdf->Cell(40,7,$kolom['nama_wacana'],1,0,'L');
    $pdf->Cell(30,7,$kolom['nama_peserta'],1,0,'L');
    $pdf->Cell(30,7,$kolom['nilai'],1,0,'L');
    $pdf->Ln();
    }

  $bln_list = array(
    '01' =>'Januari' ,
    '02' =>'Februari' ,
    '03' =>'Maret' ,
    '04' =>'April' ,
    '05' =>'Mei' ,
    '06' =>'Juni' ,
    '07' =>'Juli' ,
    '08' =>'Agustus' ,
    '09' =>'September' ,
    '10' =>'Oktober' ,
    '11' =>'November' ,
    '12' =>'Desember' ,);

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times','',11);


$pdf->Output();

//
 ?> 