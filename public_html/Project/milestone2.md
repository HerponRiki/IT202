<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Ashley Yang(ay43)</td></tr>
<tr><td> <em>Generated: </em> 4/20/2022 1:15:12 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-2-arcade-project/grade/ay43" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>A simple shooter game that I did for the HTML project<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <p>The enemies come from the right side of the screen and by pressing<br>the space button, the character will shoot. The player has to shoot the<br>enemies to score points. By pressing the w or up arrow keys, the<br>character will move up. While pressing the s or down arrow key, the<br>character will move down<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i.imgur.com/19R9qgq.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the game<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/41">https://github.com/HerponRiki/IT202/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/gameScript.php">https://ay43-prod.herokuapp.com/Project/gameScript.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="//The screen shot is in Sub-Task 2">The screen shot is in Sub-Task 2</a> </td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a notice telling the user their score wasn't saved because they're logged out</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/164150887-1ffac25b-5ee6-43f3-b2d5-148b8f2fd17b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the screenshot for Sub-Task 1, shows the score was saved<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.imgur.com/1ZgktSx.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the error because they were logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of your scores table with some score entries (preferably different users with multiple scores each)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/164151938-3f8531a2-0c0f-48ad-9d5c-a853edcc678c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Multiple entries and a leaderboard<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <p>Using the postData() function, the score is saved into the file called save_score.php.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-dev.herokuapp.com/Project/gameScript.php">https://ay43-dev.herokuapp.com/Project/gameScript.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page (show at least a few scores)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i.imgur.com/Lc20HmA.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User&#39;s score <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>The score is pulled from the score_table.php, which pulls the user id and<br>saves their score to that id as well as the top 10 scores.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/42">https://github.com/HerponRiki/IT202/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-dev.herokuapp.com/Project/profile.php">https://ay43-dev.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputiting the 3 different scoreboard durations (weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/164151938-3f8531a2-0c0f-48ad-9d5c-a853edcc678c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 1, Leaderboard<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/164152257-094fd3e0-ce4a-4aa1-83db-616599586c8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 2, Leaderboard<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>In the file called score_helpers.php, it gets the data from the score tables<br>and puts the scores against each other and then organizes them<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/42">https://github.com/HerponRiki/IT202/pull/42</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i.imgur.com/ShCbtd0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Homepage<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>From score_table.php, the different tables for each of the different leader boards are<br>pulled and then are shown to the user. This happens because the home.php<br>page assigns $duration = <em>name of leader board</em> to properly call each table.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/42">https://github.com/HerponRiki/IT202/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-dev.herokuapp.com/Project/home.php">https://ay43-dev.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i.imgur.com/igs6x3j.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Proposal.md screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i.imgur.com/e6WuVgs.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 1, Project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.imgur.com/n70H7DB.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 2, Project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-2-arcade-project/grade/ay43" target="_blank">Grading</a></td></tr></table>pu