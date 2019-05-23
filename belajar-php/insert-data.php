<?php
    include "koneksi.php";
        $sql ="INSERT INTO user
        (
            id,
            nama,
            role,
            availability,
            age,
            location,
            years_experience,
            email
        ) VALUE
        (
            '1',
            'Nashiya Alfi Ramadhani',
            'Frontend Developer',
            'Full Time',
            '16',
            'Banyuwangi',
            '1',
            'nasyaalfi2016@gmail.com'
        )";

        if($koneksi->query($sql) === TRUE){
            echo "Insert data telah berhasil";
        }
        else{
            echo "Insert data gagal";
        }
?>