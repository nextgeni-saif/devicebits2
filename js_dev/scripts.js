$(document).ready(function() {

// Main Button - Highlight every .5 second
// http://stackoverflow.com/questions/10094756/how-to-add-and-remove-a-class-in-jquery-every-4-seconds
// var $mainButton = $(".main-button");
// setInterval(function(){
//     $mainButton.toggleClass("show");
// }, 500);


// Main Button - On hovering, remove class to stop animation and show static highlighting, on hover out add class back to resume highlight animation
$(".main-button").hover(function(e){
	$(this).removeClass('show');
}, function(e){
	$(this).addClass('show');
});


function steps(step) {
	$('.tutorial-steps-list li').removeClass('active');
	$('#step_'+step).addClass('active');
	if (step == 1) {
		$('#btnBack').addClass('disabled');
	}

	if (currentStep == 1) {
		$('#btnBack').addClass('disabled');
		$('#btnFirst').addClass('disabled');
	}

	if (currentStep == totalSteps-1) {
		$('#btnNext').addClass('disabled');
		$('#btnLast').addClass('disabled');
	}

}


$('.main-button').click(function(){
	steps($(this).attr('data-step'));
	currentStep = parseInt($(this).attr('data-step'));
	console.log(currentStep);
	nextStep = currentStep+1;
	$('#btnNext').attr('data-target', '#screen_'+currentStep);
});

$('#btnFirst, #btnLast').click(function(){
	steps($(this).attr('data-step'));
	currentStep = parseInt($(this).attr('data-step'));
	console.log(currentStep);
	nextStep = currentStep+1;
	$('#btnNext').attr('data-target', '#screen_'+currentStep);
});



$('#btnNext').click(function(){
	$('#btnNext').attr('data-target', '#screen_4');
	// $('#screen_3').tab('show');
	// steps(currentStep+1);
	// currentStep = currentStep +1;
	// console.log(currentStep);
	// nextStep = currentStep+1;
	// $('#btnNext').attr('data-target', '#screen_'+currentStep);
	// $(this).attr('data-step').val($(this).attr('data-step')+1)
});

console.log(currentStep);

if (currentStep == 1) {
	$('#btnBack').addClass('disabled');
	$('#btnFirst').addClass('disabled');
}

if (currentStep == totalSteps) {
	$('#btnNext').addClass('disabled');
	$('#btnLast').addClass('disabled');
}


});
