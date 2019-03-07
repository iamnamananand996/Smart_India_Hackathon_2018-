// Initialize Firebase (ADD YOUR OWN DATA)
// Initialize Firebase
  var config = {
    apiKey: "AIzaSyCsdP_eRVqXCj1b6pl1HchKOsBa9YPXBUg",
    authDomain: "sih2018-c5f85.firebaseapp.com",
    databaseURL: "https://sih2018-c5f85.firebaseio.com",
    projectId: "sih2018-c5f85",
    storageBucket: "sih2018-c5f85.appspot.com",
    messagingSenderId: "482251589"
  };
  firebase.initializeApp(config);

// Reference messages collection
var messagesRef = firebase.database().ref('workers');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);
var selectedValue;
function OnDropDownChange(dropDown) {
         selectedValue = dropDown.options[dropDown.selectedIndex].value;
      }

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var WorkerName = getInputVal('WorkerName');
  var Categories = getInputVal('Categories');
  var Expirence = getInputVal('Expirence');
    var Age = getInputVal('Age');
    var Gender = getInputVal('Gender');
    var Wages = getInputVal('Wages');
//  var village = getInputVal('village');
//  var state = getInputVal('state');
//  var district = getInputVal('district');
//  var pincode = getInputVal('pincode');
//  var address = getInputVal('address');


//  var message = getInputVal('message');

  // Save message
  saveMessage( WorkerName, Categories ,Expirence , Age , Gender ,Wages);

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
function saveMessage(WorkerName, Categories ,Expirence , Age , Gender ,Wages){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
//contact : contact,
    WorkerName:WorkerName,
    Categories:Categories,
    Expirence : Expirence,

    Age:Age,
    Gender : Gender,
    Wages : Wages,
//    address : address,
//    selectedValue : selectedValue,
//    education : education,
//    description : description,
//    computer : computer,
//    message:message
  });
}
