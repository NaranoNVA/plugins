<div class="wrap">
    
    <h1>Menu Config</h1>

    <form method="post" action="options.php">

        <?php 
        settings_fields('configs-exemplo');
        do_settings_sections('configs-exemplo');
        ?>

        <div style="margin-top: 5px;">
            <label for="api-token">Token da API</label>
            <input type="text" id="api-token" name="api-token" value="<?php echo get_option('api-token'); ?>">
        </div>

        <div style="margin-top: 5px;">
            <label for="api-url">URL da API</label>
            <input type="text" id="api-url" name="api-url" value="<?php echo get_option('api-url'); ?>">
        </div>

        <?php submit_button(); ?>

    </form>
</div>