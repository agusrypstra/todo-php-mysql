{include file="templates/layout/header.tpl"}
{include file="templates/layout/navbar.tpl" username=$username}
<div>
    <h1 class="text-center">
        About
    </h1>
</div>
<div class="container">
    <h2 class="text-center mt-5">
        What does this page do?
    </h2>
    <div>
        <div class="text-center">
            <p class="fs-5">This page was create with the objetive to make easier the work on my work. It sounds
                crazy no? On my work i
                have a lot of devices to be repaired, so i decided to implement this APP to have better controll of
                these.
            </p>
        </div>
        <h3>
            Roles on this app
        </h3>
        <p class="fs-5">The APP have 3 roles. Admin, editor and viewer.</p>
        <h4>Admin</h4>
        <p class="fs-5">As admin you have the control, you can update roles and delete users at your pleasure. You can
            take orders
            and comment on them</p>
        <h4>Editor</h4>
        <p class="fs-5">As editor you have permissions like admin, with the difference that you cant administrate users
            role. You can add, take and comment orders.</p>
        <h4>Viewer</h4>
        <p class="fs-5">The role of viewer is your initial role. You need to ask the admin for permissions to start
            working. You only can see the orders and their comments, but you can't take or comment it.</p>
    </div>
</div>
{include file="templates/layout/footer.tpl"}