{include file="templates/layout/header.tpl"}
{include file="templates/layout/navbar.tpl" username=$username role=$role}

<h1 class="text-center m-5">
    {$title|upper}
</h1>


{include file="templates/tasks/taskList.tpl" tasks=$tasks message=$message role=$role username=$username}
{include file="templates/layout/footer.tpl"}