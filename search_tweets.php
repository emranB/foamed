<?php include("common/header.php"); ?>

<body>

<?php include("common/nav.php"); ?>

<div class="col-xs-12 col-md-12 col-lg-12">
  <h1 class="page_title"> Look Up Tweets </h1>
</div>

<div class="col-xs-12 col-md-12 col-lg-12 body_outline">

<div class="col-xs-12 col-md-12 col-lg-12 jumbotron">

<input type="number" name="number_of_results" value="15" placeholder="default set to 15 rows">
<select name="search">
  <option value=""> &nbsp * &nbsp SELECT ONE </option>
  <option value="FOAMed"> FOAMed </option>
  <option value="FOAMlit"> FOAMlit </option>
  <option value="FOAMcc"> FOAMcc </option>
  <option value="FOAMems"> FOAMems </option>
  <option value="FOAMtox"> FOAMtox </option>
  <option value="FOAMus"> FOAMus </option>
  <option value="FOAMped"> FOAMped </option>
  <option value="EMTOT"> EMTOT </option>
  <option value="EMConf"> EMConf </option>
  <option value="IMconf"> IMconf </option>
</select>
<button name="search_tweets"> GO! </button>
<hr>

<div class="show_tweets"></div>

</div>

</div>



<script>

  $("button[name=search_tweets]").click(function(){

    setInterval(function(){
      var hashtag = $("select[name=search] option:selected").val();
      var number_of_results = parseFloat( $("input[name=number_of_results]").val() );

      if( hashtag !== ""){
        $.ajax({
          type: 'post',
          url: 'twitteroauth/tweets.php',
          data: 'hashtag='+hashtag+'&number_of_results='+number_of_results,
          success: function (response) {
            $("div.show_tweets").html(response);
          }
        });
      }else{
        $("div.show_tweets").html("Please select an option");
      }
    }, 2000);

  });


  $(document).ready(function(){
    var hashtag = $("select[name=search] option:selected").val();

  if( hashtag == ""){

        var number_of_results = parseFloat( $("input[name=number_of_results]").val() );
        $.ajax({
          type: 'post',
          url: 'twitteroauth/tweets.php',
          data: 'hashtag=FOAMed&number_of_results='+number_of_results,
          success: function (response) {
            $("div.show_tweets").html(response);
          }
        });

  }
});



</script>


</body>
</html>
