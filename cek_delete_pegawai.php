<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_Pegawai.php';
// Membuat Object dari Class pegawai
$pegawai = new Controller_Pegawai();
$GetPegawai = $pegawai->GetData_Where(base64_decode($_GET['nip']));
?>



<?php
    foreach($GetPegawai as $Get){
?>

<h1>Apakah Anda yakin akan Menghapus Data ini ? </h1>
        <!-- <h2>CRUD and CSRF</h2>
        <h3>Table Pegawai</h3> <h3><a href="View_post_pegawai.php">Add Data</a></h3> -->


         
                        <tr>
                           
                            <td>
                                <a href="../Views/View_pegawai.php?nip=<?php echo base64_encode($Get['nip']) ?>">Kembali</a>
                                <a href="../Config/Routes.php?function=delete_pegawai&nip=<?php echo $Get['nip'] ?>">Delete</a>

<?php
    }
?>