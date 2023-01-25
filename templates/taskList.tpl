{include file="templates/header.tpl"}
<h1 class="text-center m-5">
    {$title|upper}
</h1>
<div class="container text-center">
    <div class="row">
        <div class="col-4">
            <form method="post" action="createTask">
                <div class="form-group">
                    <label for="title">Text</label>
                    <input id="title" class="form-control" type="Title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input id="description" class="form-control" type="text" name="description">
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <input id="priority" class="form-control" type="number" name="priority">
                </div>
                <button class="btn btn-primary" type="submit">Add order</button>
            </form>
        </div>
        <div class="col-8">
            <div class="container text-center">
                <h1>Pending orders</h1>
                <div class="row">
                    {foreach from=$tasks item=$task}
                        {if !$task->finished}
                            <div class="card m-2" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{$task->title}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Order n° {$task->id_task}</h6>
                                    <p class="card-text">{$task->description}</p>
                                    <p>{$task->priority}</p>
                                    <a href='deleteTask/{$task->id_task}' class="btn btn-danger">Delete</a>
                                    {if !$task->finished}
                                        <a href='updateTask/{$task->id_task}' class="btn btn-secondary">End task</a>
                                    {else}
                                        <a href='updateTask/{$task->id_task}' class="btn btn-secondary disabled">End task</a>
                                    {/if}
                                </div>
                            </div>
                        {/if}
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h1>Orders history</h1>
        <div class="row">
            {foreach from=$tasks item=$task}
                {if $task->finished}
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{$task->title|upper}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Order n° {$task->id_task}</h6>
                            <p class="card-text">{$task->description}</p>
                            <p>{$task->priority}</p>
                            <a href='deleteTask/{$task->id_task}' class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div>
</div>
{{include file="templates/footer.tpl"}}