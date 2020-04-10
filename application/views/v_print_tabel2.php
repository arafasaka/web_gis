<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
    <tr>
        <th>Kode Bidang</th>
        <th>Nama Bidang</th>
       <th>Keterangan Bidang</th>
       <th>Gambar Bidang</th>
     </tr>
     <?php 
    foreach($datas as $b): ?>
                
     <tr>
      <td><?php echo $b->bidang_kode; ?></td>
      <td><?php echo $b->bidang_nama; ?></td>
      <td><?php echo $b->bidang_keterangan; ?></td>
      <td><?php echo $b->bidang_gambar; ?></td>
      <td>
    </tr>
<?php endforeach; ?>
</table>
<script type="text/javascript">
    window.print();
    </script>
</body>
</html>