<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"              content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
<style>
.warna {
    background-color: blueviolet;
}

.warna-baris {
    background-color: chartreuse;
}
</style>
<!-- i = baris 
j = kolom  -->
<table border="1" cellpadding="10" cellspacing="0">
    <?php  for($i= 1; $i<= 5; $i++): ?>
    <?php if($i % 2 == 0) : ?>
        <tr class="warna">
    <?php else :?>
        <tr class="warna-baris">
    <?php endif;  ?>

        <?php for($j = 1; $j<= 5; $j++): ?>
        <td><?php echo "$i, $j";  ?></td>
        <?php endfor; ?>
        </tr>
    <?php endfor;  ?>
     
        
    </table>
</body>
</html>