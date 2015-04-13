function signUp() {
			  $.ajax({
			    url : "register.php",
			    data : {
			      formmail : $('#signupInputEmail1').val(),
			      formID : $('#signupInputUsername1').val(),
			      formpass : $('#signupInputPassword1').val(),
			      formname : $('#signupInputName1').val(),
			      formSubmit : "Submit"
			    },
			    dataType : 'json',
			    type : 'post',
			    success : function(r) {
			      console.log(r);
			      if(r.error) { $('#alertError').removeClass("hide"); }
			      else { $('#alertSuccess').removeClass("hide"); }
			    }, 
			    error : function() {
			     console.log("some error");
			    }
			  });
			}

function signOut(){
	$.get('signout.php');
}