<?php

function ShowTodoList()
{

    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $num => $value) {
        echo "$num . $value" . PHP_EOL;
    }
}
