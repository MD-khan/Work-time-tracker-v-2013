<html>
  <head>
    <title>StupidEvaluation</title>
    <script type="text/javascript">
      <!--
      var myresult = "";

      function EvalInput(input) {
        var result = eval(input);
        myresult = result;
        alert(result);
      }
      // -->
    </script>
  </head>
  <body>
    <center>
      <form name="calcform">

        <input name="calcbox" type=text><br>

        <!-- Run function -->
        <input name="calcbtn" type=button value="Calculate!"
         onclick="EvalInput(calcform.calcbox.value);">

        <input name="calcdel" type=reset value="Erase"><br>

        <!-- Get result from function somehow and display somewhere -->
        <script type="text/javascript">
          document.write(myresult);
        </script>

      </form>
    </center>
  </body>
</html>
<!-- vim:set ts=2 sw=2 et: --