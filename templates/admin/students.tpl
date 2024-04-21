{include file="header.tpl"}
<main>
<table class="table">
<tr>
    <th>ID</th>
    <th>Imie</th>
    <th>Nazwisko</th>

</tr>
{foreach from=$students item=student}
    <tr>
    <th>{$student.id}</th>
    <th>{$student.name}</th>
    <th>{$student.surname}</th>

</tr>
{/foreach}
</table>
</main
{include file="footer.tpl"}