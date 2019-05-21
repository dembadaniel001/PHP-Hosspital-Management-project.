$(function(){
	// GETTING THE TEXTBOXES INVOLVED.
	console.log("JAVASCRIPT HAS BEEN SUCCESSFULLY LOADED.");
	
	// DEFINING THE TEXTBOXES INVOLVED .
	
	var firstName = $("#fName");
	var lastName = $("#Lname");
	var surName = $("#SName");
	var date = $("#date");
	var birthCertNumber = $("#birthCertNumber");
	var nhifNumber = $("#nhifNumber");
	var kraNumber= $("#kraNumber");
	var phone = $("#phone");
	var residence = $("#residence");
	var email = $("#email");
	var callTime = $("#callTime");
	var submit = $("#submit");
	
	// ERROR MESSAGE SPANS DEFINITIONS.
	
	var FNameError = $("#FNameError"); 
	var LNameError = $("#LNameError");
	var SNameError = $("#SNameError");
	var BirthCertificateNoError = $("#BirthCertificateNoError");
	var NHIFNoError = $("#NHIFNoError");
	var KRANoError = $("#KRANoError");
	var EmailError = $("#EmailError");
	var ResidenceError= $("#ResidenceError");
	var phoneError = $("#phoneError");
	var dateError = $("#dateError");
	// DEFINiG THE FLAGS TO BE USED.
	var firstNameFlag = false;
	var lastNameFlag = false;
	var surNameFlag = false;
	var dateFlag = false;
	var kraFlag = false;
	var birthCertFlag = false;
	var NhifFlag = false;
	var phoneFlag = false;
	// THE ON BLUR METHOD THAT IS USED TO VALIDATE THE FIRST NAME.
	//   ***********************************************************************************************
	//***************************************************************************************************
	firstName.on('blur',function(){
		
		
		// Validating the first Name field.	
		
          var firstNameValue = firstName.val();		
		if(firstNameValue.length == 0){
			console.log("Empty FirstName Field.");
			FNameError.text("First Name Field Cannot Be Empty.");			
			firstName.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});		
            firstNameFlag = true;             			
		}
		else{
			console.log("Not Empty.");
			if(!(isNaN(firstNameValue))){
		        console.log("firstName is numbers.");
				FNameError.text("FirstName cannot be numbers.");			
				firstName.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});	
			firstNameFlag = true;
			}
			else{					
       			console.log("FirstName Field is fine.");				 
				 firstName.css({
					 'border':'2px solid green',
					 'background-color': '#cbe6b6'
				 });
				 FNameError.text(" ");
			    firstNameFlag = false;
			}
		}
		
		
		
	});
	
	

	
	
	//##################################################################################################
	
	
	//***************************************************************************************************
	//****************************************************************************************************
	
	
	// THE ONBLUR METHOD THAT IS USED TO VALIDATE THE LAST NAME FIELD.
	
	lastName.on('blur', function(){
				// Validating the first Name field.	
		
         var lastNameValue = lastName.val();		
		if(lastNameValue.length == 0){
			console.log("Empty LastName Field.");
			LNameError.text("Last Name Field Cannot Be Empty.");			
			lastName.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});		
            lastNameFlag = true;             			
		}
		else{
			console.log(" Last Name Not Empty.");
			if(!(isNaN(lastNameValue))){
		        console.log("Last Name is numbers.");
				LNameError.text("Last Name cannot be numbers.");			
				lastName.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});	
			lastNameFlag = true;
			}
			else{					
       			console.log("Last Name Field is fine.");				 
				 lastName.css({
					 'border':'2px solid green',
					 'background-color': '#cbe6b6'
				 });
				 LNameError.text("");			
			    lastNameFlag = false;
			}
		}
		
		
	});
	
	
	//#######################################################################################################################
	
	
	//**************************************************************************
	//**************************************************************************
	
	
	// The validation of the sur name text field .
	surName.on('blur', function(){
				// Validating the first Name field.	
		
         var surNameValue = surName.val();		
		if(surNameValue.length == 0){
			console.log("Empty surName Field.");
			SNameError.text("Sur Name Field Cannot Be Empty.");			
			surName.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});		
            surNameFlag = true;             			
		}
		else{
			console.log(" Sur Name Not Empty.");
			if(!(isNaN(surNameValue))){
		        console.log("Last Name is numbers.");
				SNameError.text("sur Name cannot be numbers.");			
				surName.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});	
			surNameFlag = true;
			}
			else{					
       			console.log("Sur Name Field is fine.");				 
				 surName.css({
					 'border':'2px solid green',
					 'background-color': '#cbe6b6'
				 });
				 SNameError.text("");			
			    surNameFlag = false;
			}
		}
		
		
	});
	
		// THE ON FOCUS METHOD THAT IS RUN WHEN THE FIELD GAINS FOCUS.
	

	
	
	//###########################################################################
	
	//VALIDATINGG THE DATE FIELD.
	
	date.on('blur',function(){
		var dateValue = date.val();
		if(dateValue.length == 0){
			console.log('Empty date value.');
			dateError.text("The date is empty.");
			date.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});	
			dateFlag = true;
		}
		else{
			date.css({
				'border':'1px solid green',
				'background-color': '#cbe6b6'
			});	
			dateError.text("");
		}
	});
	
	

	//###########################################################################
	
	
	// VALIDATING THE NHIF NUMBER, KRA NUMBER , BIRTH CERTIFICATE NUMBEER FIELDS.
	
	// FUNCTION IS HERE.
	
	function validateNumbers(Number,message1,message2,Error,Flag){
			NumberValue = Number.val();
		if(NumberValue.length == 0){
			console.log(message1);
			Error.text(message1);
			Number.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			Error.css({
					'color':'red'
				});
			Flag = true;
		}
		else{
			if(isNaN(Number.val())){
				console.log(message2);
				Error.text(message2);
				Error.css({
					'color':'red'
				});
				Number.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			Flag = true;
			}
			else{
				Number.css({
				'border':'1px solid green',
				'background-color': '#cbe6b6'
			});	
			Error.text("");
			Flag = false;
			}
		}
	}
	
	// Function to clear numerical data.
	
	    function clearNumericalData(Number,){
		
		console.log("FOCUS GAINED.");
		date.css({
			'border':'1px solid gray',
				'background-color': 'white'
		});
		console.log("Gray attained.");
		date.val("");
	    dateError.text("");
		}

	
	// Validate kra number.
	
	/* kraNumber.on('blur',function(){
		validateNumbers(kraNumber,'KRA number cannot be Empty.','KRA number should only be numeric',KRANoError,kraFlag);
	}); */
	
	
	kraNumber.on('blur',function(){
					kraNumberValue = kraNumber.val();
		if(kraNumberValue.length == 0){
			console.log("Empty kra");
			KRANoError.text("Empty kra");
			kraNumber.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			KRANoError.css({
					'color':'red'
				});
			kraFlag = true;
		}
		else{
			if(isNaN(kraNumber.val())){
				console.log("Not numeric kra");
				KRANoError.text("Not Numeric kra");
				KRANoError.css({
					'color':'red'
				});
				kraNumber.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			kraFlag = true;
			}
			else{
				kraNumber.css({
				'border':'1px solid green',
				'background-color': '#cbe6b6'
			});	
			KRANoError.text("");
			kraFlag = false;
			}
		}
		
});
		birthCertNumber.on('blur',function(){
					birthCertNumberValue = birthCertNumber.val();
		if(birthCertNumberValue.length == 0){
			console.log("Empty birth");
			BirthCertificateNoError.text("Empty birth");
			birthCertNumber.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			BirthCertificateNoError.css({
					'color':'red'
				});
			birthCertFlag = true;
		}
		else{
			if(isNaN(birthCertNumber.val())){
				console.log("Not numeric birth");
				BirthCertificateNoError.text("Not Numeric birth");
				BirthCertificateNoError.css({
					'color':'red'
				});
				birthCertNumber.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			birthCertFlag = true;
			}
			else{
				birthCertNumber.css({
				'border':'1px solid green',
				'background-color': '#cbe6b6'
			});	
			BirthCertificateNoError.text("");
			birthCertFlag = false;
			}
		}
		
});

nhifNumber.on('blur',function(){
					nhifNumberValue = nhifNumber.val();
		if(nhifNumberValue.length == 0){
			console.log("Empty nhif");
			NHIFNoError.text("Empty nhif");
			nhifNumber.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			NHIFNoError.css({
					'color':'red'
				});
			NhifFlag = true;
		}
		else{
			if(isNaN(nhifNumberValue)){
				console.log("Not numeric nhif");
				NHIFNoError.text("Not Numeric nhif");
				NHIFNoError.css({
					'color':'red'
				});
				nhifNumber.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			NhifFlag = true;
			}
			else{
				nhifNumber.css({
				'border':'1px solid green',
				'background-color': '#cbe6b6'
			});	
			NHIFNoError.text("");
			NhifFlag = false;
			}
		}
		
});
	
	
	// VALIDATING THE PHONE NUMBER AND EMAIL ADDRESS.
	
	phone.on('blur',function(){
		phoneValue = phone.val();
		if(phoneValue.length == 0){
			console.log("The phone Field is empty.");
			phoneError.text("The Phone Field Cannot Be Empty.");
			phoneFlag = true;
			phone.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			phoneError.css({
				'color':'red'
			});
		}
		else{
			if(isNaN(phoneValue)){
				console.log("The Phone value must be numeric.");
				phoneError.text("The Phone Value Must be numeric.");
				phoneFlag = true;
				phone.css({
					'border':'1px solid red',
				'background-color': '#fa8f8f'
				});
				phoneError.css({
				'color':'red'
			});
			}
			else{
				phoneError.text("");
                phoneFlag = false;
				phone.css({
					'border':'1px solid green',
				'background-color': '#cbe6b6'
				});
                				
			}
		}
	});
	
	
	// VALIDATING THE EMAIL INPUT.
	
	email.on('blur',function(){
		var emailValue = email.val();
		if(emailValue.length == 0){
		EmailError.text("The email Field cannot be left empty.");
		console.log("The email field is empty");
		emaiFlag = true;
		email.css({
			'border':'1px solid red',
				'background-color': '#fa8f8f'
		});
		EmailError.css({
			'color':'red'
		});
		}
		else{
			
			EmailError.text("");
			emaiFlag = false;
			email.css({
					'border':'1px solid green',
				'background-color': '#cbe6b6'
			});
		}
	});
	// THE METHO D TO RUN ON CLICKING THE SUBMIT BUTTON.
	    submit.on('click', function(){
			console.log(firstNameFlag);
			if(firstNameFlag == true){
			  // console.log("Error in First Name.");
			   FNameError.text("Re-Enter First Name.");			
			   firstName.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			   });	
			    $("#firstName").focus();
			    $("html, body").animate({ scrollTop: 0 }, "slow");
			   return false;
              
               			   
			}
			else if(lastNameFlag == true){
				console.log("Error in LastName Field.");
			LNameError.text("Last Name Field Has Error.");			
			lastName.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});		
			lastName.focus();
			  $("html, body").animate({ scrollTop: 0 }, "slow");
			   return false;
              
			}
			else if(surNameFlag == true){
				console.log("Error in surName Field.");
			SNameError.text("Sur Name Field Has Errors");			
			surName.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});	
			surName.focus();
			  $("html, body").animate({ scrollTop: 0 }, "slow");
			   return false;
              
			
			}
			/* else if (dateFlag == true){
				console.log('Error in  date value.');
			dateError.text("The date has Errors.");
			date.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});	
			date.focus();
			  $("html, body").animate({ scrollTop: 0 }, "slow");
			   return false;
              
			} */
			else if(NhifFlag == true){
				console.log("Error in NHIF.");
			NHIFNoError.text("Error in NHIF. ");
			nhifNumber.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			NHIFNoError.css({
					'color':'red'
				});
				nhifNumber.focus();
				  $("html, body").animate({ scrollTop: 0 }, "slow");
			   return false;
              
			}
			else if(kraFlag == true){
				console.log("Re-enter KRA Number.");
			KRANoError.text("Re-enter KRA Number.");
			kraNumber.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			KRANoError.css({
					'color':'red'
				});
				  $("html, body").animate({ scrollTop: 0 }, "slow");
			   return false;
			}
			else if (birthCertFlag == true){
				console.log("Re-Enter Birth Cert No");
			BirthCertificateNoError.text("Re-Enter Birth Cert No");
			birthCertNumber.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			BirthCertificateNoError.css({
					'color':'red'
				});
				 $("html, body").animate({ scrollTop: 0 }, "slow");
			   return false;
			}
			else if(emaiFlag == true){
				EmailError.text("Re-Enter Email Field.");
		console.log("Re-Enter Email Field.");
		emaiFlag = true;
		email.css({
			'border':'1px solid red',
				'background-color': '#fa8f8f'
		});
		EmailError.css({
			'color':'red'
		});
		 $("html, body").animate({ scrollTop: 0 }, "slow");
			   return false;
			}
			   else if(phoneFlag == true){
				   console.log("Re-Enter Phone Field.");
			phoneError.text("Re-Enter Phone Field.");
			phoneFlag = true;
			phone.css({
				'border':'1px solid red',
				'background-color': '#fa8f8f'
			});
			phoneError.css({
				'color':'red'
			});
			 $("html, body").animate({ scrollTop: 0 }, "slow");
			   return false;
			   }
			   else{
				   return true;
			   }
	/* 	console.log('The submit button is clicked.');
		console.log('The First Name Value = ' +firstNameFlag);
		console.log('The Last Name Value = ' + lastNameFlag);
		console.log('The Sur Name Value = '+ surNameFlag);
		console.log('The date is :'+ date.val());
		console.log('Tha KRA Number value is:'+kraFlag);
		console.log('The Birth Cert No value is: '+birthCertFlag);
		console.log('The NHIF Number value is:'+NhifFlag);
		console.log("The value of the phone is:"+phoneFlag);
		return false; */
		
	});
	
});