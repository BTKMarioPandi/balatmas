<?php
 if (!isset($_SESSION)) {
        session_start();
    }
    if (empty($_SESSION['username_peserta']) AND empty($_SESSION['password_peserta'])) {
        include 'login_admin.php';
    }
    else
    {
		include 'koneksi.php';
		$id = $_POST['id_kus'];
		$nowacana = $_POST['no_wacana']; // Ambil data nowacana dan masukkan ke variabel nowacana
		$idpemandu = $_POST['id_pemandu']; // Ambil data idpemandu dan masukkan ke variabel idpemandu
		$peserta = $_SESSION['id_peserta'];
		$nilai = $_POST['nilai']; // Ambil data nilai dan masukkan ke variabel nilai

		$query = "INSERT INTO kuesioner VALUES";

		$index = 0; // Set index array awal dengan 0
		foreach($id as $dataid){ // Kita buat perulangan berdasarkan wacana sampai data terakhir
			$query .= "('".$dataid."','".$idpemandu[$index]."','".$nowacana[$index]."','".$peserta."','".$nilai[$index]."'),";
			$index++;
		}
		$query = substr($query, 0, strlen($query) - 1).";";


// $queri="INSERT INTO kuesioner
// (id_kuesioner,
// id_pemandu,
// no_wacana,
// id_peserta,
// nilai) 
// VALUES 
// ('',
// '$_POST[id_pemandu]',
// '$_POST[no_wacana]',
// '$_SESSION[id_peserta]',
// '$_POST[nilai]')";
mysqli_query($koneksi,$query);
mysqli_close($koneksi);
echo "<script language='javascript'>alert('Terima Kasih Telah Mengikuti Wacana');location.replace('index.php')</script>"; 
}