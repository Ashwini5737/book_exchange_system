/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<script>
$(document).ready(function() {
<!-- Real-time Validation -->
<!--Name can't be blank-->
$('#FName, #LName, #place').on('input', function() {
        var input = $(this);
        var is_name = input.val();
        if (is_name){input.removeClass("invalid").addClass("valid"); }
else{input.removeClass("valid").addClass("invalid"); }
});
$('#mobno').on('input', function() {
        var input = $(this);
        var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var mob = $.isNumeric(input.val());
        if (mob){
        input.removeClass("invalid").addClass("valid");
          }
else{
        input.removeClass("valid").addClass("invalid");
        alert("A valid mobile no. is required");
         $("#mobno").val = "";
        }
});
<!--Email must be an email -->
$('#email').on('input', function() {
        var input = $(this);
        var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var is_email = re.test(input.val());
        if (is_email){
input.removeClass("invalid").addClass("valid");
       
}
else{
        input.removeClass("valid").addClass("invalid");
         alert("A valid email address is required");
        $("#email").val = "";}
});

$('#psw').on('input',function() {
        var input = $(this);
        var password = input.val();
        if (password.length>8)
        {
            input.removeClass("invalid").addClass("valid");
        } 
        else{
            input.removeClass("valid").addClass("invalid");
            alert("Password should atleast 8 character in length...!!!!!!");
                        
                        $("#psw").val = "";
                        $('#psw').focus();
                    }
        });
$('#psw_repeat').on('input', function() {
                var input = $(this);
                var c_password = input.val();
                var password= $("#psw").val();
                if ((password).match(c_password))
               
                {input.removeClass("invalid").addClass("valid"); }
                    else{
                    alert("Your passwords don't match. Try again?");
                        input.removeClass("valid").addClass("invalid");
                        $("#psw").val = "";
                        $('#psw_repeat').val = ""
                        $("#psw").val = "";
                        $('#psw').focus();
                    }

});



$(".signupbtn").click(function(event){
   
				var form_data=$("#myform").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					
					if (!valid){break;}
				}
				if (!valid){
					$(".signupbtn").disabled=true;
				}
				else{
                                    $(".signupbtn").disabled=false;
            alert('No errors: Form will be submitted');
				}
			});
			
			
			
		});
	
</script>
