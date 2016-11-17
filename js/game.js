function CommonWrapper(element) {
	this.container = $('#'+element);
	this.show = function() {
		this.container.show();
	}

	this.hide = function() {
		this.container.hide();
	}
}


/*---------------------------------*/
function Driving(element) {
	CommonWrapper.call(this, element);
}

/*---------------------------------*/
function Conclusion(element) {
	CommonWrapper.call(this, element);	
}

/*---------------------------------*/
function Question(element) {
	CommonWrapper.call(this, element);	
}

/*---------------------------------*/

var driver     = new Driving('animationContainer');
var conclusion = new Conclusion('conclusionContainer');
var question   = new Question('questionContainer');

$(document).ready(function() {
	driver.show();
	conclusion.show();
	question.show();
});