<?php
function getMahasiswa()
{
    $file = "api/dummy-data/mahasiswa.json";
    $data = file_get_contents($file);
    $mahasiswa = json_decode($data, true);
    return $mahasiswa;
}
