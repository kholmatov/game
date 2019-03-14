`php7 ./play.php`

Snakes and Ladders technical challenge


The challenge is to create an OOP version of CLI tool that plays a multiplayer game of snakes and ladders on it’s own, use PHP 7+. Using modern technics & tools of code organisation, correctness check, and delivery would be appreciated.

Put the result on GitHub and the link back.


Rules


You must continue to roll the dice every second till you reach position 100 exactly, you start at position 1


If your new position after the roll divides by 9 (9, 18, 27, 36…) you landed on a snake and must move back 3 places


If your new position after the roll is 25 or 55 you must move forward 10 places


If your roll is near the end of the game and you do not roll enough to move exactly to 100, you do not move forward


You must output on a new line each turns dice roll, if they landed on a snake or ladder and where their final position was


There must be a hyphen to separate the dice roll from the position and snake/ladder verdict


Sample output:<br />
`5-6`<br />
`1-7`<br />
`5-12`<br />
`3-15`<br />
`6-21`<br />
`4-ladder35`<br />
`3-38`<br />
`5-43`<br />
`1-44`<br />
`5-49`<br />
`2-51`<br />
`1-52`<br />
`5-57`<br />
`6-snake60`<br />
`5-65`<br />
`4-69`<br />
`2-71`<br />
`2-73`<br />
`4-77`<br />
`3-80`<br />
`3-83`<br />
`3-86`<br />
`1-87`<br />
`1-88`<br />
`3-91`<br />
`3-94`<br />
`5-snake96`<br />
`5-96`<br />
`1-97`<br />
`5-97`<br />
`5-97`<br />
`3-100`
