<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>theunserializer</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link type="text/css" rel="stylesheet" href="/krumo/skins/default/skin.css"> 
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript">
  google.load("jquery", "1.4.2");
  // google.load("jqueryui", "1.7.2");
  </script>
  <script type="text/javascript" src="/krumo/krumo.js"></script>
  <script type="text/javascript">

  $(document).ready(function(){
    // $("#unserialize_input").submit(ajax_unser_callback());
    $(".button").click(function(){
        ajax_unser_callback();
        return false;
      }
    );
  });
  
  function ajax_unser_callback(){
    var str = $('#unserialize_input').val();
    //alert(str);
    
    $.ajax({
      type: "POST",
      url: "unserialize.php?js=TRUE",
      data: {'unserialize_input' : str},
      success: function(msg){
        $("#unserialize_result").ajaxComplete(function(event, request, settings){
          $(this).html(msg);
        });
      }
    });
    return false;
  }
  </script>
</head>
<body>
  <h1 id="logo">theunserializer</h1>
  <div id="unserialize">
    <form action="unserialize.php" method="post">
      <textarea id="unserialize_input" name="unserialize_input" cols="70" rows="7">a:4:{s:12:"comment_form";a:3:{s:4:"path";a:0:{}s:3:"key";N;s:6:"weight";d:18.899;}s:13:"user_register";a:3:{s:4:"path";a:0:{}s:3:"key";s:6:"submit";s:6:"weight";i:30;}s:9:"user_pass";a:3:{s:4:"path";a:0:{}s:3:"key";s:6:"submit";s:6:"weight";N;}s:10:"user_login";a:3:{s:4:"path";a:0:{}s:3:"key";s:6:"submit";s:6:"weight";i:2;}}</textarea>
      <br />&nbsp;<input type="submit" id="submit" class="button" name="submit" value="Unserialize" />
    </form>
    <div id="unserialize_result">
    </div>
  </div>
  <br /><br />
  <div><a href="http://www.imetchrischris.com">Chris Chris</a> - <a href="http://code.google.com/appengine">appengine</a> - <a href="http://github.com/christianchristensen/unserializer">source</a>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_donations">
      <input type="hidden" name="business" value="minenet@gmail.com">
      <input type="hidden" name="lc" value="US">
      <input type="hidden" name="amount" value="5.00">
      <input type="hidden" name="currency_code" value="USD">
      <input type="hidden" name="currency_code" value="USD">
      <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_SM.gif:NonHostedGuest">
      <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="If you found this useful - please consider donating.">
      <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
  </div>

  <script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
  try {
    var pageTracker = _gat._getTracker("UA-12977004-1");
    pageTracker._trackPageview();
    } catch(err) {}</script>
  </body>
  </html>
