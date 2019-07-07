/*
$(function() {
	console.log($('form').html());
	$('#results').prepend('<h1>Howdy es6 pardners!</h1>');
});
*/

class Person {
	constructor(name) {
		this.name = name
	}

	printNameArrow() {
		setTimeout(() => {
			console.log('Arrow: ' + this.name)
		}, 100)
	}
	
	printNameFunction() {
		setTimeout(function() {
			console.log('Function: ' + this.name)
		}, 100)
	}
}

let person = new Person('Bob')
person.printNameArrow()
person.printNameFunction()


/********************** async await **************************/
const fetch = require('node-fetch')

function fetchAvatarUrl(userId) {
	
}