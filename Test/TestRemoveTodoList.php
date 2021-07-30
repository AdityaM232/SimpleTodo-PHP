<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

AddTodoList("Aditya");
AddTodoList("Manggala");
AddTodoList("Putra");

ShowTodoList();
RemoveTodoList(2);
ShowTodoList();
