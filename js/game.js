Utils = {
	preloadImage: function(imgSrc, callback) {
		var image = new Image();
		image.onload = function() {
			if(callback)
				callback();
		}
		image.src = imgSrc;

		return image;
	}	
};

/*---------------------------------*/

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

	this.squares = new Array();
	this.ready   = false;
	this.canvas  = document.getElementById('road');
	this.canvas.width  = this.container.width();
	this.canvas.height = this.container.height();
	this.context = this.canvas.getContext('2d');

	function prepare() {
		var deferred = $.Deferred();

		var numberSquare = 8;
		var prefixSquareName = "square";
		var suffixSquareName = ".jpg";
		var directoryImage = "./images/";

		var numberLoaded = 0;
		var callbackPreload = function() {
			numberLoaded++;
			if(numberLoaded >= numberSquare) {
				this.ready = true;
				
				deferred.resolve();
			}
		};

		for(var i=1; i<= numberSquare; i++) {
			this.squares.push(Utils.preloadImage(directoryImage + prefixSquareName + i + suffixSquareName, callbackPreload.bind(this)));
		}

		return deferred.promise();
	}

	this.start = function() {
		prepare.bind(this)().then(function() {
		}.bind(this));
	}
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

	driver.start();
});