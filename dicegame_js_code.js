
//The web page is http://mehmetakb.se/dicegame

//Creating all variables for this project

var scores, roundScore, activePlayer, gamePlaying;

init();

var scores = [0,0];

var roundScore = 0;

activePlayer = 0;


document.querySelector('.dice').style.display = 'none';

document.getElementById('score-0').textContent = '0';
document.getElementById('score-1').textContent = '0';
document.getElementById('current-0').textContent = '0';
document.getElementById('current-1').textContent = '0';



		// 1. On click, roll dice 
document.querySelector('.btn-roll').addEventListener('click', function(){
			
			
			
			
			// If the game is on playing mode, do the following...
			if(gamePlaying){
			
					//1.1 randomnumber (Create a random number betwen 1-6)
				var dice = Math.floor(Math.random() * 6) + 1;
				
					//1.2 Display the result by PNG picture
				var diceDOM = document.querySelector('.dice');
				
				diceDOM.style.display = 'block';
				diceDOM.src = 'dice-' + dice + '.png';
				
				
					//1.3Update the round score IF the rolled number was not a 1
			
				if (dice !== 1){
				
					//1.4 Add score
					roundScore += dice;
					//1.5 setter into the nuber area
					document.querySelector('#current-' + activePlayer).innerHTML = 	roundScore;
					
					
					
					//IF the number is 1,  go to next player
				}else{
					nextPlayer();
					

				}
			}
		
		
		
});
	
	
	//2. Hold your scores on scores table
	document.querySelector('.btn-hold').addEventListener('click', function(){
			
			if(gamePlaying){
				//2.1 Add CURRENT score to the GLOBAL score 
				scores[activePlayer] = scores[activePlayer] + roundScore;


				//2.2 Update the score table
				document.querySelector('#score-' + activePlayer).textContent = scores[activePlayer];
				
				
				//2.5 Check if player won the game 
				if (scores[activePlayer] >= 20){
					document.querySelector('#name-' + activePlayer).textContent = 'Winner!';
					document.querySelector('.dice').style.display = 'none';
					document.querySelector('.player-' + activePlayer + '-panel').classList.add('winner');
					document.querySelector('.player-' + activePlayer + '-panel').classList.remove('active'); //active
					gamePlaying = false;
				}
				else{
				
				
				//2.4 go to next player
				nextPlayer();
		
				}
			}
	
	
	});
	
	
	
	
	
	
	
	//2.3 function to call next player
		function nextPlayer(){
		activePlayer === 0 ? activePlayer = 1 : activePlayer = 0;
		roundScore = 0;
		//next player
		
		//1.6 Set player names - 'current 0' is player one and 'current 1' is player 2
		document.getElementById('current-0').textContent = '0';
		document.getElementById('current-1').textContent = '0';
		

		//1.7 Remove the active class and switch player two to be active
		document.querySelector('.player-0-panel').classList.toggle('active');
		document.querySelector('.player-1-panel').classList.toggle('active');

		
		document.querySelector('.dice').style.display = 'none';

	}
	
	
	
	
	
	
	//RESTART THE GAME function
		document.querySelector('.btn-new').addEventListener('click',init);
	
		function init() {
			scores = [0, 0];
			activePlayer = 0;
			roundScore = 0;
			gamePlaying = true;
		
			document.querySelector('.dice').style.display = 'none';
		
			document.getElementById('score-0').textContent = '0';
			document.getElementById('score-1').textContent = '0';
			document.getElementById('current-0').textContent = '0';
			document.getElementById('current-1').textContent = '0';
			document.getElementById('name-0').textContent = 'Player 1';
			document.getElementById('name-1').textContent = 'Player 2';
			document.querySelector('.player-0-panel').classList.remove('winner');
			document.querySelector('.player-1-panel').classList.remove('winner');
			document.querySelector('.player-0-panel').classList.remove('active');
			document.querySelector('.player-1-panel').classList.remove('active');
			document.querySelector('.player-0-panel').classList.add('active');




		}
		

	
	
	