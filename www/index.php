<?php
# allow only 163.111.168 subnet
if (! preg_match('/163\.111\.168/', $_SERVER['REMOTE_ADDR'])) {
   header("location: deny.html");
   exit();
} ?>
<html>
  <head>
    <title>WebCam portal</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="lib/jquery.js"></script>
    <script type="text/javascript">
    function open_door() {
      $.ajax({
        type: "GET",
        url: "task/open.php",
        error:function(msg){
          alert("Error: thanks to call admin");
        },
        success:function(data){
          alert("gate opening");
        }
      });
    }
    </script>
  </head>
  <body bgcolor="#808080">
    <center>
      <font face="Arial,Helvetica,Verdana" size=-1>
        <table>
          <tr><td align="center"><h1>Portail</h1><td></tr>
          <tr><td align="center"><img src="http://<?php echo $_SERVER['SERVER_ADDR']; ?>:8081/"></td></tr>
          <tr><td align="left"><input type="button" onclick="open_door();" value="Open" /></td></tr>
        </table>
      </font>
    </center>
  </body>
</html>
