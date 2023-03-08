{include file="templates/layout/header.tpl"}

<h1 class="text-center m-5">
    {$title|upper}
</h1>

{include file="templates/layout/navbar.tpl"}

{include file="templates/tasks/taskList.tpl" tasks=$tasks}
{include file="templates/layout/footer.tpl"}