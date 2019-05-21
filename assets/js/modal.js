$(document).ready(function(){
    console.log(" modal Javasript loaded.");
  $("#btn").on('click',function(){
      console.log(" button clicked.");
    $("#modal").modal('toggle');  
      console.log(" button sfter clicked.");
  });
});