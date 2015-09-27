<? include 'header.php'; ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron hp-header-message">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-push-1 hp-message">
            <div class="hp-icon">
               <img src="images/1BecomeTester.png">
            </div>
            <div>   
               <img id="tester-btn" src="images/buttons-02.png">
            </div> 
            <div class="hp-steps">
              <ol>
                <li> Select API </li>
                <li> Test and Give Feedback</li>
                <li> Get Paid</li>
              </ol>           
            </div>  
          </div>
          <div class="col-md-1 col-md-push-2 hp-vertical-line">
            
          </div>
          <div class="col-md-4 col-md-push-2 hp-message">
            <div class="hp-icon">
               <img src="images/2GetAPItested.png">
            </div>
             <div>   
               <img id="api-provider-btn" src="images/buttons-05.png">
            </div> 
            <div class="hp-steps">
              <ol>
                <li> Upload Your API Info </li>
                <li> Receive Feedback</li>
                <li> Improve Your API</li>
              </ol>           
            </div>     
          </div>
        </div> <!--/.row -->
      </div>
    </div> <!--.jumbotron -->
    <div class="row">
        <div class="col-md-4 col-md-push-1 hp-horizontal-line"> </div>
        <div class="col-md-4 col-md-push-3 hp-horizontal-line"> </div>
    </row>
       <div class="jumbotron hp-header-message">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-push-1 hp-message">
            <div class="hp-icon">
               <img src="images/3BrowseAPI.png">
            </div>
            <div>   
               <img id="browse-api-btn" src="images/buttons-03.png">
            </div> 
            <div class="hp-steps">
              <ol>
                <li> Well Tested APIs </li>
                <li> Use It Or Give Feedback</li>
              </ol>           
            </div>  
          </div>
          <div class="col-md-1 col-md-push-2 hp-vertical-line">
            
          </div>
          <div class="col-md-4 col-md-push-2 hp-message">
            <div class="hp-icon">
               <img src="images/3CreateAPI.png">
            </div>
             <div>   
               <img id="create-api-btn" src="images/buttons-04.png">
            </div> 
            <div class="hp-steps">
              <ol>
                <li> Create Powerful APIs </li>
                <li> Get Them Tested</li>
                <li> Receive Feedback &amp; Rating</li>
              </ol>           
            </div>     
          </div>
        </div> <!--/.row -->
      </div>
    </div> <!--.jumbotron -->

   
 
    

     <? include 'footer.php'; ?>

  


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

         <script type="text/javascript">
       
 
            

              $("#browse-api-btn").mouseover( function() {
                $("#browse-api-btn").attr("src", "images/buttons-03_hover.png");
             });

              $("#browse-api-btn").mouseleave( function() {
                $("#browse-api-btn").attr("src", "images/buttons-03.png");
             }); 

              $("#browse-api-btn").click( function() {
               $(location).attr('href', 'browse-apis.php');
             });



             $("#tester-btn").mouseover( function() {
                $("#tester-btn").attr("src", "images/buttons_hover-02.png");
             });

              $("#tester-btn").mouseleave( function() {
                $("#tester-btn").attr("src", "images/buttons-02.png");
             });

              $("#tester-btn").click( function() {
               $(location).attr('href', 'become-tester.php');
             });

            $("#api-provider-btn").mouseover( function() {
                $("#api-provider-btn").attr("src", "images/buttons_hover-05.png");
             });

              $("#api-provider-btn").mouseleave( function() {
                $("#api-provider-btn").attr("src", "images/buttons-05.png");
             });  

              $("#api-provider-btn").click( function() {
               $(location).attr('href', 'add-api.php');
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

    </body>
</html>
