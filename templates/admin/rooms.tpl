{include file="header.tpl"}
<main>
<table class="table">
<tr>
    <th>ID</th>
    <th>Zoom-room</th>


</tr>
{foreach from=$rooms item=room}
    <tr>
    <th>{$room.id}</th>
    <th>{$room.number}</th>


</tr>
{/foreach}
</table>
</main>
{include file="footer.tpl"}