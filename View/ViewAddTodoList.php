<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "Helper/input.php";

function ViewAddTodoList()
{

    echo "Menambah TodoList" . PHP_EOL;

    $todo = input("(x untuk batal), Todo");

    if (($todo == "x") || ($todo == "X")) {
        echo "dibatalkan" . PHP_EOL;
    } else {
        AddTodoList($todo);
    }
}
