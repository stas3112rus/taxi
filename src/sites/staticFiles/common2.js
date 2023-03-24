$(document).ready(function() {

	$("#form2").submit(function() {
		$.ajax({
			type: "POST",
			url: "http://taxi24h/alushta.taxi24h.ru/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			$('#form2').fadeOut(500);
			$("#form2").trigger("reset");
			$('.msg2').fadeIn(600);
		});
		return false;
	});
	
});