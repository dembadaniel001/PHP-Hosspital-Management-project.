$(function(){
   $("#form").validate({
       rules: {
           fname: {
               required: true
           }
       }
       messages:{
       required: 'First Name Required .'
   }
   }); 
});