{include file="header.tpl"}
<div class="row">
<h1>Konwersacje z języka angielskiego</h1>
</div>
<div class="row">
    <h2>Umow sie na konwersacje</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="makeMeeting">
            <div class="mb-3">
            <label>Wybierz nauczyciela i przedmiot:</label>
                <select class="form-select" aria-label="Default select example" name="teacher" required >
                    <option selected>Wybierz nauczyciela</option>
                    {foreach from=$teachers item=teacher}
                        <option value="{$teacher.id}">{$teacher.language} {$teacher.name} {$teacher.surname}</option>
                    {/foreach}
                </select>
            </div>
             <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Umow wizyte</button>
            </div>
    </form>
</div>
<div class="row">
    <h3>Lista umowionych spotkan</h3>
    <table class="table">
    <tr>
        <th>Termin konwersacji</th>
        <th>Native-speaker</th>
        <th>Zoom-room</th>

    <tr>
    {foreach from=$meetings item=meeting}
    <tr>
        <th>{$meeting.date}</th>
        <th>{$meeting.name} {$meeting.surname}</th>
        <th>{$meeting.room} </th>
        <td>
        <a href="index.php?action=clearMeeting&&meeting_id={$meeting.meeting_id}">
        <button>Odwolaj konwersacje</button>
        </a>
        </td>

    <tr>
    {/foreach}
    </table>
</div>

{include file="footer.tpl"}