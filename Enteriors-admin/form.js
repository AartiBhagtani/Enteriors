var fullname = document.getElementById('name');
//var lastName = document.getElementById('lastName');
var phone = document.getElementById('phone');
var email = document.getElementById('email');
var area = document.getElementById('area');
var textarea = document.getElementById('textarea');
var rooms = document.getElementById('rooms');
var rooms1 = document.getElementById('rooms1');
console.log(fullname);

function submit(){
  var location = document.getElementById('location');
  // Get a reference to the database service - path to root
  var database = firebase.database().ref();
  //window.alert("working");
  var name = fullname.value;
  var phones = phone.value;
  var emails = email.value;
  var locations = location.value;
  var areas = area.value;
  var textareas = textarea.value;
  //var room = rooms.value;
  //var room1 = rooms1.value;

  database.push({
      name: name,
      phone: phones,
      email: emails,
      area: areas,
      location: locations,
      textarea: textareas
      //rooms: room,
      //rooms1: room1
  });
  console.log(name);
  alert("submitted successfully");
}
