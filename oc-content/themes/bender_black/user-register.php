<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2014 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */

    // meta tag robots
    osc_add_hook('header','bender_black_nofollow_construct');

    bender_black_add_body_class('register');
    osc_enqueue_script('jquery-validate');
    osc_current_web_theme_path('header.php') ;
?>
<div class="form-container form-horizontal form-container-box">
    <div class="header">
        <h1><?php _e('Register an account for free', 'bender_black'); ?></h1>
    </div>
    <div class="resp-wrapper">
        <form name="register" action="<?php echo osc_base_url(true); ?>" method="post" >
            <input type="hidden" name="page" value="register" />
            <input type="hidden" name="action" value="register_post" />
            <ul id="error_list"></ul>
            <div class="control-group">
                <label class="control-label" for="name"><?php _e('Name', 'bender_black'); ?></label>
                <div class="controls">
                    <?php UserForm::name_text(); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="email"><?php _e('E-mail', 'bender_black'); ?></label>
                <div class="controls">
                    <?php UserForm::email_text(); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password"><?php _e('Password', 'bender_black'); ?>*</label>
                <div class="controls">
                    <?php UserForm::password_text(); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password-2"><?php _e('Repeat password', 'bender_black'); ?></label>
                <div class="controls">
                    <?php UserForm::check_password_text(); ?>
                    <p id="password-error" style="display:none;">
                        <?php _e("Passwords don't match", 'bender_black'); ?>
                    </p>
                </div>
            </div>
            <?php osc_run_hook('user_register_form'); ?>
            <div class="control-group">
                <div class="controls">
                    <?php osc_show_recaptcha('register'); ?>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="ui-button ui-button-middle ui-button-main"><?php _e("Create", 'bender_black'); ?></button>
                </div>
            </div>
            <h4 class="form-text">* We recommend not using a password you use on any other site.</h4>
        </form>
    </div>
</div>
<?php UserForm::js_validation(); ?>
<?php osc_current_web_theme_path('footer.php') ; ?>