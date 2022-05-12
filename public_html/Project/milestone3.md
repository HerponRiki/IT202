<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Ashley Yang(ay43)</td></tr>
<tr><td> <em>Generated: </em> 5/11/2022 10:56:40 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-arcade-project/grade/ay43" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will have credits associated with their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the user's table with the new credits column with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167946601-307c9b72-fec2-456a-9022-b41bdc5eec20.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Credits column in the User data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the code/sql that properly updates the credit/balance value based on CreditHistory</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167945837-050d1434-b322-45aa-8254-4086b935eded.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CreditHistory table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the credits displaying on the user's profile page (a value > 0 must show)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167946472-ae9edfa0-85fd-488b-924b-76ee55a45406.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Credits on Profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the code snippet of how the credits are fetched/displayed on the profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167947004-66c5a191-041f-4096-be61-394035c5f228.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Display on profile<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167947140-7587f2da-f9d2-4978-ba7c-6e34bf710e77.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Get credits (p1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167947411-d4bedc45-0e26-44f1-ad26-c270d18e98ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Get credits (p2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process for updating the credit/balance value and displaying it on the profile page</td></tr>
<tr><td> <em>Response:</em> <p>The get_credits.php file would first get the data from the User&#39;s table and<br>only grab the data with the associated user id. From there, the profile.php<br>file will call the get_credits function in the get_credits.php file and displays the<br>number of credits the user has. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/52">https://github.com/HerponRiki/IT202/pull/52</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file (profile page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/profile.php">https://ay43-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Create a CreditHistory Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the CreditHistory table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167950660-b02db678-deef-40df-84d5-a89964a86795.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>CreditHistory Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/52">https://github.com/HerponRiki/IT202/pull/52</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Competitions Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Competitions table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167950932-806cacb5-10de-4f65-9447-71d2f2b5bb44.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition Table (p1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167950964-c344fc8f-47ce-4374-9dfc-1f54b1e18050.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition table (p2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/53">https://github.com/HerponRiki/IT202/pull/53</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to create a competition </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Create Competition form with valid date filled in (including the expected cost)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167951670-1441dd4e-e5c5-42f7-9ea4-ce6f3e7f5476.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create Competition <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot(s) showing success and error messages of the creation process</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167961983-fdf8d00f-7475-4c8a-a1e6-ba146dd7469d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>If the winning percent exceeds 100%, it returns this error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167962180-b0a6d551-e4d7-467d-8b1a-3c51ad3940b8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>If anything of the fields are entered in incorrectly. it returns this error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167962568-f24ad894-c4ff-4303-9b3e-c32a7bef4732.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the new record in the Competitions table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167962652-14cf0f9e-8180-4fb6-a302-ec05d62f776f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Added new records in the Comps table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the CreditHistory related to creating this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167963032-f867f1a8-5c0b-4496-ab9a-323b951c258b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Credit History<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of the CompetitionParticipants table with the new record for this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167962776-02ec1ec9-e565-404c-bf4c-246bdcdb496d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User Comps<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <em>Response:</em> <p><a href="https://github.com/HerponRiki/IT202/pull/53">https://github.com/HerponRiki/IT202/pull/53</a></p><br><p><a href="https://github.com/HerponRiki/IT202/pull/52">https://github.com/HerponRiki/IT202/pull/52</a><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code flow for the creation process</td></tr>
<tr><td> <em>Response:</em> <p>The user will be able to create a competition and those competitions will<br>have an id attached to it. The credits associated with the user&#39;s account<br>are then taken out as a joining fee and then refreshed the account&#39;s<br>credit total. Each input field is checked to make sure the user is<br>inputting the correct numbers in each field and will stop the user if<br>the inputs are incorrect.   <br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add a direct link to heroku prod for this file (create competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/competition_list.php">https://ay43-prod.herokuapp.com/Project/competition_list.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Each new participant causes the Reward value to increase by 50% of the joining fee rounded up </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add before and after screenshots of the Competition record in the DB when a user joins (showing the reward change)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167965410-bcc96277-6006-4c1e-9075-87271a53c4dc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before user joins <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167965544-be049f66-75d4-4eaf-a600-0d61a9f59e8f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after user joins<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the reward calculation logic</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167965616-0ddd6efe-2bf7-4ba4-a783-4684406c530f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Calc (p1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167965642-3b05345f-fc98-4ea1-8475-0618d741e3ec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Calc (p2)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167965723-3cbdad0c-3b11-4df5-b54f-b1137a9adc57.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Calc (p3)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the calculation</td></tr>
<tr><td> <em>Response:</em> <p>Calculations are done in calc_score.php,  where the program will calculate the scores<br>of all participainces. It then gets the top three scores and gives out<br>the reward accordingly. Everytime a person joins the competition, the amount then gets<br>increased and when the competition ends the rewards are then distributed. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/53">https://github.com/HerponRiki/IT202/pull/53</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (join competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/lib/join_competition.php">https://ay43-prod.herokuapp.com/lib/join_competition.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Have a page where the user can see active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the active competitions page list with a few active competitions</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167952930-ffc79678-6f2a-4b9e-a697-b54f341cc3cb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>List of competitions<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the query including the WHERE clause</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167953041-cf371a83-098e-475d-b4ac-f08a71d8d09d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>View competition (p1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167953041-cf371a83-098e-475d-b4ac-f08a71d8d09d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>View competition (p2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the query and the code used to display this data</td></tr>
<tr><td> <em>Response:</em> <p>When the user clicks the view competition button, the code creates a table<br>and gets the id of the competition table and gets all participants from<br>that id. There, the table displays all the current participants scores, id ,<br>and username.  <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/53">https://github.com/HerponRiki/IT202/pull/53</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (list competitions)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/competition_list.php">https://ay43-prod.herokuapp.com/Project/competition_list.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> CompetitionParticipants table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167974567-24803f67-f358-41c1-bf8f-ee455418f698.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User Comps table with the competition id in the same row as the<br>user id<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167974791-7a0c3668-27ce-4611-8a5e-f173fd42acc0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition Participants code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/53">https://github.com/HerponRiki/IT202/pull/53</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can join active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of the CreditHistory table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167974709-d60cc38d-556d-4f47-bab5-e50c82c236ed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before CreditHistory<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167975062-5a7c339c-83cb-45dc-90aa-c677dd0c8117.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After CreditHistory <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of the Competitions table showing the participant count update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167976098-3e4d8261-be3f-46dd-9af9-1428b14c6c8d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before competition<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167976215-c28135d2-fa3a-44eb-ad6d-b9fa805a963e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After Competition<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot(s) showing proper error and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167976300-1502e6cb-f6ab-41de-a584-235d2b8c67de.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167979640-4972dd3c-128a-441c-95be-d8ba8bc3dce3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/53">https://github.com/HerponRiki/IT202/pull/53</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the logic/code for joining a competition and the involved steps</td></tr>
<tr><td> <em>Response:</em> <p>When the user presses the button to join a competition and they have<br>enough credits to pay the entry fee, they are added to the competition<br>and update the user competition table if they have enough credits. After that,<br>the number of credits needed to join the competition will be deducted from<br>the user&#39;s profile. If they do not, it doesn&#39;t allow them to join<br>the competition.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file (any join page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ay43-prod.herokuapp.com/Project/view_comp.php">https://ay43-prod.herokuapp.com/Project/view_comp.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Create a function to calculate winners </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the whole code process with the clear comments (ensure your ucid and date are shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167970889-e112acee-44f3-4f16-b54d-1b4e7ce1598c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Calc top score<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mention which winner calculation you chose (copy the text from the proposal for your choice)</td></tr>
<tr><td> <em>Response:</em> <p>Scores are calculated by the sum of the score from the Scores table<br>where it was earned/created between Competition start and Competition expires timestamps<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add before and after screenshots of the Competitions table of valid and invalid competitions being successfully processed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167981434-3b7f72b1-a1c1-4dc4-a13e-4cc3fc38bb44.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before Competition table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167981023-8ef2e472-ccd9-44c5-99b3-587df3de7a6b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After Competition table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the calculation steps and payout process</td></tr>
<tr><td> <em>Response:</em> <p>After the competition ends it takes whoever is in the first, second, or<br>third, and distributes the amount from the percentages. It doesn&#39;t matter if the<br>same id is in multiple places it will distribute the reward automatically. <br>  <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HerponRiki/IT202/pull/53">https://github.com/HerponRiki/IT202/pull/53</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/57157756/167951226-1ae01c6d-aab5-415a-932e-6cbee51ec334.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Proposal for Milestone 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i.imgur.com/8Dhr7NI.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project Board (p1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.imgur.com/e2u6wk7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project Board (p2)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.imgur.com/DQhJWMA.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project Board (p3)<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-arcade-project/grade/ay43" target="_blank">Grading</a></td></tr></table>