{literal}
    <div id="app">
        <ul class="list-group">
            <li v-for="task in tasks" class="list-group-item">
                {{task.title}} | {{task.description}}
            </li>
        </ul>
    </div>
{/literal}