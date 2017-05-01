console.log(document);
var my_button = document.getElementById('the-button');
console.log(my_button);

var message_element = document.getElementById('message');
console.log(message_element);
console.log(typeof message_element);

console.log(message_element.innerHTML);

console.log(my_button.innerHTML);

// message_element.innerHTML = '<em>something</em> happened'; //asign new values to document

console.log(message_element.innerHTML);

function change_html(){
message_element.innerHTML = '<em>something</em> happened';
}
// change_html()
var button_counter = 0
function increase_counter() {

button_counter = button_counter + 1; //same as below
button_counter++; //same as above and below
button_counter += 1; //same as above

    var message = 'this button was clicked ' + button_counter + ' times';
    message_element.innerHTML = '';

    var button = document.getElementById('counter_button');

    button.innerHTML = message;

}
