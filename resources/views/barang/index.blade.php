<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Barang ID</td>
    <td>Nama Barang</td>
    <td>Satuan</td>
    <td>Harga</td>
    <td>Kategori ID</td>
</tr>

<?php 
$no=0;
 foreach ($barangnyh as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->barangid_nyh?></td>
    <td><?php echo $row->namabarang_nyh?></td>
    <td><?php echo $row->satuan_nyh?></td>
    <td><?php echo $row->harga_nyh?></td>
    <td><?php echo $row->kategiriid_nyh?></td>
</tr>
<?php
}
?>

</table>