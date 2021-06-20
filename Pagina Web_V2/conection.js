function registrar(){
    var email = document.getElementById('correo').value;
    var contra = document.getElementById('contrasena').value;

    console.log(email);
    console.log(contra);

    firebase.auth().createUserWithEmailAndPassword(email, contra)
  .then((userCredential) => {

    // Signed in
    var user = userCredential.user;
    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    // ..
  });
}
function iniciar(){
    var email2 = document.getElementById('email2').value;
      var contra2 = document.getElementById('contra2').value;
  
      console.log(email2);
      console.log(contra2);
  
    firebase.auth().signInWithEmailAndPassword(email2, contra2)
    .then((userCredential) => {
      // Signed in
      var user = userCredential.user;
      console.log('Bienvenido ' + email2);
      // ...
    })
    .catch((error) => {
      var errorCode = error.code;
      var errorMessage = error.message;
    });
  }