<?php

function AddTodoList(string $todo)
{
    global $todoList;

    $num  = sizeof($todoList) + 1;

    $todoList[$num] = $todo;
}
