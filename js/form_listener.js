/**
 * @author Tommaso Dalla Favera
 */
var contactForm = {
	send : function () {
		$('button[type=submit]').click(function(event) {
			event.preventDefault();
			var name = $('form input#name').val();
			var email = $('form input#email').val();
			try {
				$.post('contactlist_form.php', {name: name, email: email}, function(data) {
					//$('').text('Thanks for your email!');	
				});
			} catch (e) {
				//$('').text('Woops ... there seems to have been a problem accepting your email. Sorry. Please refresh the page and try again.');
			}
			$("input[placeholder]").val('');
			setTimeout("$('div#myAlert').fadeIn(2000);", 500);
			setTimeout("$('div#myAlert').fadeOut(2000);", 8000);
		});
	}
}

$(document).ready(function() {
	contactForm.send();
});