<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";

AddTodoList("tes");
AddTodoList("lagi");

var_dump($todoList);
