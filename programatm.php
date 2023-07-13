<?php

//fungsi untuk menampilkan pilihan menu atm (akan dipanggil di program utama)
function tampilkanMenu(){
    echo "===== Pilih Menu =====\n";
    echo "1. Cek saldo\n";
    echo "2. Setor tunai\n";
    echo "3. Tarik tunai\n";
    echo "4. Keluar\n";
    echo "Silakan pilih menu diatas: ";
}

//fungsi/aksi untuk cek saldo (akan dipanggil di program utama)
function cekSaldo($saldo)
{
    echo "Saldo Anda: " . $saldo . "\n";
}

//fungsi untuk setor tunai (akan dipanggil di program utama)
function setorTunai($saldo){
    echo "Selamat datang di menu setor tunai\n";
    echo "=================================\n\n";
    echo "Masukkan nominal setor: ";
    $setor = (int) readline();
    $saldo += $setor;
    return $saldo;
}

//fungsi untuk tarik tunai (akan dipanggil di program utama)

//fungsi untuk keluar

//Program utama
echo "Selamat datang di mesin atm BKI\n";
while(true){
    tampilkanMenu();
    $opsi = (int) readline(); //input opsi 1,2,3 ....
    
    switch($opsi){
        case 1:
            echo "Ini adalah menu cek saldo\n";
            break;
        case 2:
            $saldo = setorTunai($saldo)
            break;
        default:
            echo "Pilihan tidak valid\n";
    }
    echo "=========================================\n\n";
}

?>
