{include file="templates/layout/header.tpl"} {include file="templates/layout/loginNavbar.tpl"}
<div class="container text-center">
  <h1>Register</h1>
  <form method="post" action="verifyRegistration" class="m-2">
    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" class="form-control" type="text" name="email" />
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input id="password" class="form-control" type="password" name="password" />
    </div>
    <div class="form-group">
      <label for="password">Repeat password</label>
      <input id="password" class="form-control" type="password" name="checkPassword" />
    </div>
    {if $message}
      <p>{$message}</p>
    {/if}
    <button class="btn btn-primary" type="submit">Register</button>
  </form>
</div>
{include file="templates/layout/footer.tpl"}