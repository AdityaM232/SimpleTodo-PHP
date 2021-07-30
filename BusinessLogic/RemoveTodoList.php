<?php

function RemoveTodoList(int $num): bool
{
    global $todoList;

    if ($num > sizeof($todoList)) {
        return false;
    }
    for ($i = $num; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }
    unset($todoList[sizeof($todoList)]);

    return true;
}
