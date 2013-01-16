/**
 * @author Tommaso Dalla Favera
 */
var contactForm = {
	send : function () {
		$('button[type=submit]').click(function(event) {
			event.preventDefault();
			var name = $('form input#name').val();
			var email = $('form input#email').val();
			$('form#myform').remove();
			//$('section.content article p').text('...');
			try {
				$.post('contactlist_form.php', {name: name, email: email}, function(data) {
					//$('section.content article p').text('Thanks for your email!');	
				});
			} catch (e) {
				//$('section.content article p').text('Woops ... there seems to have been a problem accepting your email. Sorry. Please refresh the page and try again.');
			}
			$('div#myAlert').fadeIn(2000);
		});
	}
}

$(document).ready(function() {
	contactForm.send();
});