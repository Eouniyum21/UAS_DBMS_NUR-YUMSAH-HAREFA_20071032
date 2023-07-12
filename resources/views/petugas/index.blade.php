<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Petugas ID</td>
    <td>Nama Petugas</td>
    <td>Alamat</td>
    <td>Handphone</td>
    <td>Password</td>
    <td>Level</td>
</tr>

<?php 
$no=0;
 foreach ($petugasnyh as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->petugasid_nyh?></td>
    <td><?php echo $row->namapetugas_nyh?></td>
    <td><?php echo $row->alamat_nyh?></td>
    <td><?php echo $row->handphone_nyh?></td>
    <td><?php echo $row->password?></td>
    <td><?php echo $row->level?></td>
</tr>
<?php
}
?>

</table>