<?php

// Output the options page
function joonbot_options_page()
{
    // Get options
    $options = get_option('Joonbot_settings');

    // Check to see if Joonbot is enabled
    $joonbot_activated = false;
    if (esc_attr($options['joonbot_enabled']) == "on") {
        $joonbot_activated = true;
        wp_cache_flush();
    }

?>
    <div class="wrap">
        <form name="Joonbot-form" action="options.php" method="post" enctype="multipart/form-data">
            <?php
            settings_fields('Joonbot_settings_group');
            ?>

            <h1>Joonbot</h1>
            <h3>Basic Options</h3>
            <?php
            if (!$joonbot_activated) {
            ?>
                <div style="margin:10px auto; border:3px #f00 solid; background-color:#fdd; color:#000; padding:10px; text-align:center;">
                    Joonbot is currently <strong>DISABLED</strong>.
                </div>
            <?php
            }
            ?>
            <?php
            do_settings_sections('Joonbot_settings_group');
            ?>

            <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th width="30%" valign="top" style="padding-top: 10px;">
                        <label for="joonbot_enabled">Joonbot widget is:</label>
                    </th>
                    <td>
                        <?php
                        echo "<select name=\"Joonbot_settings[joonbot_enabled]\"  id=\"joonbot_enabled\">\n";

                        echo "<option value=\"on\"";
                        if ($joonbot_activated) {
                            echo " selected='selected'";
                        }
                        echo ">Enabled</option>\n";

                        echo "<option value=\"off\"";
                        if (!$joonbot_activated) {
                            echo " selected='selected'";
                        }
                        echo ">Disabled</option>\n";
                        echo "</select>\n";
                        ?>
                    </td>
                </tr>
            </table>
            <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th valign="top" style="padding-top: 10px;">
                        <label for="joonbot_widget_script">Joonbot widget script:</label>
                    </th>
                    <td>

                        <textarea type="text" name="Joonbot_settings[joonbot_widget_script]" placeholder="" rows="10" id="" cols="80">
                        <?php
                        echo esc_attr($options['joonbot_widget_script']);
                        ?>
                        </textarea>
                        <p style="margin: 5px 10px;">Enter your Joonbot widget script here. You can find your <a href="https://app.joonbot.com" target="_blank" title="Open Joonbot Settings">Joonbot widget script here</a>. A Free Joonbot account is required to use this plugin.</p>
                    </td>
                </tr>
            </table>
            <p class="submit">
                <?php
                echo submit_button('Save Changes');
                ?>
            </p>
    </div>
    </form>

<?php
}
?>