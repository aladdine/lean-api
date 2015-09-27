<? include $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<div class="row">
	<div class="col-md-8 col-md-push-2">
		<img id="become-tester-steps" src="images/step-01.png">
	</div>
</div>
<div class="row">
	<div id="form-become-a-tester">
		<h2>Become a Tester</h2>
		<form>
				<div class="row">
			        <div class="form-group col-md-2">
			          <label for="tester-name"> First and Last Name</label>   
			        </div>

			         <div class="form-group col-md-6">
			          <input type="text" class="form-control" id="tester-name" placeholder="Ex. Joe Doe">
			        </div>
		        </div>
		        <div class="row">
			        <div class="form-group col-md-2">
			          <label for="tester-email"> Email</label>
			        </div>

			        <div class="form-group col-md-6">
			          <input type="text" class="form-control" id="tester-email" placeholder="Ex. joe@email.com">
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
					     <label> Choose Languages (s) </label>
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
					
					 
				</div>  <!-- /.row -->

				<div class="row">

			        <div class="col-md-2">
					   
					</div><!-- /.col-lg-3 -->
					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-languages-php" aria-label="...">
					       <label for="tester-languages-php"> Php </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->
					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-languages-ruby" aria-label="...">
					       <label for="tester-languages-ruby"> Ruby </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->

					<div class="col-md-2">
					    <div class="input-group">   
					       <input type="checkbox" id="tester-languages-python" aria-label="...">
					       <label for="tester-languages-python"> Python </label>
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-3 -->
					
					 
				</div>  <!-- /.row -->

		        <button type="submit" class="btn btn-default">Submit</button>
	      	</form>
			
 
	</div>
</div>

<? include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>