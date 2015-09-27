<? include $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<img width="100%" src="images/page-03.jpg">
<div class="row feedback">
 <textarea id="message">Leave your comment here</textarea>	
 <div id="#score"></div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">

$("img").click(function(){
    var message = $("#message").val();
    $.ajax({
        url:'https://api.idolondemand.com/1/api/sync/analyzesentiment/v1?text='+message+'&apikey=da8a186a-c8f1-4d69-a243-86cc43c8ee62',
        headers: {
            'Accept':'application/json'
        },

        success:function(data) {
            console.log(data);
            $("#message").html("SCORE: " + data.aggregate.score + " \n SENTIMENT: " + data.aggregate.sentiment);

        }, // success function end here

    }); // ajax call ends here
});
</script>

<? include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>