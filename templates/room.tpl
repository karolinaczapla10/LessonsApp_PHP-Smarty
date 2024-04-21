{include file="header.tpl"}

<table class="table">
    <tr>
        <th>Data</th>
        <th>Native-speaker</th>
        <th>Zoom-room</th>
        <th>Zezerwuj konwersacje</th>
    </tr>
    {foreach from=$meetings item=meeting}
    <tr>
        <td>{$meeting.date}</td>
        <td>{$meeting.name} {$meeting.surname}</td>
        <td>{$meeting.number}</td>
        <td>
            <a href="index.php?action=saveMeeting&meeting_id={$meeting.meeting_id}">
            <button class="btn btn-primary">Zarezerwuj</button>
</a>
        </td>
    </tr>
    {/foreach}
</table>
{include file="footer.tpl"}