<script>

function validate()

{

var pass = f1.psw.value;

var cpass = f1.psw_repeat.value;

        if (pass == cpass)

        {


                if (pass.length >= 7)

                {

                        alert("done");

                        return true;

                }

                else

                {

                        alert("Password should be atleast characters long");

                        f1.psw.value = "";
 
                        f1.psw_repeat.value = "";

                        f1.psw.focus();

                        return false;

                }

        }

        else

        {

                        alert("Passwords don't match. Please re-enter");

                        f1.psw.value = "";

                        f1.psw_repeat.value = "";

                        f1.psw.focus();

                        return false;

        }


}


</script>


