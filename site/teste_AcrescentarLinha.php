<!DOCTYPE html>
<html>
<head>
  <style>
  div,p { margin:10px; }
  </style>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
  <div id="teste">div,
  <p id="a" value="a">A</p>
    <span>span, </span>
    <b>b </b>
 
  </div>
  <p>p,
    <span>span,
      <em>em </em>
    </span>
  </p>
 
  <div>div,
    <strong>strong,
      <span>span, </span>
      <em>em,
        <b>b, </b>
      </em>
 
    </strong>
    <b>b </b>
  </div>
<script>
$(function () {
  var parentTag = $("#teste").tagName;
  $("#teste").prepend(parentTag);
  
});
</script>

<script>
var a = $("#a").val();
$("p").parent("#teste").add();</script>
 
</body>
</html>