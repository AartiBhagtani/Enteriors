$(document).ready(function(){
var rootRef = firebase.database().ref();
rootRef.on("child_added",function(data){
  var name = data.child("name").val();
  var email = data.child("email").val();
  var phone = data.child("phone").val();
  var location = data.child("location").val();
  var area = data.child("area").val();
  var textarea = data.child("textarea").val();
/*
  $('#table_body').append(
  "<tr><td>" + name + "</td><td>" + email +
  "</td><td><button>remove</button></td>");
});
*/
  $('#table_body').append(
    "<tr><td>" + name + "</td>"+
    "<td>" + email +"</td>"+
    "<td>" + phone +"</td>"+
    "<td>" + location +"</td>"+
    "<td>" + area +"</td>"+
    "<td>" + textarea +"</td>");});
});
