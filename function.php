<?php
/**
 * function/ method / fungsi = blok yg akan dijalankan ketika dipanggil
 * blok code -> kumpulan baris kode yg diapit oleh tanda {}
 * function punya parameter -> data yg akan diolah ooleh data tsb
 */

function prokes(){ 
echo "memakai masker";
echo "menyabun tangan";
echo "mengurangi mobilitas";
}

function makan($nama_makanan){
    echo "cuci tangan";
    echo "baca doa";
    echo "masukkan $nama_makanan";
    echo "kunyah $nama_makanan";
    echo "Telan $nama_makanan";
}

//echo prokes();
    echo makan ("burger");
    echo makan ("soto");
?>