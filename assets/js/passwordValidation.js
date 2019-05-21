$(function(){
    console.log("The javascript for validation of passwords is loaded.");
    var password = $("#password");
    var reEnterPassword = $("#re-enterPassword");
    
    var passwordValue = password.val();
    var reEnterPasswordValue = reEnterPassword.val();
    
    password.on('focus',function(){
      
        password.css({
            'background-color':'white',
            'border':'1px solid gray'
        });
    });
    
    password.on('blur',function(){
        var passwordError = $("#passwordError");
        if(((password.val()).length) == 0){
               console.log("Password Field Empty.");
            console.log(passwordValue.length);
               password.attr('placeholder','Password Field Empty.');
               password.css({
                   'background-color': '#fa8f8f',
                   'border':'1px solid red'
               });
           }
        else{
            if(((password.val()).length) < 8){
                console.log("Password Field is too short.");
                console.log((password.val()).length);
                password.val("");
              password.attr('placeholder',' Password Field is too short.');
               password.css({
                   'background-color': '#fa8f8f',
                   'border':'1px solid red'
               });
               }
 
            }
        });
                
         reEnterPassword.on('blur', function(){
             console.log("Reentr nblurry");
           if((password.val()) != (reEnterPassword.val())){
                   console.log("Passwords DoNot Match.");
                console.log((password.val()).length);
                reEnterPassword.val("");
              reEnterPassword.attr('placeholder',' Passwords DoNot Match.');
               reEnterPassword.css({
                   'background-color': '#fa8f8f',
                   'border':'1px solid red'
               });
              }
        console.log("Other.");
    });       
        
});