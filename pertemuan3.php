<?php 
//  pengulangan  jadi pada studi kasus dibawah ini, $i di inisialisasi terlebih dahulu dengan mengawali dengan 0 karna ingat pada kotak-kotak pelajaran pak dian perhitungan array dimulai dari 0, lalu diberi terminasi yaitu < 5, lalu diberi increment ditandai dengan ++, jadi ingat yang diterangkan pak dhika dia looping terlebih dahulu baru mengerjakan yang lain 
// for( $i = 0; $i< 5; $i++) { 
//     echo "hello world! <br> ";
// } 

// pada while inisialisasi terjadi saat while ( inisialisasi), lalu terminasi berada di awal atau atas while diakhiri dengan increment yang berada pada setelah echo. (cek dahulu apakah kondisi tersebut true lalu dijalankan) 
// $i = 0;
// while( $i < 5){
//     echo "Hello world! <br>";
// $i++;
// }

// do while (jalankan terlebih dahulu baru dicek keadaannya. do while dikerjakan sekali sedangkan while tidak )
$i = 10;
do {
echo "Hello World! <br>";
$i++;
} while( $i < 5 )
 ?>

 <table border="1" cellpadding="10" cellspacing="0">
        
       <?php  
      for ( $i = 1; $i <= 3; $i++) {
             echo "<tr>";
             for ( $j = 1; $j <= 5; $j++) {
                 echo "<td> $i, $j </td>";
             }
             echo "</tr>";
         }
          ?>

     <?php for($i = 1; $i<= 3; $i++) : ?>
     <tr>
     <?php for($j = 1; $j<= 5; $j++) : ?>
     <td> <?php echo "$i, $j";  ?></td>
     <?php  endfor; ?>
     </tr>
     <?php  endfor; ?>      


for($s= 1; $s<=6; $s++){
                for($r=1; $r<=$s; $r++){
                    echo"*";
                   if($r<$s){
                       echo " ";
                   }
                }
          echo"<br>";
        }
    for($s= 1; $s<=6; $s++){
                for($r=5; $s<=$r; $r--){
                    echo"*";
                   if($s<$r){
                       echo " ";
                   }
                }
          echo"<br>";
        }     