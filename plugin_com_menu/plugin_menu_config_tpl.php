<div class="wrap">
    
    <h1>Menu Config</h1>

    <form method="´post" action="options.php">
        <div style="margin-top: 5px;">
            <label for="token_da_api">Token da API</label>
            <input type="text" id="token_da_api" name="token_da_api">
        </div>

        <div style="margin-top: 5px;">
            <label for="url_da_api">URL da API</label>
            <input type="text" id="url_da_api" name="url_da_api">
        </div>

        <?php submit_button(); ?>

    </form>
</div>