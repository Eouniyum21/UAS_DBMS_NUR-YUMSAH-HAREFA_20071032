<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Bagian ID</td>
    <td>Nama Bagian</td>
    <td>Kepala Bagian</td>
    <td>telp</td>
</tr>

<?php 
$no=0;
 foreach ($bagiannyh as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->bagianid_nyh?></td>
    <td><?php echo $row->namabagian_nyh?></td>
    <td><?php echo $row->kepalabagian_nyh?></td>
    <td><?php echo $row->telp_nyh?></td>
</tr>
<?php
}
?>

</table>