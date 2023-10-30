
<div class = 'taskField'>
    <div class = 'header'>Описание задачи</div>
        <form action = '/'' method = 'post' name = 'task' onchange=document.forms['task'].submit();>
            <input type = 'text' name = 'task' value = '{{task}}'>
        </form>
    <br>
</div>
<div class = 'finishButtons'>
    <form action = '/' method = 'post'>
        <input type = 'submit' value = 'Сохранить' name = 'saveTask'>
    </form>
    <form action = '/'' method = 'post'>
        <input type = 'submit' value = 'Новая задача' name = 'reset'>
    </form>
    <form action = '/' method = 'post'>
        <input type = 'submit' value = 'Выйти' name = 'logout'>
    </form>
</div>
<div class = 'tasks'>
    {{tasklist}}
</div>