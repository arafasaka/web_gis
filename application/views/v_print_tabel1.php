<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
    <tr>
        <th>#</th>
        <th>Nama Bangunan</th>
       <th>Longitude</th>
       <th>Latitude</th>
     </tr>
     <?php 
    foreach($datas as $b): ?>
                
     <tr>
      <td><?php echo $b->bangunan_id; ?></td>
      <td><?php echo $b->bangunan_nama; ?></td>
      <td><?php echo $b->bangunan_lat; ?></td>
      <td><?php echo $b->bangunan_long; ?></td>
      <td>
    </tr>
<?php endforeach; ?>
</table>
<script type="text/javascript">
    window.print();
    </script>
</body>
</html>