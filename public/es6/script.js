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


/********************** map filter & arrow functions **************************/
var animals = [
	{name: 'Fluffykins', species: 'rabbit' },
	{name: 'Caro', species: 'dog' },	
	{name: 'Hamilton', species: 'dog' },
	{name: 'Harold', species: 'fish' },	
	{name: 'Ursula', species: 'cat' },
	{name: 'Jimmy', species: 'fish' },	
]

/*
var names = []
for(var i =0; i < animals.length; i++) {
	names.push(animals[i].name)
}
*/
/*
var names = animals.map(function(animal) {
	return animal.name + ' is a ' + animal.species
})
*/
// var names = animals.map((x) => x.name + ' is a ' + x.species )
// 	return animal.name + ' is a ' + animal.species )

// console.log(names)


/*
var isDog = (animal) => animal.species === 'dog'
var dogs = animals.filter(isDog)
*/
dogs = animals.filter((x) => x.species === 'dog' ? console.log(x.name + ' is a ' + x.species) : '')
notDogs = animals.filter((x) => x.species != 'dog' ? console.log(x.name + ' is a ' + x.species) : '')
// var otherAnimals = animals.reject(isDog)
// dogs = dogs.map( (x) => console.log(x.name))

// dogs = dogs.map( (x) => document.getElementById('results').append(x.name))
// consolIt = dogs.map( (x) => console.log(x.name))

/********************** END map filter & arrow functions **************************/


/********************** async await **************************/



/********************** END async await **************************/