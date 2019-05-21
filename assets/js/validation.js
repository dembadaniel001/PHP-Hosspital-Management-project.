$(function(){
	// TEXTOXES VARIABLES DECLARED HERE .
	var fname = $("#fName");
    var lname = $("#Lname");
    var sname = $("#SName")
    var date = $("#date");
    var nhifNumber = $("#nhifNumber");
    var kraNumber = $("#kraNumber");
    var email = $("#email");
    var phone = $("#phone");
	var birthCertNumber = $("#birthCertNumber");
    var residence = $("#residence");
    
    
    //ERROR MESSAGES VARIABLES DECLARED .
    var FNameError = $("#FNameError");
    var LNameError = $("#LNameError");
    var SNameError = $("#SNameError");
    var BirthCertificateNoError = $("#BirthCertificateNoError");
    var NHIFNoError = $("#NHIFNoError");
    var KRANoError = $("#KRANoError");
    var EmailError = $("#EmailError");
    var ResidenceError = $("#ResidenceError");
    var phoneError= $("#phoneError");
    function verifyNames(name,error,message){
        var pattern = [a-zA-Z];
          name.on('blur', function(){
		if(name.val().length == 0){
		   error.text(message);
		    name.focus();
		    name.addClass('is-invalid');
		}
        else if (!(pattern.test(name))){
                 error.message("Invalid Name .");
                 }      
        else{
          error.empty();
            name.addClass('was-validated');
        };
	}); 
        
    };
    
   verifyNames(fname,FNameError,"Enter First Name ."); 
   verifyNames(lname, LNameError,"Enter Second Name ."); 
   verifyNames(sname, SNameError, "Enter Sur Name ."); 
    verifyNames(residence, ResidenceError, "Enter Residence ."); 
    
    
	// VALIDAING THR BIRTH CERTIFICATE NUMBER .
    
//     birthCertNumber.on('blur', function(){
//         if((trim((birthCertNumber.val()))).length == 0){
//              birthCertNumber.addClass('is-invalid');
//              birthCertNumber.focus();
//             BirthCertificateNoError.text("Birth Certificate Number cannot be Empty.");  
//            }
//          if(!isNumeric((trim((birthCertNumber.val())))){
//                  birthCertNumber.addClass('is-invalid');
//                  birthCertNumber.focus();
//                  BirthCertificateNoError.text("Non Numeric Values Not Accepted .");  
//                 }
//        if(trim((birthCertNumber.val())).isNumeric) && birthCertNumber.val().length >=1){
//           BirthCertificateNoError.empty();
//           birthCertNumbe.addClass('was-validated');
//           }
//     });
    
});