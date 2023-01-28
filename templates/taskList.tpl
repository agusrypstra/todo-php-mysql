{include file="templates/header.tpl"}
<h1 class="text-center m-5">
    {$title|upper}
</h1>
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="nav-link" href="home">Home</a>
        <a class="nav-link" href="about">About</a>
        <a class="nav-link" href="editCategories">Edit categories</a>
        <form class="d-flex" action="logout" method="post">
            <button class="btn btn-outline-danger" type="submit">Logout</button>
        </form>
    </div>
</nav>
<div class="container text-center">
    <div class="row">
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
            <div class="form-group">
                <label for="category">Device type</label>
                <select id="category" class="form-control" name="category">
                    {foreach from=$categories item=$category}
                        <option value='{$category->id_category}'>{$category->name}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group">
                <label for="newCategory">New category</label>
                <input id="newCategory" class="form-control" type="text" name="newCategory">
            </div>
            <button class="btn btn-primary" type="submit">Add order</button>
        </form>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h2>Pending</h2>
            {foreach from=$tasks item=$task}
                {if !$task->finished}
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <a href='task/{$task->id_task}'>
                                <h5 class="card-title">{$task->title}</h5>
                            </a>

                            <h6 class="card-subtitle mb-2 text-muted">Order n° {$task->id_task}</h6>
                            <p class="card-text">{$task->description}</p>
                            <p>{$task->priority}</p>
                            <a href='deleteTask/{$task->id_task}' class="btn btn-danger">Delete</a>
                            {if !$task->finished}
                                <a href='updateTask/{$task->id_task}' class="btn btn-secondary">End task</a>
                            {else}
                                <a href='updateTask/{$task->id_task}' class="btn btn-secondary disabled">End
                                    task</a>
                            {/if}
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
        <div class="col">
            <h2>Finished</h2>
            {foreach from=$tasks item=$task}
                {if $task->finished}
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{$task->title|upper}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Order n° {$task->id_task}</h6>
                            <p class="card-text">{$task->description}</p>
                            <p>{$task->priority}</p>
                            <p>{$task->name}</p>
                            <a href='deleteTask/{$task->id_task}' class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div>
</div>
{{include file="templates/footer.tpl"}}