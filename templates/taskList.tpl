<h1>
    {$title}
</h1>
<div class="">
    <form method="post" action="createTask">
        <h2>Enter your task</h2>
        <input name="title" type="text" placeholder="Title" />
        <input name="description" type="text" placeholder="Description" />
        <input name="priority" type="text" placeholder="Priority" />
        <label for="finished">Finished</label>
        <input name="finished" type="checkbox" placeholder="Finished" />
        <button>Add</button>
    </form>
    <ul>
        {foreach from=$tasks item=$task}
            <h1>{$task->id_task}</h1>
            <p>{$task->title}</p>
            <a href='deleteTask/{$task->id_task}'>Delete</a>
        {/foreach}
    </ul>
</div>
{{include file="templates/footer.tpl"}}