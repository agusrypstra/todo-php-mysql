{* SIDE BAR *}
<nav class="navbar">
  <a class="navbar-toggler toggler-example" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
    aria-controls="offcanvasExample">
    <span class="navbar-toggler-icon">
  </a>

  <div class="offcanvas offcanvas-start d-flex" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between p-0">
      <div>
        <div class="d-flex justify-content-center">
          <div class="card border-0 d-flex justify-content-center align-items-center" style="width: 18rem;">
            <img src="img\blank-profile-picture-973460__340.png" class="rounded-circle" style="width: 66%" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">{$username} -
                {if $role}
                  <span>{$role[1]}</span>
                {else}
                  viewer
                {/if}
              </h5>
            </div>
          </div>
        </div>
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item m-2"><a class="nav-link" href="home">Home</a></li>
            {if $role}
              {if $role[0]==2 OR $role ==1}
                <li class="list-group-item m-2"><a class="nav-link" href="form">Add task</a></li>
              {/if}
              {if $role[0] == 2}
                <li class="list-group-item m-2"><a class="nav-link" href="users">Users</a></li>
              {/if}
            {/if}
            <li class="list-group-item m-2"><a class="nav-link" href="about">About</a></li>
          </ul>
        </div>
      </div>
      <div class="d-flex justify-content-end p-2">
        <form class="d-flex" action="logout" method="post">
          <button class="btn btn-outline-danger" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </div>
</nav>
{* SIDE BAR *}