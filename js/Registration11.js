// Initialize Firebase (ADD YOUR OWN DATA)
// Initialize Firebase
//  var config = {
//    apiKey: "AIzaSyA-OsXh94uLy7s_qe9TjO5KzwGgwO9-r-E",
//    authDomain: "sih2018-8f87f.firebaseapp.com",
//    databaseURL: "https://sih2018-8f87f.firebaseio.com",
//    projectId: "sih2018-8f87f",
//    storageBucket: "sih2018-8f87f.appspot.com",
//    messagingSenderId: "885370490713"
//  };
//  firebase.initializeApp(config);

// Reference messages collection
var messagesRef = firebase.database().ref('AgencyRegistration');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);
//var selectedValue;
//function OnDropDownChange(dropDown) {
//         selectedValue = dropDown.options[dropDown.selectedIndex].value;
//      }

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var name = getInputVal('name');
  var email = getInputVal('email');
  var password = getInputVal('password');
    var repassword = getInputVal('repassword');
    var phone = getInputVal('phone');
    var zip = getInputVal('zip');
  var city = getInputVal('city');
  var noOfLabour = getInputVal('noOfLabour');
  var noOfSkilledLabour = getInputVal('noOfSkilledLabour');
  var address = getInputVal('address');
//  var address = getInputVal('address');


//  var message = getInputVal('message');

  // Save message
  saveMessage(name ,email, password, repassword,phone,zip, city,noOfLabour,noOfSkilledLabour,address);

  // Show alert
  // document.querySelector('.alert').style.display = 'block';
  //
  // // Hide alert after 3 seconds
  // setTimeout(function(){
  //   document.querySelector('.alert').style.display = 'none';
  // },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(name ,email, password, repassword,phone,zip,city,noOfLabour,noOfSkilledLabour,address){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
name : name,
    firstname:email,
//    lastname:lastname,
    password : password,

    repassword:repassword,
    phone : phone,
    zip : zip,
    city : city,
      noOfLabour : noOfLabour,
      noOfSkilledLabour : noOfSkilledLabour,
    address : address,
//    education : education,
//    description : description,
//    computer : computer,
//    message:message
  });
}
