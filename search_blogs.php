<?php include("common/header.php"); ?>

<body>

<?php include("common/nav.php"); ?>

<div class="col-xs-12 col-md-12 col-lg-12">
  <h1 class="page_title"> Find Blogs </h1>
</div>

<div class="col-xs-12 col-md-12 col-lg-12 body_outline">

<div class="col-xs-12 col-md-12 col-lg-12 jumbotron">

<!--____________________________________________________________________-->
<!--________________________ Google Search API ________________________-->
<script>
  (function() {
    var cx = '003759203999746312638:lr4gjgilm4w';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
<!--____________________________________________________________________-->
<!--____________________________________________________________________-->

<hr>
<button name="search_blogs" class=""> Load Blogs from LITFL </button><hr>
<button name="search_blogs_reditt" class=""> Load Blogs from Reditt </button><hr>
<div class="show_blogs"></div>


<!--____________________________________________________________________-->
<!--________________________ Search LTFTl Blogs _________________________-->
<script>

  $("button[name=search_blogs]").click(function(){
      $.ajax({
        type: 'post',
        url: 'twitteroauth/blogs.php',
        // data: 'search_user='+search_user,
        success: function (response) {
          $("div.show_blogs").html(response);
        }
      });
  });

</script>
<!--____________________________________________________________________-->
<!--____________________________________________________________________-->



<!--____________________________________________________________________-->
<!--________________________ Search LTFTl Blogs _________________________-->
<script>

  $("button[name=search_blogs_reditt]").click(function(){
      $.ajax({
        type: 'post',
        url: 'twitteroauth/blogs_reditt.php',
        // data: 'search_user='+search_user,
        success: function (response) {
          $("div.show_blogs").html(response);
        }
      });
  });

</script>
<!--____________________________________________________________________-->
<!--____________________________________________________________________-->


</div>

</div>

<script>



</script>


</body>
</html>
