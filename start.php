<?php 
// sintaks php 
// standar output biasanya adalah echo dan print, untuk mencetak variabel, atau print_r khusus array, 
// var_dump untuk melihat isi variabel tersebut

// echo "Shenny Berliana Arminy";
// print_r("Shenny Berliana Arminy");

// var_dump("Shenny Berliana"); 
//  penulisan PHP yang sering digunakan adlaah penulisan PHP di dalam HTML
// variabel di php pake tanda $ 
// variabel tidak boleh diawali dengan angka tapi boleh mengandung angka. 
// interpolasi adalah apakah dalam string terdapat variabel atau tidak. 
// penggabuan string / concatenation / concat dengan menggunakan titik (.)
// $nama = "Shenny Berliana";
// $nama_depan = "Shenny";
// $nama_belakang = "Berliana"; 
// echo $nama_depan ." ". $nama_belakang;
// pengulangan b
for($i=1; $i<=5; $i++){
    for($j=1; $j<=$i; $j++){ #pada keadaan $i dia berhenti.
        echo"*";
        if($j<$i){ #jika var j lebih kecil dari var i, maka keadaannya echo 
            echo" ";
        }
    }
     echo"<br>";
    }

 ?>
