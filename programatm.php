<?php
function tampilkanMenu(){
    echo "===== Pilih Menu =====\n";
    echo "1. Cek saldo\n";
    echo "2. Setor tunai\n";
    echo "3. Tarik tunai\n";
    echo "4. Keluar\n";
    echo "Silakan pilih menu diatas: ";
}

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
            echo "Ini adalah menu setor tunai\n";
            break;
        default:
            echo "Pilihan tidak valid\n";
    }
    echo "=========================================\n\n";
}

?>
