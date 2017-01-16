 $(document).ready(function() {
 	var serverIp = "http://58.229.204.28:8080";

  	var flag = false;

  	if (flag == false) {
	  	$.ajax({
	  		type : "get",
	  		url : serverIp + "/admin/media",
	  		dataType : "json",
	  		success : function(data) {
	  			flag = true;
	  			console.log(data);
	  			createList(data);
	  		}
	  	});
  	}

  	function createList(data) {
  		var len = data.length;
		var mlist = document.getElementById("mediaListContent");  		
  		console.log("길이 : " + len);

  		for (var i = 0; i < len; i++) {
  			var txt = 
  					"<div class='mediaListTable'>"
	  				+	"<div class='mediaLists'>" 
						+ "<div class='mediaContentNumber'>" + data[i].id + "</div>"
						+ "<div class='mediaContentTitle'><bold>" + data[i].title + "</bold></div>"
						+ "<div class='mediaContentDate'>" + data[i].today + "</div></div></div>";
				
				mlist.innerHTML += txt;

  		}
  	}

});