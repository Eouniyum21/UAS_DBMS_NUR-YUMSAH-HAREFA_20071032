<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Nobk</td>
    <td>Tanggal</td>
    <td>Noref</td>
    <td>Bagian ID</td>
    <td>petugas ID</td>
    <td>Keterangan</td>
</tr>

<?php 
$no=0;
 foreach ($pengeluarannyh as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->nobk_nyh?></td>
    <td><?php echo $row->tanggal_nyh?></td>
    <td><?php echo $row->noref_nyh?></td>
    <td><?php echo $row->bagianid_nyh?></td>
    <td><?php echo $row->petugasid_nyh?></td>
    <td><?php echo $row->keterangan_nyh?></td>
</tr>
<?php
}
?>

</table>