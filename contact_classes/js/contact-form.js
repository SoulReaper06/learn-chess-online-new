$("#choice").change(function () {
    if($(this).val() == "0") $(this).addClass("empty");
    else $(this).removeClass("empty").children('.placeholder').remove();
});
$("#choice").change();

$("#choice2").change(function () {
    if($(this).val() == "0") $(this).addClass("empty");
    else $(this).removeClass("empty").children('.placeholder').remove();
});
$("#choice2").change();




formValidate = 0

formName = false;
formAge = false;
formNumber = false;
formEmail = false;
formCourse = false;




function validateName(){
    console.log("sdfsdfsdfsdfs");
    var name = document.getElementById("name").value;
    if(name.length<=0){
        document.getElementById("name-prompt").style.color="red";
        document.getElementById("name-prompt").style.fontSize="13px";
        document.getElementById("name-prompt").innerHTML="please enter your name";
        
        return false;
    }
    else{
        document.getElementById("name-prompt").innerHTML="";
        formValidate+=1;
       
        return true;
    }
}


function validateAge(){
    var age = document.getElementById("age").value;

    if(age.length<=0){
        document.getElementById("age-prompt").style.color="red";
        document.getElementById("age-prompt").style.fontSize="13px";
        document.getElementById("age-prompt").innerHTML="please enter your age";
        return false;
    }
    else{
        document.getElementById("age-prompt").innerHTML="";
        formValidate+=1;
        formAge = true;
        return true;
    }
}

function validateNumber(){
    var number = document.getElementById("number").value;

    if(number.length<=0){
        document.getElementById("number-prompt").style.color="red";
        document.getElementById("number-prompt").style.fontSize="13px";
        document.getElementById("number-prompt").innerHTML="please enter whatsapp number";
        return false;
    }
    else if(isNaN(number)){
        document.getElementById("number-prompt").style.color="red";
        document.getElementById("number-prompt").style.fontSize="13px";
        document.getElementById("number-prompt").innerHTML="invalid number";
        return false;
    }
    // else if(number.length>0 && number.length!=10 ){
    //     document.getElementById("number-prompt").style.color="red";
    //     document.getElementById("number-prompt").style.fontSize="13px";
    //     document.getElementById("number-prompt").innerHTML="please enter valid";
    //     return false;
    // }
    else{
        document.getElementById("number-prompt").innerHTML="";
        formValidate+=1;
        return true;
    }
}


function validateEmail(){
    var email = document.getElementById("email").value;
    var emailRegex = /\S+@\S+\.\S+/;
    if(email.length<=0){
        document.getElementById("email-prompt").style.color="red";
        document.getElementById("email-prompt").style.fontSize="13px";
        document.getElementById("email-prompt").innerHTML="please enter email address";
        return false;
    }
    else if(!email.match(emailRegex)){
        document.getElementById("email-prompt").style.color="red";
        document.getElementById("email-prompt").style.fontSize="13px";
        document.getElementById("email-prompt").innerHTML="invalid email addresss";
        return false;
    }
    else{
        document.getElementById("email-prompt").innerHTML="";
        formValidate+=1;
        return true;
    }

}

// course = "Select Course";
function validateCourse(){
    var course = document.getElementById("choice").value;
    if(course == "0"){
        document.getElementById("course-prompt").style.color="red";
        document.getElementById("course-prompt").style.fontSize="13px";
        document.getElementById("course-prompt").innerHTML="please select a course";
        return false;

    }
    else{
        document.getElementById("course-prompt").innerHTML = "";
        formValidate+=1;
        return true;
    }
    
    
}

function validateForm(){
    if(validateName() && validateAge() && validateNumber() && validateEmail() && validateCourse()){
        document.getElementById("submit-prompt").innerHTML = "";
        return true;
    }
    else{
        //alert("Please fill all fields")
        document.getElementById("submit-prompt").style.color="red";
        document.getElementById("submit-prompt").style.fontSize="13px";
        document.getElementById("submit-prompt").innerHTML = "Something went wrong!";
        return false;
    }
}