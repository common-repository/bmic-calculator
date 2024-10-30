<?php 
function BMIC_add_bmi_calculator(){
	ob_start();
	?>
	<style>
		.form {
			background-color: <?php echo esc_attr(get_option('bmi_cal_bg_color','#ffffff')); ?>;
			border: solid 1px <?php echo esc_attr(get_option('bmi_cal_border_color','#289df6')); ?>;
		}
		input#impcresetval , input#bmiresetval {
			background-color: <?php echo esc_attr(get_option('bmi_cal_reset_btn_bg_color')); ?>;
		}
	</style>
	<div class="bmicalculatormain">
		<?php if(get_option('bmiselectcal') == 'metric'){ ?>
		<div class="Metric_calcultor">
			<div class="bmi_cal_heading">
				<h2><?php echo get_option('bmi_metric_cal_title','BMI Metric Calculator'); ?></h2>
			</div>
			<form method="post" name="bmi_calculator" class="form">
				<table class="bmitable">
					<tr>
						<th><?php echo esc_html('Age','bmi-calculator'); ?></th>
						<td><input type="text" name="bmi_age" id="bmi_age" class="bmi_met_cal" placeholder="Your Age"></td>
					</tr>
					<tr>
						<th><?php echo esc_html('Height','bmi-calculator'); ?></th>
						<td><input type="tel" name="bmi_height" id="bmi_height" class="bmi_met_cal" placeholder="Cm"></td>
					</tr>
					<tr>
						<th><?php echo esc_html('Weight','bmi-calculator'); ?></th>
						<td><input type="tel" name="bmi_weight" id="bmi_weight" class="bmi_met_cal" placeholder="Kg"></td>
					</tr>
					<tr class="resetbtn">
						<th></th>
						<td><input type="button" name="" id="bmiresetval" value="<?php echo esc_attr(get_option('bmi_reset_btn_title','Reset')) ?>"></td>
					</tr>
					
				</table>
			</form>
		</div>
		<?php } if(get_option('bmiselectcal') == 'imperial'){ ?>
		<div class="imperial_calculator">
			<div class="bmi_cal_heading">
				<h2><?php echo get_option('bmi_imp_cal_title','BMI Imperial Calculator'); ?></h2>
			</div>
			<form method="post" class="form">
				<table class="bmitable">
					<tr>
						<th><?php echo esc_html('Age','bmi-calculator'); ?></th>
						<td><input type="text" name="bmi_imp_age" id="bmi_imp_age" class="bmi_imp_val" placeholder="Your Age"></td>
					</tr>
					<tr>
						<th><label><?php echo esc_html('Height','bmi-calculator'); ?></label></th>
						<!-- <td><input type="tel" name="bmi_imp_height" id="bmi_imp_height" class="bmi_imp_val"><strong class="bmitags">Ft</strong></td> -->
						<td><input type="tel" name="bmi_imp_inches" id="bmi_imp_inches" class="bmi_imp_val" placeholder="In"></td>
					</tr>
					<tr>
						<th><label><?php echo esc_html('Weight','bmi-calculator'); ?></label></th>
						<td><input type="tel" name="bmi_imp_weight" id="bmi_imp_weight" class="bmi_imp_val" placeholder="Lbs"></td>
					</tr>
					<tr class="resetbtn">
						<th></th>
						<td><input type="button" name="" id="impcresetval" value="<?php echo esc_attr(get_option('bmi_reset_btn_title','Reset')) ?>"></td>
					</tr>
					
				</table>
			</form>
		</div>
		<?php } ?>
	</div>
	<div class="yourbmimaindiv">
		<div class="yourbmirank"></div>
		<div class="yourbmiclaculate"></div>
	</div>
	<?php
		$output = ob_get_contents();
        ob_end_clean();
        return $output;
}
add_shortcode('BMIC-add-bmi-calculator','BMIC_add_bmi_calculator');