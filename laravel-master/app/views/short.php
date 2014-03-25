<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script type="text/javascript" 
           src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"/>
<script src="jquery-1.10.2.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>URL shrinker</title>
<style type="text/css">
<!--
body {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 25px;
	text-align: center;
}
input {
	font-size: 20px;
	padding: 10px;
}
h2 {
	font-size: 16px;
	margin: 0px;
	padding: 0px;
}
h1 {
	margin: 0px;
	padding: 0px;
	font-size: 35px;
	color: #009999;
}
form {
	margin: 0px;
	padding: 0px;
}
h3 {
	font-size: 13px;
	color: #666666;
	font-weight: normal;
}
h3 a {
	color: #006699;
	text-decoration: none;
}
table {
	font-size: 13px;
	background-color: #EBEBEB;
	border: 1px solid #CCCCCC;
}
-->
</style>

</head>

<body id="ajax_message">


<h1> URL to shrink: </h1>
  <input name="url" type="text" id="url" size="75" />
  <input type="button" name="Submit" value="Go" id="Submit"/>

<!--if form was just posted-->

<br />
<h2>Here's the short URL: <a id='shortlink' href="#" target="_blank"></a></h2>

<!---->

<br />
<br />
<script>
$("#Submit").click(function()
  { 
    var request = $.ajax({
        type    : "GET",
        url     : '/laravel/laravel-master/public/hello',
        data    : {'url':$('#url').val()} ,
        cache   : false,
        });//close ajax

        request.done(function( data ) 
        { 
          if(data)
          { 
            $('#shortlink').text(data);
			$('#shortlink').attr('href',data);
          } 
      });
});
              
</script>

</body>
</html>