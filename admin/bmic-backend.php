<?php 

add_action( 'admin_menu', 'BMIC_add_admin_menu' );
function BMIC_add_admin_menu(){
    add_menu_page(
        'BMI Calculator', // page <title>Title</title>
        'BMI Calculator', // link text
        'manage_options', // user capabilities
        'bmic_calculator', // page slug
        'bmic_calculator_callback_function', // this function prints the page content
        'dashicons-calculator', // icon (from Dashicons for example)
        60 // menu position
    );
}

function bmic_calculator_callback_function(){
    ?>
    <div class="bmicsettingmain">
         <div class="pagemaintitle">
            <h1><?php echo esc_html('BMI Calculator','bmi-calculator') ?></h1>
        </div>
        <ul class="nav-tab-wrapper woo-nav-tab-wrapper">
            <li class="nav-tab nav-tab-active" data-tab="bmic-tab-general">
                <?php echo __( 'General Settings', 'website-domain-checker' ); ?>
            </li>
        </ul>
       
        <form method="post">
            <div id="bmic-tab-general" class="tab-content">
                <div class="postbox">
                    <div class="inside">
                        <table class="form-table">
                            <tr>
                                <th><label><?php echo esc_html('BMI Calculator Types','bmi-calculator') ?></label></th>
                                <td>
                                    <select name="bmiselectcal">
                                        <option value="imperial" <?php selected('imperial',get_option('bmiselectcal')); ?>><?php echo esc_html('Imperial Only','bmi-calculator') ?></option>
                                        <option value="metric" <?php selected('metric',get_option('bmiselectcal')); ?>><?php echo esc_html('Metric Only','bmi-calculator') ?></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><label><?php echo esc_html('BMI Metric Calculator Title','bmi-calculator') ?></label></th>
                                <td><input type="text" name="bmi_metric_cal_title" readonly value="<?php echo esc_attr(get_option('bmi_metric_cal_title','BMI Metric Calculator')); ?>">
                                <label class="ttfcf7_common_link"><?php echo __('Some Options Are Only available in ','tool-tips-for-contact-form-7');?><a href="https://appcalculate.com/product/bmi-calculator/" target="_blank"><?php echo __('pro version','tool-tips-for-contact-form-7');?></a></label></td>

                            </tr>
                            <tr>
                                <th><label><?php echo esc_html('BMI Imperial Calculator Title','bmi-calculator') ?></label></th>
                                <td><input type="text" name="bmi_imp_cal_title" readonly value="<?php echo esc_attr(get_option('bmi_imp_cal_title','BMI Imperial Calculator')); ?>">
                                <label class="ttfcf7_common_link"><?php echo __('Some Options Are Only available in ','tool-tips-for-contact-form-7');?><a href="https://appcalculate.com/product/bmi-calculator/" target="_blank"><?php echo __('pro version','tool-tips-for-contact-form-7');?></a></label></td>
                            </tr>
                            <tr>
                                <th><label><?php echo esc_html('Reset Button Title','bmi-calculator') ?></label></th>
                                <td><input type="text" name="bmi_reset_btn_title" value="<?php echo esc_attr(get_option('bmi_reset_btn_title','Reset')) ?>"></td>
                            </tr>
                            <tr>
                                <th><label><?php echo esc_html('Calculator Background Color','bmi-calculator') ?></label></th>
                                <td><input type="text" class="color-picker" data-alpha="true" data-default-color="#ffffff" name="bmi_cal_bg_color" value="<?php echo esc_attr(get_option('bmi_cal_bg_color','#ffffff')); ?>"></td>
                            </tr>
                            <tr>
                                <th><label><?php echo esc_html('Calculator Border Color','bmi-calculator') ?></label></th>
                                <td><input type="text" class="color-picker" data-alpha="true" data-default-color="#289df6" name="bmi_cal_border_color" value="<?php echo esc_attr(get_option('bmi_cal_border_color','#289df6')); ?>"></td>
                            </tr>
                            <tr>
                                <th><label><?php echo esc_html('Calculator Reset Button Background Color','bmi-calculator') ?></label></th>
                                <td><input type="text" class="color-picker" data-alpha="true" data-default-color="#34b3dd" name="bmi_cal_reset_btn_bg_color" value="<?php echo esc_attr(get_option('bmi_cal_reset_btn_bg_color','#34b3dd')); ?>"></td>
                            </tr>
                            <tr>
                                <th><input type="hidden" name="bmiaction" value="bmisavesetting"></th>
                                <td><input type="submit" value="Update" class="button button-primary"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </form>
        <div>
            <p class="multical"><?php echo esc_html('Put this shortcode if you want to bring up BMI Calculator =>','bmi-calculator') ?><strong><?php echo esc_html('[BMIC-add-bmi-calculator]','bmi-calculator'); ?></strong></p>
        </div>
    </div>
    <?php
}

add_action('init','bmic_save_update_value_optionpage');
function bmic_save_update_value_optionpage(){
    if (isset($_REQUEST['bmiaction'])) {
        if ($_REQUEST['bmiaction'] == 'bmisavesetting') {
             update_option('bmiselectcal', sanitize_text_field($_REQUEST['bmiselectcal']));
             update_option('bmi_cal_bg_color', sanitize_text_field($_REQUEST['bmi_cal_bg_color']));
             update_option('bmi_cal_reset_btn_bg_color', sanitize_text_field($_REQUEST['bmi_cal_reset_btn_bg_color']));
             update_option('bmi_metric_cal_title', sanitize_text_field($_REQUEST['bmi_metric_cal_title']));
             update_option('bmi_imp_cal_title', sanitize_text_field($_REQUEST['bmi_imp_cal_title']));
             update_option('bmi_cal_border_color', sanitize_text_field($_REQUEST['bmi_cal_border_color']));
             update_option('bmi_reset_btn_title', sanitize_text_field($_REQUEST['bmi_reset_btn_title']));
        }
    }
}