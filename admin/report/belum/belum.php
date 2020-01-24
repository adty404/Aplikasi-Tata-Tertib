<?php
require('fpdf.php');

$dbhost = 'localhost'; 
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';         // ini berlaku di xampp
$dbname = 'tata_tertib';

$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

class myPDF extends FPDF {
    function header()
    {
        $this->Image('logotranspar.png',25,2,30);
        $this->SetFont('Arial','B',14);
        $this->Cell(120);
        $this->Cell(30,5,'SEKOLAH MENENGAH KEJURUAN',0,0,'C');
        $this->Ln();
        $this->SetFont('Arial','B',12);
        $this->Cell(120);
        $this->Cell(30,5,'TELEKOMUNIKASI TELESANDI BEKASI',0,0,'C');
        $this->Ln();
        $this->SetFont('Arial','',10);
        $this->Cell(120);
        $this->Cell(30,5,'Kampus: Jl. Mekarsari Raya Gg. Macan - Mekarsari Tambun Selatan 171510',0,0,'C');
        $this->Ln();
        $this->SetFont('Arial','',10);
        $this->Cell(120);
        $this->Cell(30,5,'Telp. 021 - 88332404 Fax.: 021 - 88323429 Email: smktelesandi_bks@yahoo.co.id',0,1,'C');
        $this->Ln(5);
        $this->Cell(278,2,'','B',3,'C');
        $this->Cell(278,2,'','B',3,'C');
        $this->Ln(10);

        $this->SetFont('Arial','B',14);
        $this->Cell(120);
        $this->Cell(30,5,'DATA PELANGGARAN ( BELUM DITINDAKLANJUTI )',0,1,'C');

        $this->Ln(10);
    }

    function Footer()
    {
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial','',8);
        // Print centered page number
        $this->Cell(278,2,'','B',3,'C');
        $this->Cell(0,10,'Bimbingan Konseling SMK Telekomunikasi Telesandi',0,0,'L');
        $this->Cell(-10);
        $this->Cell(0,10,'Halaman '.$this->PageNo()."/{nb}",0,0,'C');
    }

    function headerTable(){
        $this->SetFont('Times', 'B', '12');
        $this->Cell(6, 15, 'No', 1,0,'C');
        $this->Cell(125, 10, 'PELAPOR', 1,0,'C');
        $this->Cell(148, 10, 'TERLAPOR', 1,0,'C');
        $this->SetY(-135.9);
        $this->Cell(6);
        $this->Cell(66, 5, 'Nama', 1,0,'C');
        $this->Cell(21, 5, 'Kelas', 1,0,'C');
        $this->Cell(38, 5, 'Tanggal dan Waktu', 1,0,'C');
        $this->Cell(66, 5, 'Nama', 1,0,'C');
        $this->Cell(21, 5, 'Kelas', 1,0,'C');
        $this->Cell(61, 5, 'Isi Pelanggaran', 1,0,'C');
        $this->Ln();
    }

    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt   =   mysqli_query($db, "SELECT * FROM data_pelanggaran WHERE status = 'N'");
        $no     =   1;
        while($data =   mysqli_fetch_array($stmt)){
            $this->Cell(6,5,$no++,1,0,'C');
            $this->Cell(66,5,$data['nama_pelapor'],1,0,'L');
            $this->Cell(21,5,$data['kelas_pelapor'],1,0,'L');
            $this->Cell(38,5,$data['waktu'],1,0,'L');
            $this->Cell(66,5,$data['nama'],1,0,'L');
            $this->Cell(21,5,$data['kelas'],1,0,'L');
            $this->Cell(61,5,$data['isi'],1,0,'L');
            $this->Ln();
        }
    }

    function kepsek(){
        function tgl_indo($tanggal){
            $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }

        $tanggal    =   tgl_indo(date('Y-m-d'));
        $tanggal_skrg        =   "Bekasi, ".$tanggal."";


        $this->Ln(10);
        $this->Cell(228);
        $this->Cell(0,5,$tanggal_skrg,0,1,'L');
        $this->Cell(228);
        $this->Cell(0,5,'Mengetahui,',0,1,'L');
        $this->Cell(228);
        $this->Cell(0,5,'Kepala Bimbingan Konseling,',0,1,'L');    
    }
    function kepsek2(){
        $this->Ln(25);
        $this->Cell(228);
        $this->SetFont('Times', 'B', '12');
        $this->Cell(0,5,'M.Estty Budilestari',0,1,'L');
        $this->SetFont('Times', 'B', '12');
        $this->Cell(228);
        $this->Cell(0,5,'NPK. 2009 0044',0,1,'L');
    }
}


$pdf = new myPDF();
$pdf->PageNo();
$pdf->AliasNbPages(); 
$pdf->AddPage('L', 'A4', 0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->kepsek();
$pdf->kepsek2();
$pdf->Output();
?>