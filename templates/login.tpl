{include file="header.tpl"}

    <div class="row">
        <div class="col col-lg-4 offset-lg-4 mt-5">
            <h3>Zaloguj sie</h3>
            <form action="index.php" method="post">
            <input type="hidden" name="action" value="checkLogin">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="passwd" class="form-label"> Haslo</label>
                <input type="password" name="passwd" class="form-control" id="passwd" placeholder="Haslo" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
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
