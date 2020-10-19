/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function Submit(){
 var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 
  var name = $("#FName").val();
 var lname = $("#LName").val();
 var email = $("#email").val();
 
 var pass = $("#psw").val();
var pass_r = $("#psw_repeat").val();
  
  if($("#FName").val() === "" ){
   $("#FName").focus();
   $("#errorBox").html("enter the First Name");
   return false;
  }else if($("#LName").val() === "" ){
    $("#LName").focus();
    $("#errorBox").html("enter the Last Name");
    return false;
  }else if($("#email").val() === "" ){
    $("#email").focus();
    $("#errorBox").html("enter the email");
    return false;
  }else if(!emailRegex.test(email)){
    $("#email").focus();
    $("#errorBox").html("enter the valid email");
    return false;
  }else if($('#psw').val() === ""){
    $("#psw").focus();
    $("#errorBox").html("Enter the password");
    return false;
  }else if($('#psw_repeat').val() === ""){
    $("#psw_repeat").focus();
    $("#errorBox").html("Enter the confirm password");
    return false;
  }
  else if(pass !== pass_r){
    $("#psw_repeat").focus();
    $("#errorBox").html("password is not matching, re-enter again");
    return false;
  }
  else if($(name !== '' && lname !== '' && email !== '' &&  pass !== '' && pass_r!== '')){
   $("#errorBox").html("form submitted successfully");
   return true;
   }
   
 }
