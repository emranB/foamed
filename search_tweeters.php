<?php include("common/header.php"); ?>

<body>

<?php include("common/nav.php"); ?>

<div class="col-xs-12 col-md-12 col-lg-12">
  <h1 class="page_title"> Stream User Timeline </h1>
</div>

<div class="col-xs-12 col-md-12 col-lg-12 body_outline">

<div class="col-xs-12 col-md-12 col-lg-12 jumbotron">

<select name="search_user">
  <option value=""> &nbsp * &nbsp SELECT ONE </option>
  <option value="FOAM_Highlights"> @ FOAM_Highlights </option>
  <option value="FOAMpodcast"> @ FOAMpodcast </option>
  <option value="foambase"> @ foambase </option>
  <option value="FOAMcc"> @ FOAMcc </option>
  <option value="FOAMstarter"> @ FOAMstarter </option>
  <option value="EMergucate"> @ EMergucate </option>
  <option value="EMNews"> @ EMNews </option>
  <option value="emergencypdx"> @ emergencypdx </option>
  <option value="ClinicalCaseRev"> @ ClinicalCaseRev </option>
  <option value="reeldx"> @ reeldx </option>
</select>
<button name="search_tweeters" class=""> GO! </button>
<hr>

<div class="show_tweeter_streamline"></div>

</div>

</div>

<script>

  $("button[name=search_tweeters]").click(function(){
    var search_user = $("select[name=search_user] option:selected").val();
    if( search_user !== ""){
      $.ajax({
        type: 'post',
        url: 'twitteroauth/tweeters.php',
        data: 'search_user='+search_user,
        success: function (response) {
          $("div.show_tweeter_streamline").html(response);
        }
      });
    }else{
      $("div.show_tweeter_streamline").html("Please select an option");
    }

  });

</script>


</body>
</html>
