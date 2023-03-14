{include file="templates/layout/header.tpl"}
{include file="templates/layout/navbar.tpl"}
<h1 class="text-center m-5">Order n° {$task->id_task}</h1>
<div class="container text-center" id="task" data-id="{$task->id_task}">
    <div class="border p-2">
        <div class="row">
            <h2 class="col-10 fs-2">
                {$task->title}
            </h2>
            <p class="col-2 fs-5">{$task->name}</p>
        </div>
        <div>
            <p class="fs-4">{$task->description}</p>
        </div>
    </div>
    {if $role}
        {if $role[0]!=0}
            {literal}
                <div id="app">
                    <div>
                        <h2>Comments</h2>
                        <form method="post" id="filterForm">
                            <div class="form-group">
                                <label for="filter">Order by</label>
                                <select id="filterValue" class="form-control" name="filter">
                                    <option value="newest">Newest</option>
                                    <option value="oldest">Oldest</option>
                                    <option value="less-valued">Less valued</option>
                                    <option value="most-valued">Most valued</option>
                                </select>
                                <button class="btn btn-success" type="submit">Filter</button>
                            </div>

                        </form>
                        <div id="comments-list">
                            <ul class="list-group">
                                <li v-for="comment in comments" class="list-group-item">{{comment.comment}} || {{comment.value}} ||
                                    {{comment.date}}
                                {/literal}
                                <button class="btn btn-danger p-1 m-2" v-bind:data-id='comment.comment_id'>Delete</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <form method="post" id="formComment" data-id="{$task->id_task}">
                    <div class="form-group">
                        <label for="Comment">Comment</label>
                        <textarea id="comment" class="form-control" name="comment" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="value">Value</label>
                        <select id="value" class="form-control" name="value">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <button class="btn btn-success" type="submit">Send comment</button>
                </form>
            </div>
        {/if}
    {/if}
</div>
<script src="js/Comments-main.js" type="module">
{include file="templates/layout/footer.tpl"}