{include file="header.tpl"}
<main>
        <form action="index.php" method="post">
        <input type="hidden" name="action" value="addTermin">
        <div class="mb-3">
                <label class="form-label" for="teacher">Wybierz nauczyciela:</label>
                <select class="form-select" aria-label="Default select example" name="teacher" required >
                    <option selected>Wybierz nauczyciela</option>
                    {foreach from=$teachers item=teacher}
                        <option value="{$teacher.id}">{$teacher.language} {$teacher.name} {$teacher.surname}</option>
                    {/foreach}
                </select>
        </div>
        <div class="mb-3">
                <label class="form-label" for="room">Wybierz pokoj:</label>
                <select class="form-select" aria-label="Default select example" name="room" required >
                    <option selected>Wybierz zoom-room</option>
                    {foreach from=$rooms item=room}
                        <option value="{$room.id}">{$teacher.language} {$room.number} </option>
                    {/foreach}
                </select>
        </div>
        <div class="mb-3">
                <label class="form-label" for="shiftStart">Wybierz początek:</label>
                <input class="form-control" type="datetime-local" name="shiftStart" id="shiftStart">
       </div>
        <div class="mb-3">
                <label class="form-label" for="shiftEnd">Wybierz koniec:</label>
                <input class="form-control" type="datetime-local" name="shiftEnd" id="shiftEnd">
        </div>
        <div class="mb-3">
                <label class="form-label" for="interval">Interwał wizyty(minuty):</label>
                <input class="form-control" type="number" name="interval">
        </div>  
        <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Dodaj wizyte</button>
        </div>
    </form>
</main>
{include file="footer.tpl"}