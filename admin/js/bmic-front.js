jQuery(document).ready(function() {
	//console.log('go go go');
	
	/*Metric Calculator*/
	
	jQuery(".bmi_met_cal").on("input", function(){
		var bmiheight = jQuery('#bmi_height').val();
		var bmiweight = jQuery('#bmi_weight').val();
		var form = jQuery('#bmi_calculator').val();
		var bmiage = jQuery('#bmi_age').val();
		// var bmigender = jQuery('input[name="bmi_gender"]:checked').val();
		 console.log(bmiage);
		// var mivalue = [bmiheight,bmiweight];
		if (21 <= bmiage) {

			//jQuery(form).trigger("reset");	
			// var bmi = Number(mivalue[2])/(Number(mivalue[1])/100*Number(mivalue[1])/100);
			var bmi = (bmiweight / ((bmiheight * bmiheight) / 10000)).toFixed(2);
			//console.log(bmi);
			var result = '';
			if(bmi<16){
			    result = 'Severe Thinness';
			    jQuery('.yourbmirank').text(bmi).css('color','deepskyblue');
			}else if(16<=bmi&&bmi<=17){
			    result = 'Moderate Thinness';
			    jQuery('.yourbmirank').text(bmi).css('color','deepskyblue');
			}else if(17<=bmi&&bmi<=18.5){
			    result = 'Mild Thinness';
			    jQuery('.yourbmirank').text(bmi).css('color','deepskyblue');
			}else if(18.5<=bmi&&bmi<=24.9){
			    result = 'Healthy';
			    jQuery('.yourbmirank').text(bmi).css('color','green');
			}else if(25<=bmi&&bmi<=29.9){
			    result = 'Overweight';
			    jQuery('.yourbmirank').text(bmi).css('color','yellow');
			}else if(30<=bmi&&bmi<=34.9){
			    result = 'Obese Class I';
			     jQuery('.yourbmirank').text(bmi).css('color','#ffc107');
			}else if(35<=bmi&&bmi<=39.9){
			    result = 'Obese Class II';
			    jQuery('.yourbmirank').text(bmi).css('color','#ff9800');
			}else if(40<=bmi){
			    result = 'Obese Class III';
			    jQuery('.yourbmirank').text(bmi).css('color','#f44336');
			}
		}else{
			jQuery('.yourbmirank').text('');
			jQuery('.yourbmiclaculate').text('');
		}
		if (bmiage <= 20) {
			var bmi = (bmiweight / ((bmiheight * bmiheight) / 10000)).toFixed(2);
			var result = '';
			if (bmi<5) {
				result = 'Underweight';
				jQuery('.yourbmirank').text(bmi).css('color','deepskyblue');
			}else if (5<=bmi&&bmi<=85) {
				result = 'Healthy weight';
				 jQuery('.yourbmirank').text(bmi).css('color','green');
			}else if (85<=bmi&&bmi<=95) {
				result = 'At risk of overweight';
				jQuery('.yourbmirank').text(bmi).css('color','yellow');
			}else if (95<=bmi) {
				result = 'Overweight';
				jQuery('.yourbmirank').text(bmi).css('color','#f44336');
			}
		}else{
			jQuery('.yourbmirank').text('');
			jQuery('.yourbmiclaculate').text('');
		}

		jQuery('.yourbmirank').text(bmi);
		jQuery('.yourbmiclaculate').text(result);
	
	})

	jQuery('#bmiresetval').on('click',function(){
		jQuery('#bmi_height').val("");
		jQuery('#bmi_weight').val("");
		 jQuery('#bmi_age').val("");
		// jQuery('input[name="bmi_gender"]:checked').val("");
		 jQuery('.yourbmimaindiv div').empty();
	})

	/*Imperial Calculator*/
	jQuery(".bmi_imp_val").on("input", function(){
		var bmiimpage = jQuery('#bmi_imp_age').val();
		var impweight = jQuery('#bmi_imp_weight').val();
		var impinches = jQuery('#bmi_imp_inches').val();
		//console.log(impheight +impweight+  impinches);
		if (21 <= bmiimpage) {
			var imp_bmi = ([impweight / (impinches * impinches)] * 703).toFixed(2) ;
		// console.log(imp_bmi);
		
		// var result = '';
		// if(imp_bmi<18.5){
		//     result = 'Underweight';
		// }else if(18.5<=imp_bmi&&imp_bmi<=24.9){
		//     result = 'Healthy';
		// }else if(25<=imp_bmi&&imp_bmi<=29.9){
		//     result = 'Overweight';
		// }else if(30<=imp_bmi&&imp_bmi<=34.9){
		//     result = 'Obese';
		// }else if(35<=imp_bmi){
		//     result = 'Extremely obese';
		// }

		// jQuery('.yourbmirank').text(imp_bmi);
		// jQuery('.yourbmiclaculate').text(result);

		var result = '';
			if(imp_bmi<16){
			    result = 'Severe Thinness';
			    jQuery('.yourbmirank').text(imp_bmi).css('color','deepskyblue');
			}else if(16<=imp_bmi&&imp_bmi<=17){
			    result = 'Moderate Thinness';
			    jQuery('.yourbmirank').text(imp_bmi).css('color','deepskyblue');
			}else if(17<=imp_bmi&&imp_bmi<=18.5){
			    result = 'Mild Thinness';
			    jQuery('.yourbmirank').text(imp_bmi).css('color','deepskyblue');
			}else if(18.5<=imp_bmi&&imp_bmi<=24.9){
			    result = 'Healthy';
			    jQuery('.yourbmirank').text(imp_bmi).css('color','green');
			}else if(25<=imp_bmi&&imp_bmi<=29.9){
			    result = 'Overweight';
			    jQuery('.yourbmirank').text(imp_bmi).css('color','yellow');
			}else if(30<=imp_bmi&&imp_bmi<=34.9){
			    result = 'Obese Class I';
			     jQuery('.yourbmirank').text(imp_bmi).css('color','#ffc107');
			}else if(35<=imp_bmi&&imp_bmi<=39.9){
			    result = 'Obese Class II';
			    jQuery('.yourbmirank').text(imp_bmi).css('color','#ff9800');
			}else if(40<=imp_bmi){
			    result = 'Obese Class III';
			    jQuery('.yourbmirank').text(imp_bmi).css('color','#f44336');
			}
		}else{
			jQuery('.yourbmirank').text('');
			jQuery('.yourbmiclaculate').text('');
		}
		if (bmiimpage <= 20) {
			var imp_bmi = ([impweight / (impinches * impinches)] * 703).toFixed(2) ;
			var result = '';
			if (imp_bmi<5) {
				result = 'Underweight';
				jQuery('.yourbmirank').text(imp_bmi).css('color','deepskyblue');
			}else if (5<=imp_bmi&&imp_bmi<=85) {
				result = 'Healthy weight';
				 jQuery('.yourbmirank').text(imp_bmi).css('color','green');
			}else if (85<=imp_bmi&&imp_bmi<=95) {
				result = 'At risk of overweight';
				jQuery('.yourbmirank').text(imp_bmi).css('color','yellow');
			}else if (95<=imp_bmi) {
				result = 'Overweight';
				jQuery('.yourbmirank').text(imp_bmi).css('color','#f44336');
			}
		}else{
			jQuery('.yourbmirank').text('');
			jQuery('.yourbmiclaculate').text('');
		}

		jQuery('.yourbmirank').text(imp_bmi);
		jQuery('.yourbmiclaculate').text(result);

	})
	jQuery('#impcresetval').on('click',function(){
		jQuery('#bmi_imp_weight').val("");
		jQuery('#bmi_imp_inches').val("");
		// jQuery('#bmi_age').val("");
		// jQuery('input[name="bmi_gender"]:checked').val("");
		 jQuery('.yourbmimaindiv div').empty();
	})
});