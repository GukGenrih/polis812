<?php

class JsonPlaceholderAPI
{

  // Метод для получения пользователей

  public function getUsers()
  {
    $url = 'https://jsonplaceholder.typicode.com/users';
    $response = file_get_contents($url);
    return json_decode($response, true);
  }


  //  Метод для получения постов пользователя

  public function getUserPosts($userId)
  {
    $url = 'https://jsonplaceholder.typicode.com/posts?userId=' . $userId;
    $response = file_get_contents($url);
    return json_decode($response, true);
  }

  // Метод для получения заданий пользователя


  public function getUserTodos($userId)
  {
    $url = 'https://jsonplaceholder.typicode.com/todos?userId=' . $userId;
    $response = file_get_contents($url);
    return json_decode($response, true);
  }


  //  Метод для добавления нового поста

  public function addPost($post)
  {
    $url = 'https://jsonplaceholder.typicode.com/posts';
    $options = array(
      'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/json',
        'content' => json_encode($post)
      )
    );
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response !== false) {
      return json_decode($response, true);
    } else {
      return false;
    }
  }

  // Метод для редактирования поста

  public function editPost($postId, $post)
  {
    $url = 'https://jsonplaceholder.typicode.com/posts/' . $postId;
    $options = array(
      'http' => array(
        'method' => 'PUT',
        'header' => 'Content-Type: application/json',
        'content' => json_encode($post)
      )
    );
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response !== false) {
      return json_decode($response, true);
    } else {
      return false;
    }
  }

  // Метод для удаления поста

  public function deletePost($postId)
  {
    $url = 'https://jsonplaceholder.typicode.com/posts/' . $postId;
    $options = array(
      'http' => array(
        'method' => 'DELETE',
        'header' => 'Content-Type: application/json',
      )
    );
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response !== false) {
      return true;
    } else {
      return false;
    }
  }
}


?>