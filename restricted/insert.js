$("#subAkun").click(function() {
	$.post($("#tambahAkun").attr("action"), $("#tambahAkun :input").serializeArray(), function(info) { $("#result").html(info); });
	clearInput();
});

$("#tambahAkun").submit(function(){
	return false;
});

function clearInput(){
	$("#tambahAkun :input").each(function(){
		$(this).val('');
	});
};