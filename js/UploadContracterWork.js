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
var messagesRef = firebase.database().ref('workload');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
    var ContractorName = getInputVal('name');
  var Area = getInputVal('work');
  var Zipcode = getInputVal('zip');
  var CommenceDate = getInputVal('datein');
  var Completedate = getInputVal('dateout');
  

  // Save message
  saveMessage(ContractorName,Area,Zipcode, CommenceDate, Completedate);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(ContractorName,Area,Zipcode, CommenceDate, Completedate){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
      Area: Area,
      CommenceDate:CommenceDate,
    Completedate:Completedate,
    ContractorName : ContractorName,
      
    Zipcode:Zipcode,
    
      
//    message:message
  });
}