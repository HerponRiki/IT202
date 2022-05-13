<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Ashley Yang(ay43)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 11:35:16 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-arcade-project/grade/ay43" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168200483-7e65b301-4d3d-4706-a0f3-9591e384d8b8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Visibility Column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168200728-6d1396b9-9de8-48b3-96b4-724b195ae813.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile edit (p1)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168200793-b2e51c49-ca8b-4369-8784-4d4872d9e565.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile view (p2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/64">https://github.com/HerponRiki/IT202/pull/64</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168202448-86601064-23a9-4599-b455-6a113d18d2f1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p><a href="https://ay43-prod.herokuapp.com/Project/profile.php">https://ay43-prod.herokuapp.com/Project/profile.php</a><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>The user can set their profile to be either private or public using<br>a sliding bar to set it. The code is able to detect whether<br>or not the user&#39;s profile is private or public using a true or<br>false, 1 and 0 respectively.   <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to see their competition history </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of competition history view ( competition name, participant count, reward, the expiry date if active otherwise “expired”, whether or not they are the creator) Demonstrate pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168202709-8f885405-f8b4-4f8f-bd8a-58725e2d153a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/64">https://github.com/HerponRiki/IT202/pull/64</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/view_comp.php">https://ay43-prod.herokuapp.com/Project/view_comp.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>When a user participates in a competition, their user id allows them to<br>find which competitions they have already joined because the join competition button becomes<br>fake. The table that is displayed in the view comp screen then shows<br>the user which where they stand on the leaderboard.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User with the role of admin can edit non-paid out competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the list of competitions the admin can view along with the link to edit it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168202709-8f885405-f8b4-4f8f-bd8a-58725e2d153a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition view, admin not working<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the competition edit form</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168202709-8f885405-f8b4-4f8f-bd8a-58725e2d153a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition View, admin not working<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing related message of not being able to edit a competition that's been paid out</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168202709-8f885405-f8b4-4f8f-bd8a-58725e2d153a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition View, admin not working<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add before and after screenshots of an edited competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168202709-8f885405-f8b4-4f8f-bd8a-58725e2d153a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition View, admin not working<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/65">https://github.com/HerponRiki/IT202/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the admin list page and a link to the edit competition edit page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/admin/admin_calc.php">https://ay43-prod.herokuapp.com/Project/admin/admin_calc.php</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>Unable to say<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Add pagination to the active competitions view </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the view showing the pagination working</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168202709-8f885405-f8b4-4f8f-bd8a-58725e2d153a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Not working but is visible<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/64">https://github.com/HerponRiki/IT202/pull/64</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/view_comp.php">https://ay43-prod.herokuapp.com/Project/view_comp.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Anywhere username is displayed should link to that user's profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the score boards with the username links</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168204178-8ff3a445-2acc-487e-b7be-d1ec1f8efe3a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Clickable user names<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing a public profile of another users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168204306-b0212628-9440-4fe6-9c72-ebaa894d97bc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Another user&#39;s public profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of a private profile or private profile message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168204245-25169d2e-afcc-48c6-9188-596bf4de5429.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Unable to access because profile is private<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/64">https://github.com/HerponRiki/IT202/pull/64</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a link to a public profile</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/profile.php">https://ay43-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Competition Scoreboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the view competition page showing an accurate scoreboard for that competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168204518-ea658709-6dfc-4f48-af5f-6c3111bf2a67.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>View comp<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the code that generates this scoreboard (include ucid and date)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168204656-16d18901-206f-4375-bd47-eafdf0bacd19.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code (p1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168204678-f82c47a6-6cb4-4cf2-9ecd-5d61d59ec305.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code (p2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/6">https://github.com/HerponRiki/IT202/pull/6</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related url(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/view_comp.php">https://ay43-prod.herokuapp.com/Project/view_comp.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code logic for generating the scoreboard and the approach you took</td></tr>
<tr><td> <em>Response:</em> <p>The code goes and calls the variables from the Comps table to call<br>and assigns the variables. Then the code creates a new table similar to<br>the top scores of the day, week, and month and displays how much<br>it costs to join, what&#39;s it called, how many people are participating, etc.<br> If the user wants to join a competition, they must hit the<br>join button. From there the code first gets the user&#39;s id and makes<br>sure the credits attached to the user id&#39;s has enough credits to join<br>the competition. If the user does not have enough they will not be<br>able to join the competition,  and if they already have joined the<br>competition the join button becomes fake. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Game should be fully implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the game in progress</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168204870-d76ef762-15ba-422e-a181-30579179836c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Game working<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the message showing a score can't be generated when logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168205000-1f881f4d-dc5f-4426-9cdc-15808d692cfd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error, score not saved<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the message showing score was saved if logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168205120-99ef695f-3b91-4a04-82e8-6acbfbd77b44.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Score saved<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/41">https://github.com/HerponRiki/IT202/pull/41</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/52">https://github.com/HerponRiki/IT202/pull/52</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to game</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/gameScript.php">https://ay43-prod.herokuapp.com/Project/gameScript.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic used for showing the related messages</td></tr>
<tr><td> <em>Response:</em> <p>The code checks if the user is logged in, if the user is<br>not logged in the score will not be saved. If the user is<br>logged in then the user&#39;s score is saved and is then tied to<br>their user&#39;s id to keep track of who&#39;s score it must save as<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User's score history will include pagination </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show screenshots of paginated scores</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168205501-df8d5d9a-5f09-4e36-b948-9ec0d0634218.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Not paginated, code is there but does not work<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshot if no results are available</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168205583-509c9607-28c9-4520-89d2-358dcb56b477.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>If there are no results<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/65">https://github.com/HerponRiki/IT202/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add link to home page with high score lists</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/home.php">https://ay43-prod.herokuapp.com/Project/home.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to public profile page showing paginated latest scores</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/profile.php">https://ay43-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168200397-8937a8c0-6a49-4530-aeee-bef1bd5669e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Proposal <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168200241-bde7baa7-ccf9-473e-8a63-63021954eac3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board (p1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/168200262-aa6c6555-1554-4ba1-9956-97a2e7b4042b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project Board (p2)<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-arcade-project/grade/ay43" target="_blank">Grading</a></td></tr></table>