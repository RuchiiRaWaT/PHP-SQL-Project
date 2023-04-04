
//Checking  Form validation//
var errormessage="";
        var missingfield="";
                function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
             }
             $("#submitbuttom").click(function(){
                if($("#email").val()==""){
                    missingfield+= "email is not filled";
                }
                if($("#phone").val()==""){
                    missingfield+= "phone no. is not filled";
                }
                if($("#age").val()==""){
                    missingfield+= "Age is not filled";
                }
                if($("#name").val()==""){
                    missingfield+= "name is not filled";
                }
                if($("#gender").val()==""){
                    missingfield+= "gender is not filled";
                }
              
              
                
           if( isEmail($("#email").val())==false){
             errormessage += "<p>Email id is not valid</p>" 
           }
           if($.isNumeric($("#phone").val())==false){
            errormessage+="<p>phone no is not valid</p>"
           }
          
             });