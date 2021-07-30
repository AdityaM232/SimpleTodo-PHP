<?php 
require_once "Helper/input.php";
require_once "BusinessLogic/RemoveTodoList.php";

    function ViewRemoveTodoList(){
        
        echo "MENGHAPUS TODO".PHP_EOL;

        $pilihan = input("Nomor");
        
        $success = RemoveTodoList($pilihan);

        if ($success) {
            echo "Berhasil Hapus Nomor $pilihan" . PHP_EOL;
        }else{
            echo "Gagal Hapus Nomor $pilihan" . PHP_EOL;
        }
    }
