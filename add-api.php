<? include $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>
<div class="row">
	<div class="col-md-8 col-md-push-2">
		<img id="become-tester-steps" src="images/step-01.png">
	</div>
</div>
<div class="row">
	<div id="form-become-a-tester">
		<h2>Add Your API</h2>
		<form id="form-become-a-tester-step1">
				<div class="row">
			        <div class="form-group col-md-2">
			          <label for="tester-name"> First and Last Name</label>   
			        </div>

			         <div class="form-group col-md-3">
			          <input type="text" class="form-control" id="tester-name" placeholder="Ex. Joe Doe">
			        </div>
		       
			        <div class="form-group col-md-2">
			          <label for="tester-email"> Email</label>
			        </div>

			        <div class="form-group col-md-3">
			          <input type="text" class="form-control" id="tester-email" placeholder="Ex. joe@email.com">
			        </div>

		        </div>

		        <div class="row">
			        <div class="form-group col-md-2">
			          <label for="tester-password"> Select Password</label>
			        </div>

			        <div class="form-group col-md-3">
			          <input type="text" class="form-control" id="tester-password">
			        </div>

		       
			        <div class="form-group col-md-2">
			          <label for="tester-github"> Link to Documentation</label>
			        </div>

			        <div class="form-group col-md-3">
			          <input type="text" class="form-control" id="tester-github">
			        </div>

		        </div>

                <div class="row">
			        <div class="form-group col-md-2">
			          <label for="tester-password"> Upload API Files</label>
			        </div>

			        <div class="form-group col-md-3">
			          <input type="file" class="form-control" id="tester-password">
			        </div>

		       
			        <div class="form-group col-md-2">
			          <label for="tester-github"> Number of tests? </label>
			        </div>

			        <div class="form-group col-md-1">
			          <input type="number" class="form-control" id="tester-github">
			        </div>

			         <div class="form-group col-md-2">
			          <label for="tester-github"> Rate ($/test)? </label>
			        </div>

			        <div class="form-group col-md-1">
			          <input type="number" class="form-control" id="tester-github">
			        </div>

		        </div>

		        <div class="row">

		        <div class="form-group col-md-2">
			          <label for="tester-password"> Add Testing Tasks:</label>
			    </div>

			    <div class="form-group col-md-3">
			          <input type="text" placeholder="Eg. Test all end points">
			    </div>

			    <div class="form-group col-md-3">
			          <input type="text" placeholder="Eg. Test all end points">
			    </div>

			    <div class="form-group col-md-3">
			          <input type="text" placeholder="Eg. Test all end points">
			    </div>

		        </div>


		        <div class="row">

			        <div class="col-md-2">
					     <label> Choose Platform </label>
					</div><!-- /.col-lg-3 -->
					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-platform-web" aria-label="...">
					       <label for="tester-platform-web"> Web </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->
					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-platform-ios" aria-label="...">
					       <label for="tester-platform-ios"> iOS </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->
					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-platform-android" aria-label="...">
					       <label for="tester-platform-android"> Web </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->
					 
				</div>  <!-- /.row -->
				<div class="row">
			        <div class="col-md-2">
					     <label> Choose Languages </label>
					</div><!-- /.col-lg-3 -->
					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-languages-java" aria-label="...">
					       <label for="tester-languages-java"> Java </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->
					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-languages-objc" aria-label="...">
					       <label for="tester-languages-objc"> Obj C </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->

					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-languages-js" aria-label="...">
					       <label for="tester-languages-js"> JavaScript </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->

					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-languages-js" aria-label="...">
					       <label for="tester-languages-js"> PHP </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->

					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-languages-js" aria-label="...">
					       <label for="tester-languages-js"> Ruby </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->
					
					 
				</div>  <!-- /.row -->

				

				
	      	</form>

	      	<div id="nda">
	      	<h3>Non Disclosure Agreement</h3>
	      	<pre id="nda-text">
This Nondisclosure Agreement (the "Agreement") is entered into by and between _______________ with its principal offices at _______________ ("Disclosing Party") and _______________, located at _______________ ("Receiving Party") for the purpose of preventing the unauthorized disclosure of Confidential Information as defined below. The parties agree to enter into a confidential relationship with respect to the disclosure of certain proprietary and confidential information ("Confidential Information").
1. Definition of Confidential Information. For purposes of this Agreement, "Confidential Information" shall include all information or material that has or could have commercial value or other utility in the business in which Disclosing Party is engaged. If Confidential Information is in written form, the Disclosing Party shall label or stamp the materials with the word "Confidential" or some similar warning. If Confidential Information is transmitted orally, the Disclosing Party shall promptly provide a writing indicating that such oral communication constituted Confidential Information.
2. Exclusions from Confidential Information. Receiving Party's obligations under this Agreement do not extend to information that is: (a) publicly known at the time of disclosure or subsequently becomes publicly known through no fault of the Receiving Party; (b) discovered or created by the Receiving Party before disclosure by Disclosing Party; (c) learned by the Receiving Party through legitimate means other than from the Disclosing Party or Disclosing Party's representatives; or (d) is disclosed by Receiving Party with Disclosing Party's prior written approval.
3. Obligations of Receiving Party. Receiving Party shall hold and maintain the Confidential Information in strictest confidence for the sole and exclusive benefit of the Disclosing Party. Receiving Party shall carefully restrict access to Confidential Information to employees, contractors, and third parties as is reasonably required and shall require those persons to sign nondisclosure restrictions at least as protective as those in this Agreement. Receiving Party shall not, without prior written approval of Disclosing Party, use for Receiving Party's own benefit, publish, copy, or otherwise disclose to others, or permit the use by others for their benefit or to the detriment of Disclosing Party, any Confidential Information. Receiving Party shall return to Disclosing Party any and all records, notes, and other written, printed, or tangible materials in its possession pertaining to Confidential Information immediately if Disclosing Party requests it in writing.
4. Time Periods. The nondisclosure provisions of this Agreement shall survive the termination of this Agreement and Receiving Party's duty to hold Confidential Information in confidence shall remain in effect until the Confidential Information no longer qualifies as a trade secret or until Disclosing Party sends Receiving Party written notice releasing Receiving Party from this Agreement, whichever occurs first.
5. Relationships. Nothing contained in this Agreement shall be deemed to constitute either party a partner, joint venturer or employee of the other party for any purpose.
6. Severability. If a court finds any provision of this Agreement invalid or unenforceable, the remainder of this Agreement shall be interpreted so as best to effect the intent of the parties.
7. Integration. This Agreement expresses the complete understanding of the parties with respect to the subject matter and supersedes all prior proposals, agreements, representations, and understandings. This Agreement may not be amended except in a writing signed by both parties.
8. Waiver. The failure to exercise any right provided in this Agreement shall not be a waiver of prior or subsequent rights.
This Agreement and each party's obligations shall be binding on the representatives, assigns, and successors of such party. Each party has signed this Agreement through its authorized representative.
            </pre>
            
            <div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-nda" aria-label="...">
					       <label for="tester-nda"> I agree with all terms.</label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->		
	      	</div> <!-- /#NDA -->

	      	<div id="become-tester-confirmation">
	      		<h2>Congratulations, your API is added. We will send you an email when testers opt for it. 
	      		Meanwhile, you can reate a new one. </h2>
	      		  <div>   
               <img id="create-api-btn" src="images/buttons-04.png">
            </div> 
	      	</div>

 
	</div>
</div>

<div class="row">
	<div class="col-md-2 col-md-push-10">
		<img id="tester-next-step1-btn" src="images/button_next_hover.png">
	</div>
</div>				
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <script type="text/javascript">


              $("#tester-next-step1-btn").mouseover( function() {
                $("#tester-next-step1-btn").attr("src", "images/button_next.png");
             });

              $("#tester-next-step1-btn").mouseleave( function() {
                $("#tester-next-step1-btn").attr("src", "images/button_next_hover.png");
             });

              $("#tester-next-step1-btn").click( function() {
                $("#become-tester-steps").attr("src", "images/step-02.png");
                $("#form-become-a-tester-step1").slideUp();
                $("#tester-next-step1-btn").fadeOut();
                $("#nda").show();

             }); 

              $("#tester-nda").change( function() {
                $("#become-tester-steps").attr("src", "images/step-03.png");
                $("#nda").slideUp();
                $("#become-tester-confirmation").slideDown();

             }); 


             $("#tester-search-btn").mouseover( function() {
                $("#tester-search-btn").attr("src", "images/buttons_hover-01.png");
             });

              $("#tester-search-btn").mouseleave( function() {
                $("#tester-search-btn").attr("src", "images/buttons-01.png");
             }); 

              $("#tester-search-btn").click( function() {
               $(location).attr('href', 'browse-apis.php');
             });

               $("#create-api-btn").mouseover( function() {
                $("#create-api-btn").attr("src", "images/buttons-04_hover.png");
             });

              $("#create-api-btn").mouseleave( function() {
                $("#create-api-btn").attr("src", "images/buttons-04.png");
             });  

              $("#create-api-btn").click( function() {
               $(location).attr('href', 'create-api.php');
             });
        </script>      

<? include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?> 
