/* Author: Ed van Beinum

 */

// add 978gs overlay
$(function() {
	$('div#gs-overlay').gsoverlay({
		trigger: $('a#gs-overlay-badge'),
		grid: 978,
		color: '#aa1b4a',
		opacity: 0.15
	});

});

// add colour coding to code blocks
$(function() {
	$('pre').addClass('prettyprint');
	prettyPrint();
});



















