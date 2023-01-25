{include file="templates/header.tpl"}
<div class="container">
    <form method="post" action="verifyRegistration" class="m-2">
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
            <label for="password">Repeat password</label>
            <input id="password" class="form-control" type="password" name="checkPassword">
        </div>
        <button class="btn btn-primary" type="submit">Register</button>
    </form>
</div>
{include file="templates/footer.tpl"}