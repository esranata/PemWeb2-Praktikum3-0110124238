<?php
    $ns1 = ["id" => 1, "nim" => "0110124238", "UTS" => 90, "UAS" => 89, "Tugas" => 100];
    $ns2 = ["id" => 2, "nim" => "0110124567", "UTS" => 85, "UAS" => 87, "Tugas" => 94];
    $ns3 = ["id" => 3, "nim" => "0110123201", "UTS" => 88, "UAS" => 89, "Tugas" => 98];
    $ns4 = ["id" => 4, "nim" => "0110127891", "UTS" => 90, "UAS" => 96, "Tugas" => 97];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
        <thead> 
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
                </tr>
        </thead>  
        <tbody>
            <?php
                $nomor = 1;
                foreach($ar_nilai as $ns){
                    echo '<tr><td>'.$nomor.'</td>';
                    echo '<td>'.$ns['nim'].'</td>';
                    echo '<td>'.$ns['UTS'].'</td>';
                    echo '<td>'.$ns['UAS'].'</td>';
                    echo '<td>'.$ns['Tugas'].'</td>';
                    $nilai_akhir = ($ns['UTS'] + $ns['UAS']+$ns['Tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                    echo '<tr/>';
                    $nomor++; 
                }
           ?>  
        </tbody>
    </table>     
</body>
</html>