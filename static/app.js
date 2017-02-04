$(document).ready(function() {
	QuestionSearch();
})

function QuestionSearch() {
	$('input.question-search').keyup({
		name: 'question-search',
		remote: 'src/Handler.php?key=%QUERY',
		limit: 35
	});
}