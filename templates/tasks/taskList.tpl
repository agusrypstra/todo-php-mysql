<div class="container text-center">
    <form action="home" method="get">
        <h1>Filter by type</h1>
        <div class="form-group">
            <label for="Type">Type</label>
            <select id="Type" class="form-control" name="type">
                <option selected="selected" value=>-</option>
                {foreach from=$categories item=$category}
                    <option value='{$category->id_category}'>{$category->name}</option>
                {/foreach}
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Filter</button>
    </form>
    <div class="row">
        {if {$tasks|@count}==0}
            <h2>There's no tasks</h2>
            {/if}
            <div class="col">
                <h2>Pending</h2>



            {foreach from=$tasks item=$task}



                {if $task->status_id == 0}
                        <div class="card m-2" style="width: 18rem;">
                            <div class="card-body">
                                <a href='task/{$task->id_task}' class="text-decoration-none">
                                    <h5 class="card-title">{$task->title}</h5>
                                </a>
                                <h6>{$task->name}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Order n° {$task->id_task}</h6>
                                <p class="card-text">{$task->description}</p>
                                <p>Priority: {$task->priority}</p>



                    {if $role}

                        {if $role[0]!=0}
                                        <a href='deleteTask/{$task->id_task}' class="btn btn-danger">Delete</a>
                                        <a href='updateTask/{$task->id_task}/1' class="btn btn-secondary">Take task</a>

                        {/if}

                    {/if}
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
                                <a href='task/{$task->id_task}' class="text-decoration-none">
                                    <h5 class="card-title">{$task->title}</h5>
                                </a>
                                <p>{$task->name}</p>
                                <h6 class="card-subtitle mb-2 text-muted">Order n° {$task->id_task} - taken by {$task->email}</h6>
                                <p class="card-text">{$task->description}</p>
                                <p>Priority: {$task->priority}</p>



                    {if $task->email == $username}
                                    <a href='updateTask/{$task->id_task}/0' class="btn btn-secondary">Leave order</a>
                                    <a href='updateTask/{$task->id_task}/2' class="btn btn-secondary">End task</a>



                    {/if}



                    {if $role[0]==2}
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
                                <a href='task/{$task->id_task}' class="text-decoration-none">
                                    <h5 class="card-title">{$task->title}</h5>
                                </a>
                                <p>{$task->name}</p>
                                <h6 class="card-subtitle mb-2 text-muted">Order n° {$task->id_task}</h6>
                                <p class="card-text">{$task->description}</p>
                                <p>Finished by {$task->email}</p>



                    {if $role[0]!=0}
                                    <a href='deleteTask/{$task->id_task}' class="btn btn-danger">Delete</a>
                                {/if}
                            </div>
                        </div>
                    {/if}
                {/foreach}
            </div>
        </div>
    </div>