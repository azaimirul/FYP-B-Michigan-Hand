<?php
include("domain1.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michigan</title>

    <style>
        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        p {
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <h1><label>Michigan-Hand Outcomes Analysis</label></h1>
        <h2><label>Better Hand Health For Future</label></h2>


        <p><label> Usezname: </label> </p>
        <p> <input type="text" name="username"> <br></p>
        <p> <label>Password: </label> </p>
        <p> <input type="password" name="password"> <br> </p>
        <p> <input type="submit" name="login" value="Log in"> </p>

        <br>
        <!-- DOMAIN 1: FUNCTION SEGMENT CODE-->
        <label> Penilaian Tangan dalam Dimensi 1: Fungsi </label> <br>
        <label> Soalan berikut merujuk FUNGSI tangan/pergelangan tangan anda PADA MINGGU LEPAS. </label> <br>
        <label> Sila tandakan satu jawapan untuk setiap soalan. </label> <br>
        <label> A. Soalan berikut merupakan tangan/pergelangan tangan kanan anda </label> <br>
        <label>1. Secara keseluruhan, sebaik manakah tangan KANAN anda berfungsi? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <label>2. Sebaik manakah jari KANAN anda boleh digerakkan? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <label>3. Sebaik manakah pergelangan tangan KANAN anda boleh digerakkan? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <label>4. Sekuat manakah tangan KANAN anda? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <label>5. Bagaimanakah deria (rasa) pada tangan KANAN anda? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <label> B. Soalan berikut merupakan tangan/pergelangan tangan kanan anda </label> <br>
        <label>1. Secara keseluruhan, sebaik manakah tangan KIRI anda berfungsi? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>

        <br>

        <label>2. Sebaik manakah jari KIRI anda boleh digerakkan? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <label>3. Sebaik manakah pergelangan tangan KIRI anda boleh digerakkan? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <label>4. Sekuat manakah tangan KIRI anda? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <label>5. Bagaimanakah deria (rasa) pada tangan KIRI anda? </label> <br>

        <input type="radio" name="selection" value="Sangat Baik">
        Sangat Baik <br>
        <input type="radio" name="selection" value="Baik">
        Baik <br>
        <input type="radio" name="selection" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <input type="submit" name="submit" value="submit"> <br> <br>

        <!-- DOMAIN 2: DAILY LIVING SEGMENT CODE-->
        <label> Penilaian Tangan dalam Dimensi 2: KERJA SEHARIAN </label> <br>
        <label> Soalan berikut merujuk keupayaan tangan anda untuk melakukan KERJA SEHARIAN PADA MINGGU LEPAS. </label> <br>
        <label> Sila tandakan satu jawapan untuk setiap soalan. </label> <br>
        <label> A. Sejauh manakah anda mengalami kesukaran untuk melakukan aktiviti yang berikut menggunakan TANGAN KANAN anda? </label> <br>
        <label>1. Memusing tombol pintu </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>2. Mengutip duit syiling </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>3. Memegang segelas air </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>4. Memutar Kunci </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>5. Memegang kuali </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label> B. Sejauh manakah anda mengalami kesukaran untuk melakukan aktiviti yang berikut menggunakan TANGAN KIRI anda? </label> <br>
        <label>1. Memusing tombol pintu </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>2. Mengutip duit syiling </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>3. Memegang segelas air </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>4. Memutar Kunci </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>5. Memegang kuali </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label> C. Sejauh manakah anda mengalami kesukaran untuk melakukan aktiviti yang berikut menggunakan KEDUA-DUA TANGAN anda? </label> <br>
        <label>1. Membuka balang </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>2. Membutangkan kemeja/blaus </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>3. Makan menggunakan pisau/garfu </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>4. Membawa beg barang runcit </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>5. Mencuci pinggan mangkuk </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>6. Mencuci rambut </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <label>7. Mengikat tali kasut/simpulan </label> <br>

        <input type="radio" name="selection1" value="Tidak Sukar">
        Tidak Sukar <br>
        <input type="radio" name="selection1" value="Sedikit Sukar">
        Sedikit Sukar <br>
        <input type="radio" name="selection1" value="Agak Sukar">
        Agak Sukar <br>
        <input type="radio" name="selection1" value="Serdahana Sukar">
        Srdahana Sukar <br>
        <input type="radio" name="selection1" value="Sangat Sukar">
        Sangat Sukar <br>
        <br>

        <input type="submit" name="submit1" value="submit1"> <br> <br>

        <!-- DOMAIN 3: WORK SEGMENT CODE-->
        <label> Penilaian Tangan dalam Dimensi 3: KERJA BIASA </label> <br>
        <label> Soalan berikut merujuk keupayaan tangan anda untuk melakukan KERJA BIASA (termasuk kerja rumah dan kerja sekolah) PADA 4 MINGGU LEPAS. </label> <br>
        <label> Sila tandakan satu jawapan untuk setiap soalan. </label> <br>
        <label> 1. Berapa kerapkah anda tidak dapat melakukan kerja </label> <br>
        <label> kerana masalah pada tangan/pergelangan tangan anda? </label> <br>

        <input type="radio" name="selection2" value="Selalu">
        Selalu <br>
        <input type="radio" name="selection2" value="Kerap">
        Kerap <br>
        <input type="radio" name="selection2" value="Kadangkala">
        Kadangkala <br>
        <input type="radio" name="selection2" value="Jarang Sekali">
        Jarang Sekali <br>
        <input type="radio" name="selection2" value="Tidak Pernah">
        Tidak Pernah <br>
        <br> <br>

        <label> 2. Berapa kerapkah anda perlu memendekkan hari kerja </label> <br>
        <label> kerana masalah pada tangan/pergelangan tangan anda? </label> <br>

        <input type="radio" name="selection2" value="Selalu">
        Selalu <br>
        <input type="radio" name="selection2" value="Kerap">
        Kerap <br>
        <input type="radio" name="selection2" value="Kadangkala">
        Kadangkala <br>
        <input type="radio" name="selection2" value="Jarang Sekali">
        Jarang Sekali <br>
        <input type="radio" name="selection2" value="Tidak Pernah">
        Tidak Pernah <br>
        <br> <br>

        <label> 3. Berapa kerapkah anda perlu berehat semasa bekerja </label> <br>
        <label> kerana masalah pada tangan/pergelangan tangan anda? </label> <br>

        <input type="radio" name="selection2" value="Selalu">
        Selalu <br>
        <input type="radio" name="selection2" value="Kerap">
        Kerap <br>
        <input type="radio" name="selection2" value="Kadangkala">
        Kadangkala <br>
        <input type="radio" name="selection2" value="Jarang Sekali">
        Jarang Sekali <br>
        <input type="radio" name="selection2" value="Tidak Pernah">
        Tidak Pernah <br>
        <br> <br>

        <label> 4. Berapa kerapkah kerja anda kurang sempurna </label> <br>
        <label> kerana masalah pada tangan/pergelangan tangan anda? </label> <br>

        <input type="radio" name="selection2" value="Selalu">
        Selalu <br>
        <input type="radio" name="selection2" value="Kerap">
        Kerap <br>
        <input type="radio" name="selection2" value="Kadangkala">
        Kadangkala <br>
        <input type="radio" name="selection2" value="Jarang Sekali">
        Jarang Sekali <br>
        <input type="radio" name="selection2" value="Tidak Pernah">
        Tidak Pernah <br>
        <br> <br>

        <label> 5. Berapa kerapkah anda mengambil masa yang lebih untuk melakukan tugasan dalam kerja </label> <br>
        <label> kerana masalah pada tangan/pergelangan tangan anda? </label> <br>

        <input type="radio" name="selection2" value="Selalu">
        Selalu <br>
        <input type="radio" name="selection2" value="Kerap">
        Kerap <br>
        <input type="radio" name="selection2" value="Kadangkala">
        Kadangkala <br>
        <input type="radio" name="selection2" value="Jarang Sekali">
        Jarang Sekali <br>
        <input type="radio" name="selection2" value="Tidak Pernah">
        Tidak Pernah <br>
        <br> <br>

        <input type="submit" name="submit2" value="submit2"> <br> <br>

        <!-- DOMAIN 4: PAIN SEGMENT CODE-->
        <label> Penilaian Tangan dalam Dimensi 4: Kesakitan </label> <br>
        <label> Soalan berikut merujuk TAHAP KESAKITAN yang anda alami pada tangan/pergelangan tangan PADA MINGGU LEPAS. </label> <br>
        <label> Sila tandakan satu jawapan untuk setiap soalan. </label> <br>

        <label>1. Berapa kerapkah anda mengalami kesakitan pada tangan/pergelangan tangan anda? </label> <br>

        <input type="radio" name="selection3" value="Selalu">
        Selalu <br>
        <input type="radio" name="selection3" value="Kerap">
        Kerap <br>
        <input type="radio" name="selection3" value="Kadangkala">
        Kadangkala <br>
        <input type="radio" name="selection3" value="Jarang Sekali">
        Jarang Sekali <br>

        <!-- SKIP THE DOMAIN 4 IF THIS ANSWER IS SELECTED-->
        <input type="radio" name="selection3" value="Tidak Pernah">
        Tidak Pernah <br>
        <br>

        <label>2. Sila terangkan kesakitan yang anda alami pada tangan/pergelangan tangan anda </label> <br>

        <input type="radio" name="selection3" value="Sangat Ringan">
        Sangat Ringan <br>
        <input type="radio" name="selection3" value="Ringan">
        Ringan <br>
        <input type="radio" name="selection3" value="Serdahana">
        Serdahana <br>
        <input type="radio" name="selection3" value="Teruk">
        Teruk <br>
        <input type="radio" name="selection3" value="Sangat Teruk">
        Sangat Teruk <br>
        <br>

        <label>3. Berapa kerapkah kesakitan pada tangan/pergelangan tangan mengganggu tidur anda? </label> <br>

        <input type="radio" name="selection3" value="Selalu">
        Selalu <br>
        <input type="radio" name="selection3" value="Kerap">
        Kerap <br>
        <input type="radio" name="selection3" value="Kadangkala">
        Kadangkala <br>
        <input type="radio" name="selection3" value="Jarang Sekali">
        Jarang Sekali <br>
        <input type="radio" name="selection3" value="Tidak Pernah">
        Tidak Pernah <br>
        <br>

        <label>4. Berapa kerapkah kesakitan pada tangan/pergelangan tangan mengganggu aktiviti harian anda (seperti makan atau mandi)? </label> <br>

        <input type="radio" name="selection3" value="Selalu">
        Selalu <br>
        <input type="radio" name="selection3" value="Kerap">
        Kerap <br>
        <input type="radio" name="selection3" value="Kadangkala">
        Kadangkala <br>
        <input type="radio" name="selection3" value="Jarang Sekali">
        Jarang Sekali <br>
        <input type="radio" name="selection3" value="Tidak Pernah">
        Tidak Pernah <br>
        <br>

        <label>5. Berapa kerapkah kesakitan pada tangan/pergelangan tangan menyebabkan anda berasa tidak gembira? </label> <br>

        <input type="radio" name="selection3" value="Selalu">
        Selalu <br>
        <input type="radio" name="selection3" value="Kerap">
        Kerap <br>
        <input type="radio" name="selection3" value="Kadangkala">
        Kadangkala <br>
        <input type="radio" name="selection3" value="Jarang Sekali">
        Jarang Sekali <br>
        <input type="radio" name="selection3" value="Tidak Pernah">
        Tidak Pernah <br>
        <br>

        <input type="submit" name="validate" value="validate"> <br> <br>

        <!-- DOMAIN 5: AESTHETICS SEGMENT CODE-->
        <label> Penilaian Tangan dalam Dimensi 5: Keadaan(Rupa) </label> <br>
        <label> A. Soalan berikut merujuk KEADAAN RUPA tangan KANAN anda pada minggu lepas. </label> <br>
        <label> Sila tandakan satu jawapan untuk setiap soalan. </label> <br>

        <label>1. Saya berpuas hati dengan keadaan (rupa) tangan KANAN saya. </label> <br>

        <input type="radio" name="selection4" value="Sangat Setuju">
        Sangat Setuju <br>
        <input type="radio" name="selection4" value="Setuju">
        Setuju <br>
        <input type="radio" name="selection4" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection4" value="Tidak Setuju">
        Tidak Setuju <br>
        <input type="radio" name="selection4" value="Sangat Tidak Setuju">
        Sangat Tidak Setuju <br>
        <br>

        <label>2. Keadaan (rupa) tangan KANAN saya kadangkala menyebabkan saya berasa tidak selesa di tempat awam. </label> <br>

        <input type="radio" name="selection4" value="Sangat Setuju">
        Sangat Setuju <br>
        <input type="radio" name="selection4" value="Setuju">
        Setuju <br>
        <input type="radio" name="selection4" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection4" value="Tidak Setuju">
        Tidak Setuju <br>
        <input type="radio" name="selection4" value="Sangat Tidak Setuju">
        Sangat Tidak Setuju <br>
        <br>

        <label>3. Keadaan (rupa) tangan KANAN saya membuatkan saya berasa murung. </label> <br>

        <input type="radio" name="selection4" value="Sangat Setuju">
        Sangat Setuju <br>
        <input type="radio" name="selection4" value="Setuju">
        Setuju <br>
        <input type="radio" name="selection4" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection4" value="Tidak Setuju">
        Tidak Setuju <br>
        <input type="radio" name="selection4" value="Sangat Tidak Setuju">
        Sangat Tidak Setuju <br>
        <br>

        <label>4. Keadaan (rupa) tangan KANAN saya menggangu aktiviti sosial biasa saya. </label> <br>

        <input type="radio" name="selection4" value="Sangat Setuju">
        Sangat Setuju <br>
        <input type="radio" name="selection4" value="Setuju">
        Setuju <br>
        <input type="radio" name="selection4" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection4" value="Tidak Setuju">
        Tidak Setuju <br>
        <input type="radio" name="selection4" value="Sangat Tidak Setuju">
        Sangat Tidak Setuju <br>
        <br>

        <label> B. Soalan berikut merujuk KEADAAN RUPA tangan KIRI anda pada minggu lepas. </label> <br>
        <label> Sila tandakan satu jawapan untuk setiap soalan. </label> <br>

        <label>1. Saya berpuas hati dengan keadaan (rupa) tangan KIRI saya. </label> <br>

        <input type="radio" name="selection4" value="Sangat Setuju">
        Sangat Setuju <br>
        <input type="radio" name="selection4" value="Setuju">
        Setuju <br>
        <input type="radio" name="selection4" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection4" value="Tidak Setuju">
        Tidak Setuju <br>
        <input type="radio" name="selection4" value="Sangat Tidak Setuju">
        Sangat Tidak Setuju <br>
        <br>

        <label>2. Keadaan (rupa) tangan KIRI saya kadangkala menyebabkan saya berasa tidak selesa di tempat awam. </label> <br>

        <input type="radio" name="selection4" value="Sangat Setuju">
        Sangat Setuju <br>
        <input type="radio" name="selection4" value="Setuju">
        Setuju <br>
        <input type="radio" name="selection4" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection4" value="Tidak Setuju">
        Tidak Setuju <br>
        <input type="radio" name="selection4" value="Sangat Tidak Setuju">
        Sangat Tidak Setuju <br>
        <br>

        <label>3. Keadaan (rupa) tangan KIRI saya membuatkan saya berasa murung. </label> <br>

        <input type="radio" name="selection4" value="Sangat Setuju">
        Sangat Setuju <br>
        <input type="radio" name="selection4" value="Setuju">
        Setuju <br>
        <input type="radio" name="selection4" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection4" value="Tidak Setuju">
        Tidak Setuju <br>
        <input type="radio" name="selection4" value="Sangat Tidak Setuju">
        Sangat Tidak Setuju <br>
        <br>

        <label>4. Keadaan (rupa) tangan KIRI saya menggangu aktiviti sosial biasa saya. </label> <br>

        <input type="radio" name="selection4" value="Sangat Setuju">
        Sangat Setuju <br>
        <input type="radio" name="selection4" value="Setuju">
        Setuju <br>
        <input type="radio" name="selection4" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection4" value="Tidak Setuju">
        Tidak Setuju <br>
        <input type="radio" name="selection4" value="Sangat Tidak Setuju">
        Sangat Tidak Setuju <br>
        <br>

        <input type="submit" name="submit4" value="submit4"> <br> <br>

        <!-- DOMAIN 6: SATISFACTION SEGMENT CODE-->
        <label> Penilaian Tangan dalam Dimensi 6: Kepuasan </label> <br>
        <label> A. Soalan berikut merujuk tahap KEPUASAN anda terhadap tangan/pergelangan tangan KANAN pada minggu lepas. </label> <br>
        <label> Sila tandakan satu jawapan untuk setiap soalan. </label> <br>

        <label>1. Fungsi keseluruhan tangan KANAN anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>2. Pergerakan jari tangan KANAN anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>3. Pergerakan pergelangan tangan KANAN anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>4. Kekuatan tangan KANAN anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>5. Tahap kesakitan tangan KANAN anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>6. Deria (rasa) pada tangan KANAN anda</label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label> B. Soalan berikut merujuk tahap KEPUASAN anda terhadap tangan/pergelangan tangan KIRI pada minggu lepas. </label> <br>
        <label> Sila tandakan satu jawapan untuk setiap soalan. </label> <br>

        <label>1. Fungsi keseluruhan tangan KIRI anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>2. Pergerakan jari tangan KIRI anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>3. Pergerakan pergelangan tangan KIRI anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>4. Kekuatan tangan KIRI anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>5. Tahap kesakitan tangan KIRI anda </label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <label>6. Deria (rasa) pada tangan KIRI anda</label> <br>

        <input type="radio" name="selection5" value="Sangat Berpuas Hati">
        Sangat Berpuas Hati <br>
        <input type="radio" name="selection5" value="Agak Berpuas Hati">
        Agak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Neutral">
        Neutral <br>
        <input type="radio" name="selection5" value="Agak Tidak Berpuas Hati">
        Agak Tidak Berpuas Hati <br>
        <input type="radio" name="selection5" value="Sangat Tidak Berpuas Hati">
        Sangat Tidak Berpuas Hati <br>
        <br>

        <input type="submit" name="submit5" value="submit5"> <br> <br>

        <!-- SELF INFORMATION SEGMENT CODE-->
        <label> Bahagian Maklumat Diri.</label> <br>
        <label> Sila jawab soalan-soalan pengenalan diri berikut. </label> <br>
        <label> Sila tandakan satu jawapan untuk setiap soalan. </label> <br>
        <label> Sila isi tempat kosong untuk soalan ruangan. </label> <br>

        <label>1. Adakah anda pengguna tangan kanan atau tangan kiri (kidal)?</label> <br>

        <input type="radio" name="selection6" value="Tangan Kanan">
        Tangan Kanan <br>
        <input type="radio" name="selection6" value="Tangan Kiri">
        Tangan Kiri <br>
        <input type="radio" name="selection6" value="Kedua-duanya">
        Kedua-duanya <br>
        <br>

        <label>2. Tangan manakah yang memberikan anda paling banyak masalah?</label> <br>

        <input type="radio" name="selection6" value="Tangan Kanan">
        Tangan Kanan <br>
        <input type="radio" name="selection6" value="Tangan Kiri">
        Tangan Kiri <br>
        <input type="radio" name="selection6" value="Kedua-duanya">
        Kedua-duanya <br>
        <br>

        <label>3. Pernahkah anda bertukar kerja sejak mengalami masalah dengan tangan anda?</label> <br>

        <input type="radio" name="selection6" value="Ya">
        Ya <br>
        <input type="radio" name="selection6" value="Tidak">
        Tidak <br>
        <input type="radio" name="selection6" value="Tidak Berkenaan">
        Tidak Berkenaan <br>
        <br>

        <label>4. Apakah jantina dan umur anda?</label> <br>

        <input type="radio" name="selection6" value="Lelaki">
        Lelaki <br>
        <input type="radio" name="selection6" value="Perempuan">
        Perempuan <br>
        <input type="text" name="selection7">
        Umur <br>
        <br>

        <label>5. Apakah latar belakang etnik anda?</label> <br>

        <input type="radio" name="selection6" value="Melayu">
        Melayu <br>
        <input type="radio" name="selection6" value="Cina">
        Cina <br>
        <input type="radio" name="selection6" value="India">
        India <br>
        <input type="radio" name="selection6" value="Lain-lain">
        Lain-lain <br>
        <br>

        <label>6. Apakah tahap pendidikan tertinggi yang anda terima?</label> <br>

        <input type="radio" name="selection6" value="Sekolah Menengah">
        Sekolah Menengah <br>
        <input type="radio" name="selection6" value="Diploma/Setaraf">
        Diploma/Setaraf <br>
        <input type="radio" name="selection6" value="Ijazah">
        Ijazah <br>
        <input type="radio" name="selection6" value="Pascaijazah">
        Pascaijazah <br>
        <br>

        <label>7. Berapakah anggaran pendapatan keluarga anda, termasuk gaji, bayaran hilang upaya, pendapatan persaraan dan bantuan kebajikan setiap bulan?</label> <br>

        <input type="radio" name="selection6" value="< RM3000">
        < RM3000 <br>
            <input type="radio" name="selection6" value="RM3000 - RM6000">
            RM3000 - RM6000 <br>
            <input type="radio" name="selection6" value="RM6001 - RM10000">
            RM6001 - RM10000 <br>
            <input type="radio" name="selection6" value="> RM10000">
            > RM10000 <br>
            <input type="radio" name="selection6" value="Tidak Berkenaan">
            Tidak Berkenaan <br>
            <br>

            <label>8. Adakah kecederaan anda dilindungi oleh Pampasan Pekerja (PERKESO)?</label> <br>

            <input type="radio" name="selection6" value="Ya">
            Ya<br>
            <input type="radio" name="selection6" value="Tidak">
            Tidak <br>
            <input type="radio" name="selection6" value="Tidak Berkenaan">
            Tidak Berkenaan <br>
            <br>

            <input type="submit" name="submit6" value="submit6"> <br> <br>


    </form>
</body>

</html>

<?php
//isset() = Returns TRUE if a variable is declared and not null
//empty() = Returns TRUE if a variable is not declared, false, null, ""



if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username is Missing";
    } elseif (empty($password)) {
        echo "Password is Missing";
    } else {
        echo "Hello {$username}";
    }
}

if (isset($_POST["submit"])) {

    $selection = null;

    if (isset($_POST["selection"])) {
        $selection = $_POST["selection"];
    }
    switch ($selection) {
        case "Sangat Baik":
            echo "1";
            break;
        case "Baik":
            echo "2";
            break;
        case "Serdahana":
            echo "3";
            break;
        case "Teruk":
            echo "4";
            break;
        case "Sangat Teruk":
            echo "5";
            break;

        default:
            echo "Sila Tandakan Jawapan (D-I) yang tertinggal.";
    }
}

if (isset($_POST["submit1"])) {

    $selection1 = null;

    if (isset($_POST["selection1"])) {
        $selection1 = $_POST["selection1"];
    }
    switch ($selection1) {
        case "Tidak Sukar":
            echo "1";
            break;
        case "Sedikit Sukar":
            echo "2";
            break;
        case "Agak Sukar":
            echo "3";
            break;
        case "Serdahana Sukar":
            echo "4";
            break;
        case "Sangat Sukar":
            echo "5";
            break;

        default:
            echo "Sila Tandakan Jawapan (D-II) yang tertinggal.";
    }
}

if (isset($_POST["submit2"])) {

    $selection2 = null;

    if (isset($_POST["selection2"])) {
        $selection2 = $_POST["selection2"];
    }
    switch ($selection2) {
        case "Selalu":
            echo "1";
            break;
        case "Kerap":
            echo "2";
            break;
        case "Kadangkala":
            echo "3";
            break;
        case "Jarang Sekali":
            echo "4";
            break;
        case "Tidak Pernah":
            echo "5";
            break;

        default:
            echo "Sila Tandakan Jawapan (D-III) yang tertinggal.";
    }
}

if (isset($_POST["validate"])) {

    $selection3 = null;

    if (isset($_POST["selection3"])) {
        $selection3 = $_POST["selection3"];
    }
    switch ($selection3) {
        case "Selalu":
            echo "1";
            break;
        case "Kerap":
            echo "2";
            break;
        case "Kadangkala":
            echo "3";
            break;
        case "Jarang Sekali":
            echo "4";
            break;
        case "Tidak Pernah":
            echo "5";
            break;

        default:
            echo "Sila Tandakan Jawapan (D-IV) yang tertinggal.";
    }
}

if (isset($_POST["submit4"])) {

    $selection4 = null;

    if (isset($_POST["selection4"])) {
        $selection4 = $_POST["selection4"];
    }
    switch ($selection4) {
        case "Sangat Setuju":
            echo "1";
            break;
        case "Setuju":
            echo "2";
            break;
        case "Neutral":
            echo "3";
            break;
        case "Tidak Setuju":
            echo "4";
            break;
        case "Sangat Tidak Setuju":
            echo "5";
            break;

        default:
            echo "Sila Tandakan Jawapan (D-V) yang tertinggal.";
    }
}

if (isset($_POST["submit5"])) {

    $selection5 = null;

    if (isset($_POST["selection5"])) {
        $selection5 = $_POST["selection5"];
    }
    switch ($selection5) {
        case "Sangat Berpuas Hati":
            echo "1";
            break;
        case "Agak Berpuas Hati":
            echo "2";
            break;
        case "Neutral":
            echo "3";
            break;
        case "Agak Tidak Berpuas Hati":
            echo "4";
            break;
        case "Sangat Tidak Berpuas Hati":
            echo "5";
            break;

        default:
            echo "Sila Tandakan Jawapan (D-VI) yang tertinggal.";
    }
}


?>