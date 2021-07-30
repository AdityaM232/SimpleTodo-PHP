<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "Helper/input.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";

function ViewShowTodoList()
{
    while (true) {

        ShowTodoList();

        echo "Menu" . PHP_EOL;
        echo "1.Tambah Todo" . PHP_EOL;
        echo "2.Hapus Todo" . PHP_EOL;
        echo "3.Keluar" . PHP_EOL;

        $pilihan = input("pilih");

        if ($pilihan == "1") {
            ViewAddTodoList();
        } else if ($pilihan == "2") {
            ViewRemoveTodoList();
        } else if ($pilihan == "3") {
            break;
        } else {
            echo "Inputan Salah" . PHP_EOL;
        }
    }

    echo "BYE" . PHP_EOL;
}
