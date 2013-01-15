/**
 * @author Tommaso Dalla Favera
 */

var contactForm = {
	send : function () {
		$('button[type=submit]').click(function(event) {
			event.preventDefault();
			var name = $('form input#name').val();
			var email = $('form input#email').val();

			if (!$.trim(name).length || !$.trim(email).length || !$.trim(message).length) {
				alert ('Please fill in both a name and email before submitting. Thanks!');
			} else {
				$('form#myform').remove();
				$('section.content article p').text('...');
				try {
					$.post('sendmail.php', {name: name, email: email, message: message}, function(data) {
						$('section.content article p').text('Thanks for your email!');	
					});
				} catch (e) {
					$('section.content article p').text('Woops ... there seems to have been a problem accepting your email. Sorry. Please refresh the page and try again.');
				}
			}			
		});
	}
}
