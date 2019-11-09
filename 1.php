<?php
function biodata($nama, $umur)
{
    // definisi variabel
    $name = $nama;
    $age = $umur;
    $address = "Kp.Cikarokrok Rt. 01 Rw. 09 Ds. Sukasenang Kec. Banyuresmi Kab. Garut 44191";
    $hobbies = array("membaca", "nonton film");
    $is_married = false;
    $school = [
        ["name" => "SMKN 2 Garut", "year_in" => 2011, "year_out" => 2014, "major" => "Multimedia"],
        ["name" => "Sekolah Tinggi Teknologi Garut", "year_in" => 2015, "year_out" => 2019, "major" => "Teknik Informatika"],
    ];
    $skills = [
        ["name" => "HTML", "level" => "beginner"],
        ["name" => "CSS", "level" => "beginner"],
        ["name" => "PHP", "level" => "beginner"]
    ];
    $interest_in_coding = true;

    // gabungkan variabel dalam 1 array
    $data = [
        "name" => $name,
        "age" => $age,
        "address" => $address,
        "hobbies" => $hobbies,
        "is_married" => $is_married,
        "school" => $school,
        "skills" => $skills,
        "interest_in_coding" => $interest_in_coding
    ];

    // ubah array dalam bentuk json
    $json = json_encode($data);

    // tampilkan hasil
    echo $json;
}

// panggil fungsi biodata
biodata("Halim Hasanudin", 23);
