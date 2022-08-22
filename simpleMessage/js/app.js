$(document).ready(function () {
    $("input").focus(function(){
     $(this).css("color","black").css("font-size","17px")
    });
 });


 function validateForm() {
    let name = document.forms["registerForm"]["name"].value;
    let lastname = document.forms["registerForm"]["lastname"].value;
    let email = document.forms["registerForm"]["email"].value;
    let phone = document.forms["registerForm"]["phone"].value;
    let password = document.forms["registerForm"]["password"].value;
    let rpassword = document.forms["registerForm"]["repeatpassword"].value;


    if(name == "" || name == null){
        $(document).ready(function(){
            $('span').css("color","red").html("Do not leave your <b>Name</b> blank");
        });
        return false;
    }else if(lastname == "" || lastname == null){
        $(document).ready(function(){
            $('span').css("color","red").html("Do not leave your <b>Lastname</b> blank");
        });
        return false;
    }else if(email == "" || email == null){
        $(document).ready(function(){
            $('span').css("color","red").html("Do not leave your <b>Email</b> blank");
        });
        return false;
    }else if(phone == "" || phone == null){
        $(document).ready(function(){
            $('span').css("color","red").html("Do not leave your <b>Phone</b> blank");
        });
    }else if(password == "" || password==null || rpassword== "" || rpassword==null){
        $(document).ready(function(){
            $('span').css("color","red").html("Do not leave your <b>Password</b> blank");
        });
    }else{
        $(document).empty(
            function(){
                $('span').html("Please Fill The Form");
            }
        );
    }
}


document().ready(function () {
    $("#password").focus(
        function () {
            
          }
    );
  });

