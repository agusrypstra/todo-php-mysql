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
            {if $message}
                <p>{$message}</p>
            {/if}
            <button class="btn btn-primary" type="submit">Add order</button>
        </form>
    </div>
</div>