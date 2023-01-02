<?php
require_once('db.php');
function showIndex()
{
  echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title></title>
      </head>
      <body>
        <nav>
          <ul>
            <li><a href="home">HOME</a></li>
            <li><a href="about">ABOUT</a></li>
          </ul>
        </nav>
      </body>
    </html>
    ';
}
getTasks();