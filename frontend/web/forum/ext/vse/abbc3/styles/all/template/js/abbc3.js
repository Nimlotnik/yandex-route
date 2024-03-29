/**
 *
 * Advanced BBCode Box
 *
 * @copyright (c) 2013 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/*global bbfontstyle, is_ie, form_name, text_name, baseHeight, insert_text, storeCaret */

// global scope vars
var requestRunning = false;
var bbwizard;

(function($) { // Avoid conflicts with other libraries

	'use strict';

	/**
	 * Show the bbcode wizard (scope must be global)
	 */
	bbwizard = function(href, bbcode) {
		if (!requestRunning) {
			var wizard = $('#bbcode_wizard');
			if (!wizard.is(':visible')) {
				requestRunning = true;
				var $loadingIndicator = phpbb.loadingIndicator();
				$.ajax({
					url: href,
					dataType: 'html',
					beforeSend: function() {
						// Clear the bbwizard div
						wizard.hide().empty();
					},
					success: function(data) {
						// Append the new html to the bbwizard div and show it
						wizard.append(data).fadeIn('fast');
					},
					error: function() {
						// On AJAX error, revert to default bbcode application
						bbfontstyle('[' + bbcode + ']', '[/' + bbcode + ']');
					},
					complete: function() {
						requestRunning = false;
						if ($loadingIndicator && $loadingIndicator.is(':visible')) {
							$loadingIndicator.fadeOut(phpbb.alertTime);
						}
					}
				});
			}
		}
	};

	/**
	 * Insert BBCode into message (position cursor after insertion)
	 */
	var bbinsert = function(bbopen, bbclose) {
		var textarea;

		if (is_ie) {
			textarea = document.forms[form_name].elements[text_name];
			textarea.focus();
			baseHeight = document.selection.createRange().duplicate().boundingHeight;
		}

		//initInsertions();
		insert_text(bbopen + bbclose);

		// The new position for the cursor after adding the bbcode
		if (is_ie) {
			var text = bbopen + bbclose;
			var pos = textarea.innerHTML.indexOf(text);
			if (pos > 0) {
				var new_pos = pos + text.length;
				var range = textarea.createTextRange();
				range.move('character', new_pos);
				range.select();
				storeCaret(textarea);
				textarea.focus();
			}
		}
	};

	/**
	 * DOM READY
	 */
	$(document).ready(function() {

		var body = $('body');

		/**
		 * Function spoiler toggle
		 */
		body.on('click', '.spoilbtn', function(event) {
			event.preventDefault();
			var trigger = $(this),
				spoiler = trigger.closest('div').next('.spoilcontent');
			spoiler.slideToggle('fast', function() {
				trigger.text(spoiler.is(':visible') ? trigger.data('hide') : trigger.data('show'));
			});
		});

		/**
		 * BBCode Wizard listener events
		 */
		var wizard = $('#bbcode_wizard');
		// Click on body to dismiss bbcode wizard
		body.on('click', function() {
			wizard.fadeOut('fast');
		});
		wizard
			// Click on bbcode wizard submit button to apply bbcode to message
			.on('click', '#bbcode_wizard_submit', function(event) {
				event.preventDefault();
				var bbcode = $(this).data('bbcode');
				switch (bbcode) {
					case 'url':
						var link = $('#bbcode_wizard_link').val(),
							description = $('#bbcode_wizard_description').val();
						bbinsert('[' + bbcode + ((description.length) ? '=' + link : '') + ']' + ((description.length) ? description : link) + '', '[/' + bbcode + ']');
						break;
					case 'bbvideo':
						bbinsert('[bbvideo]' + $('#bbvideo_wizard_link').val() + '', '[/bbvideo]');
						break;
				}
				wizard.fadeOut('fast');
			})
			// Click on bbcode wizard cancel button to dismiss bbcode wizard
			.on('click', '#bbcode_wizard_cancel', function(event) {
				event.preventDefault();
				wizard.fadeOut('fast');
			})
			// Change bbvideo allowed sites option updates bbvideo example
			.on('change', '#bbvideo_wizard_sites', function() {
				$('#bbvideo_wizard_example').val($(this).val());
			})
			// Prevent clicks on bbcode wizard from bubbling up
			// to the body and prematurely dismissing itself
			.click(function(event) {
				event.stopPropagation();
			});

	});

})(jQuery); // Avoid conflicts with other libraries
