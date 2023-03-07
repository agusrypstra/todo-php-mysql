{include file="templates/header.tpl"}
{include file="templates/navbar.tpl"}

<h1 class="text-center m-5">
    Home
</h1>

{* {include file="templates/navbar.tpl" username=$username} *}
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
                    {* categories *}
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
<div class="row">
    <h2>Pending</h2>
    <div class="col">
        {include file="templates/vue/taskList.tpl"}
    </div>
</div>
<script src="js/app.js">
    {{include file="templates/footer.tpl"}
}