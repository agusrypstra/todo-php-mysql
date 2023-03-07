<nav class="navbar" style="background-color: #9CE2EE;">
  <div class="container-fluid">
    <a class="nav-link" href="home">Home</a>
    <a class="nav-link" href="about">About</a>
    {if $role=2}
      <a class="nav-link" href="users">Users</a>
    {/if}
    <form class="d-flex" action="logout" method="post">
      <button class="btn btn-outline-danger" type="submit">Logout</button>
    </form>
  </div>
</nav>