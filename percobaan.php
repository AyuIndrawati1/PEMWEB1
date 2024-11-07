<!DOCTYPE html>
<html>
    <head>
        <title>Contoh list dengan PHP</title>
    </head>
    <body>
    <h2>Daftar Absensi Mahasiwa</h2>
        <ol>
            <?php
                for ($i=1; $i <=5; $i++)
            {
                echo "<li> Mahasiswa ke-$i</li>";
            }
            
                echo "Hello, world";
                echo "<br />";
            
                $andi="Andi";
                echo $andi;
                echo "<br />";
            
                $i="pemrograman";
                $nama="ayu";
                $Umur="19";
                $_lokasi_memori="dokumen";
                $ANGKA_MAKSIMUM="2";
                echo $i;
                echo $nama;
                echo $Umur;
                echo $_lokasi_memori;
                echo $ANGKA_MAKSIMUM;
                echo "<br />";

                $a="Saya Sedang belajar PHP";
                $b=5;
                print $a;
                echo $b;
                echo "<br />";
            
                $a=5;
                $b="Sedang belajar PHP $a";
                echo $b;
                echo "<br />";
            
                $umur=21;
                $harga=15000;
                $rugi=-50000;
                echo $umur;
                echo "<br />";
                echo $harga;
                echo "<br />";
                echo $rugi;
                echo "<br />";
            
                $a=14;
                $b= 16;
                $c= $a + $b;
                echo $c;

                $d=$a * $b;
                echo $d;
                echo "<br />";
            
                $angka_float1=0.78;
                $angka_float2= 14.99;
                $angka_scientific1=0.314E1;
                $angka_scientific2= 0.3365E-3;
                echo $angka_float1;
                echo "<br />";
                echo $angka_float2;
                echo "<br />";
                echo $angka_scientific1;
                echo "<br />";
                echo $angka_scientific2;
                echo "<br />";
            
                $a=10.66;
                $b=12.4;
                $c=$a + $b;
                echo $c;  

                $d=$a/ $b;
                echo $d;
                echo"<br />";
            
                $string1="Ini adalah string sederhana";
                $string2="Ini adalah string ynag bisa memiliki beberapa baris";
                $string3= 'Dia berkata: "I\'ll be back"';

                echo $string1; echo"<br />";
                echo $string2; echo "<br />";
                echo $string3; echo "<br />";
                echo "<br />";
            
                $benar=true;
                $salah=false;
                echo "benar=$benar, salah=$salah";
                echo "<br />";
            
                $hasil1= -3;
                $hasil2= 3+5;
                $hasil3= 8-4.5;
                $hasil4= 2*5;
                $hasil5= 3+8/5-3;
                $hasil6= 10%4;
                echo "$hasil1:"; var_dump( $hasil1);
                echo "<br \>";
                echo "$hasil2:"; var_dump( $hasil2);
                echo "<br \>";
                echo "$hasil3:"; var_dump( $hasil3);
                echo "<br \>";
                echo "$hasil4:"; var_dump( $hasil4);
                echo "<br \>";
                echo "$hasil5:"; var_dump( $hasil5);
                echo "<br \>";
                echo "$hasil6:"; var_dump( $hasil6);
            ?>
        </ol>
    </body>
</html>