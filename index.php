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
               <img id="api-provider-btn" src="images/buttons-03.png">
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
               <img id="api-provider-btn" src="images/buttons-03.png">
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

    <div class="row browse">
          <div class="col-md-10 col-md-push-1 hp-message">
             <div class="hp-browse-apis-row">   
               <img id="search-btn" src="images/buttons-01.png"> <span class="hp-browse-apis">Find well tested top rated APIs</span>
            </div> 
          </div>
    </div> <!--/.row -->
 
    

     <? include 'footer.php'; ?>

  


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

         <script type="text/javascript">
       
 
            

              $("#search-btn").mouseover( function() {
                $("#search-btn").attr("src", "images/buttons_hover-01.png");
             });

              $("#search-btn").mouseleave( function() {
                $("#search-btn").attr("src", "images/buttons-01.png");
             }); 

              $("#search-btn").click( function() {
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
                $("#api-provider-btn").attr("src", "images/buttons_hover-03.png");
             });

              $("#api-provider-btn").mouseleave( function() {
                $("#api-provider-btn").attr("src", "images/buttons-03.png");
             });  

              $("#api-provider-btn").click( function() {
               $(location).attr('href', 'add-api.php');
             });

        </script>

    </body>
</html>
