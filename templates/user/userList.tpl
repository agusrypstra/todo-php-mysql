{include file="templates/layout/header.tpl"}


<h1 class="text-center m-5">{$title}</h1>


{include file="templates/layout/navbar.tpl" username=$username role=$role}
<div class="container">
    {foreach from=$users item=$user}
        <ul class="list-group">
            <li class="list-group-item">{$user->user_id} - {$user->email}
                {if $role==2}
                    <a href='deleteUser/{$user->user_id}' class="btn btn-outline-danger" type="button">Delete</a>
                    {if $user->role_id == 0}
                        <a href="updateRole/{$user->user_id}/1" class="btn btn-outline-primary">Set as editor</a>
                    {/if}
                    {if $user->role_id == 1}
                        <a href="updateRole/{$user->user_id}/0" class="btn btn-outline-primary">Set as viewer</a>
                    {/if}
                {/if}
            </li>
        </ul>
    {/foreach}
</div>
{{include file="templates/layout/footer.tpl"}}