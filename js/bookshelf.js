function show_alert(){
  alert("You must Login/SignUp first");
}

function show_more_books(){
	if(document.getElementById('bookshelf2').style.display=='none')
		document.getElementById('bookshelf2').style.display='';
	else
		document.getElementById('bookshelf2').style.display='none';
}

function authenticate1(){
	var uid=document.add_a_book_form.username.value;
	var pwd=document.add_a_book_form.password.value;
	if(uid=="root"&&pwd=="password"){
		return true;
	}
	else{
		alert("Wrong username or password");
		return false;
	}
}
function authenticate2(){
	var uid2=document.delete_a_book_form.username2.value;
	var pwd2=document.delete_a_book_form.password2.value;
	if(uid2=="root"&&pwd2=="password"){
		return true;
	}
	else{
		alert("Wrong username or password");
		return false;
	}
}