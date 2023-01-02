<?php
require_once('db.php');
function showHome()
{
  $html = '
    <html lang="en">
      <head>
        <base href="' . BASE_URL . '" />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <title>To do list PHP</title>
      </head>
      <body>
        <div class="container">
          <form method="post" action="createTask">
            <h2>Enter your task</h2>
            <input name="title" type="text" placeholder="Title" />
            <input name="description" type="text" placeholder="Description" />
            <input name="priority" type="text" placeholder="Priority" />
            <label for="finished">Finished</label>
            <input name="finished" type="checkbox" placeholder="Finished" />
            <button>Add</button>
          </form>
          <div>
            <h2>My list</h2>
            <ul>';
  $tasks = getTasks();
  foreach ($tasks as $task) {
    $html .= '<li>' . $task->title . ' - <a href="deleteTask/' . $task->id_task . '">Delete</a> - ' . '<a href="updateTask/' . $task->id_task . '">Update </a>' . '</li>';

  }
  $html .= '</ul>
          </div>
        </div>
      </body>
    </html>
    ';
  echo $html;
}
function showAbout()
{
  echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About</title>
      </head>
      <body>
        <h1>About page</h1>
      </body>
    </html>
    ';
}

function createTask()
{
  if (!isset($_POST['finished'])) {
    $finished = 0;
  } else {
    $finished = 1;
  }
  createTaskDB($_POST["title"], $_POST["description"], $_POST["priority"], $finished);
  header("Location: home");
}
function deleteTask($id)
{
  deleteTaskDB($id);
  header("Location:" . BASE_URL . "home");
}
function updateTask($id)
{
  updateTaskDB($id);
  header("Location:" . BASE_URL . "home");
}