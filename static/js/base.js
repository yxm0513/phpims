xmlhttp = new XMLHttpRequest();

function isEmpty(str) {
    return (!str || 0 === str.length);
}

function isBlank(str) {
    return (!str || /^\s*$/.test(str));
}

function add_ajax_message(){
	var text = document.getElementById("mydiv").innerHTML;
	if (! (isBlank(text) || isEmpty(text))){
		$("#mydiv").html("");
	}else{
		xmlhttp.open("GET", "ajax.txt", true);
		xmlhttp.send();
		$("#mydiv").html(xmlhttp.responseText);
	}
}

$(document).ready(function(){
	$("#simon2").hide();
	$("#simon1").hover(
		function(){
			$("#simon2").show();
		}, function(){
			$("#simon2").hide();
	})
})
