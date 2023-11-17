<?php
require("class.php");
$api = new JsonPlaceholderAPI();


// Получение постов пользователя с id = 1
$posts = $api->getUserPosts(1);
echo ("<br>Все посты пользователя с 1 ид<br>");
var_dump($posts);

// Получение заданий пользователя с id = 1
$todos = $api->getUserTodos(1);
echo ("<br>Все задания пользователя с 1 ид<br>");
var_dump($todos);

// Добавление нового поста
$newPost = array(
  'userId' => 1,
  'title' => 'New post',
  'body' => 'This is a new post'
);
$result = $api->addPost($newPost);
echo ("<br>Добавление нового поста для пользявателя с 1 ид<br>");
var_dump($result);

// Редактирование поста с id = 1
$updatedPost = array(
  'title' => 'Updated post',
  'body' => 'This post has been updated'
);
$result = $api->editPost(1, $updatedPost);
echo ("<br>Редактирование поста с 1 ид<br>");
var_dump($result);

// Удаление поста с id = 1
$result = $api->deletePost(1);
echo ("<br>Удаление поста с ид 1<br>");
var_dump($result);

// Получение пользователей
$users = $api->getUsers();
echo ("<br>Все пользователи<br>");
var_dump($users);


?>