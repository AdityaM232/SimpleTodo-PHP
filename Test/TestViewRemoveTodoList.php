<?php
require_once "Model/TodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

AddTodoList("aditya");
AddTodoList("manggala");
AddTodoList("putra");
AddTodoList("angga");

ShowTodoList();
ViewRemoveTodoList();
ShowTodoList();
