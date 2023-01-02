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
          <form method="post" action="router.php">
            <h2>Enter your task</h2>
            <input type="text" placeholder="Title" />
            <input type="text" placeholder="Description" />
            <input type="text" placeholder="Priority" />
            <label for="finished">Finished</label>
            <input name="finished" type="checkbox" placeholder="Finished" />
            <button>Add</button>
          </form>
          <div>
            <h2>My list</h2>
            <ul>';
    $tasks = getTasks();
    foreach ($tasks as $task) {
        $html .= '<li>' . $task->title . '</li>';

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