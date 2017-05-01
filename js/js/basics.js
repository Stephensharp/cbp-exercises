console.log("this is the external file talking.");

var value = null;
var type = null;

value = '123'; //assign value '123' into variable value
console.log(value); //prints 123 into the console
type = typeof value; //finds out that value is a string and assigns 'string' into type
console.log(type);

/*this ia a comment*/

value = 123;
console.log(value);
type = typeof value;
console.log(type);

value = '123 Times Square';
console.log(value); 
type = typeof value;
console.log(type);

value = 12.3; 
console.log(value); 
type = typeof value; 
console.log(type);

value = true; 
console.log(value); 
type = typeof value;
console.log(type);

value = 'true'; 
console.log(value);
type = typeof value;
console.log(type);

value = [1, 2, 3];
console.log(value);
type = typeof value;
console.log(type);

value = { foo: 'bar' };
console.log(value);
type = typeof value;
console.log(type);

value = document;
console.log(value);
type = typeof value;
console.log(type);

function say_hello() {
console.log("this is the external file talking.");
}
say_hello(); // call the function

function say_hello_to(whom) {
console.log('hello, ' + whom); //prints the result of putting together 'hello, ' and the argument
}
say_hello_to('universe');
say_hello_to('mom');
say_hello_to('class');

function print_type(document){
console.log(value);
}
print_type(document)

function print_type(value){
//console.log(value);
type = typeof value;
//console.log(type);
console.log('"The type of \'' + value + '\' is ' + type + '"');
}
print_type('123');
