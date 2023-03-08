<div class="container text-center">
    <div class="row">
        <div class="col">
            <h2>Pending</h2>
            {foreach from=$tasks item=$task}
                {if $task->status_id == 0}
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <a href='task/{$task->id_task}'>
                                <h5 class="card-title">{$task->title}</h5>
                            </a>
                            <h6>{$task->name}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Order n° {$task->id_task}</h6>
                            <p class="card-text">{$task->description}</p>
                            <p>{$task->priority}</p>
                            <a href='deleteTask/{$task->id_task}' class="btn btn-danger">Delete</a>
                            <a href='updateTask/{$task->id_task}/1' class="btn btn-secondary">Take task</a>
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
        <div class="col">
            <h2>In course</h2>
            {foreach from=$tasks item=$task}
                {if $task->status_id == 1}
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{$task->title|upper}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Order n° {$task->id_task} - taken by {$task->id_user}</h6>
                            <p class="card-text">{$task->description}</p>
                            <p>{$task->priority}</p>
                            <p>{$task->name}</p>
                            <a href='updateTask/{$task->id_task}/0' class="btn btn-secondary">Leave order</a>
                            <a href='updateTask/{$task->id_task}/2' class="btn btn-secondary">End task</a>
                            {if $role==2}
                                <a href='deleteTask/{$task->id_task}' class="btn btn-danger">Delete</a>
                            {/if}
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
        <div class="col">
            <h2>Finished</h2>
            {foreach from=$tasks item=$task}
                {if $task->status_id == 2}
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