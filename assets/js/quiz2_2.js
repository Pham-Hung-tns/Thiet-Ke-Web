document.addEventListener('DOMContentLoaded', function () {
	// QUESTION CONSTRUCTOR
	function Question(text, choices, answer) {
		this.text = text; // string
		this.choices = choices; // array
		this.answer = answer; // string
	}
	Question.prototype.isCorrect = function (choice) {
		// Return TRUE if choice matches correct answer
		return this.answer === choice;
	};

	// QUIZ CONSTRUCTOR
	function Quiz(questions) {
		// Array of questions
		this.questions = questions;
		// Track which question you're on, starting with the first question
		this.currentQuestionIndex = 0;
		this.score = 0; // Score keeper
	}
	Quiz.prototype.getCurrentQuestion = function () {
		return this.questions[this.currentQuestionIndex];
	};
	Quiz.prototype.checkAnswer = function (answer) {
		if (this.getCurrentQuestion().isCorrect(answer)) {
			this.score++; // Add 1 point if correct
		}
		this.currentQuestionIndex++; // Get ready for next question
	};
	// Check if quiz end is reached
	Quiz.prototype.hasEnded = function () {
		// Return TRUE only after last question
		return this.currentQuestionIndex >= this.questions.length;
	};

	// QUIZ UI
	var QuizUI = {
		displayNext: function () {
			if (quiz.hasEnded()) {
				this.showResults();
			} else {
				this.displayQuestion();
				this.displayChoices();
				this.displayProgress();
				this.displayScore();
			}
		},
		displayQuestion: function () {
			this.populateIdWithHTML('question', quiz.getCurrentQuestion().text);
		},
		displayChoices: function () {
			var choices = quiz.getCurrentQuestion().choices;
			// Loop through each choice and display on page
			for (var i = 0; i < choices.length; i++) {
				var choiceId = 'choice' + i;
				var choiceText = choices[i];
				this.populateIdWithHTML(choiceId, choiceText);
				this.checkAnswerHandler(choiceId, choiceText);
			}
		},
		checkAnswerHandler: function (id, guess) {
			var button = document.getElementById(id);
			button.onclick = function () {
				quiz.checkAnswer(guess);
				QuizUI.displayNext();
			}
		},
		displayScore: function () {
			var scoreText = 'Score: ' + quiz.score;
			this.populateIdWithHTML('score', scoreText);
		},
		displayProgress: function () {
			var questionNumber = quiz.currentQuestionIndex + 1;
			var totalQuestions = quiz.questions.length;
			var progressText = 'Question ' + questionNumber + ' of ' + totalQuestions;
			this.populateIdWithHTML('progress', progressText);
		},
		showResults: function () {
			var grade = quiz.score / quiz.questions.length;
			var results = '<h2>';
			if (grade >= 0.8) {
				results += 'Excellent!';
			} else if (grade < 0.8 && grade > 0.5) {
				results += 'Not Bad...';
			} else {
				results += 'Terrible!';
			}
			results += '</h2><h3>Your final score is: ' + quiz.score + '</h3>';
			results += '<button id="reset">Again?</button>';
			this.populateIdWithHTML('quiz', results);
			this.resetQuizHandler();
		},
		resetQuizHandler: function () {
			var resetBtn = document.getElementById('reset');
			// Reload quiz to start from beginning
			resetBtn.onclick = function () {
				window.location.reload(false);
			}
		},
		populateIdWithHTML: function (id, content) {
			var element = document.getElementById(id);
			element.innerHTML = content;
		}
	};

	// CREATE QUESTIONS
	var questions = [
		new Question('to be exacctly the same as', ['to mirror', 'to pre-date', 'an obstacle'], 'to mirror'),
		new Question('a diffcults thing that stands in your way', ['to pre-date', 'a patch', 'an obstacle'],'an obstacle'),
		new Question('someone who acts as a teacher and guide to help you in your life', ['to mirror', 'an obstacle', 'a mentor'], 'a mentor')
	];

	// CREATE QUIZ & DISPLAY FIRST QUESTION
	var quiz = new Quiz(questions);
	QuizUI.displayNext();
});
