{include file="header.tpl"}
<main>
<table class="table">
<tr>
    <th>ID</th>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Jezyk</th>
</tr>
{foreach from=$teachers item=teacher}
    <tr>
    <th>{$teacher.id}</th>
    <th>{$teacher.name}</th>
    <th>{$teacher.surname}</th>
    <th>{$teacher.language}</th>
</tr>
{/foreach}
</table>
</main>
{include file="footer.tpl"}