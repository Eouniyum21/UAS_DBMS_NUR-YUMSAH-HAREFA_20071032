<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>ID</td>
    <td>Nobk</td>
    <td>Barang ID</td>
    <td>Jumlah</td>
</tr>

<?php 
$no=0;
 foreach ($pengeluaranitemnyh as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->id_nyh?></td>
    <td><?php echo $row->nobk_nyh?></td>
    <td><?php echo $row->barangid_nyh?></td>
    <td><?php echo $row->jumlah_nyh?></td>
</tr>
<?php
}
?>

</table>