{include file="header.tpl"}

    <div class="row">
        <div class="col col-lg-4 offset-lg-4 mt-5">
            <h3>Zrejestruj sie</h3>
            <form action="admin/index.php" method="post">
            <input type="hidden" name="action" value="checkRegister">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="passwd" class="form-label"> Haslo</label>
                <input type="text" name="passwd" class="form-control" id="passwd" placeholder="Haslo" required>
            </div>
             <div class="mb-3">
                <label for="name" class="form-label">Imie</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Haslo" required >
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Nazwisko</label>
                <input type="text" name="surname" class="form-control" id="surname placeholder="Haslo" required>
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Zarejstruj</button>
            </div>
            {if isset($error)}
            <div class="alert alert-danger" role-"alert">
                {$error}
            </div>
            {/if}
            </form>
        </div>
    </div>

{include file="footer.tpl"}
