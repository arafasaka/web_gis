<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
    <tr>
        <th>ID Dokumentasi</th>
        <th>Kode Bidang</th>
       <th>Gambar Dokumentasi</th>
       <th>Gambar</th>
     </tr>
     <?php 
    foreach($datas as $b): ?>
                
     <tr>
    <td><?php echo $b->dokumentasi_id; ?></td>
    <td><?php echo $b->bidang_kode; ?></td>
    <td><?php echo $b->dokumentasi_gambar; ?></td>
    <td><img src="<?php echo base_url(); ?>/assets/uploads/<?php echo $b->dokumentasi_gambar; ?>" width="90" height="60"></td>

    </tr>
<?php endforeach; ?>
</table>
<script type="text/javascript">
    window.print();
    </script>
</body>
</html>