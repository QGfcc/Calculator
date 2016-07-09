<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>calculator</title>
  </head>

<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
          integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
          crossorigin="anonymous">
  </script>-->
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"
          integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
          crossorigin="anonymous">
  </script>
  <!--  <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
          crossorigin="anonymous"
          >-->
  <link href="css/main.css" rel="stylesheet" type="text/css"/>

  <script src="js/main.js" type="text/javascript"></script>
  <body>
    <!--<div class="container-fluid">-->
    <!--      <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">-->
    <!--          <div class="row outputs">
                <div class="col-xs-12 ">
                  <input type="number" name="calScreen" id="calScreen" value="">
                  <span id="calScreen text-right">  </span>
                  <p id="calScreen" class="text-right">  </p>
                </div>
              </div>-->
    <table class=" inputs">
      <tr>
        <!--<td  id="calScreen" class="text-right" colspan="4">-->
        <td class="text-right" colspan="4">
          <p id="calScreen" class="text-right">  </p>
        </td>
      </tr>
      <tr class="NOCLASS">
        <!--          <div class="row inputs text-center">
                  <div class="row">-->
        <td class="buttons">
        <!--<td class="buttons" colspan="3">-->
          <button id="CA" value="CE">
            CA
          </button>
        </td>
        <td class="buttons">
        <!--<td class="buttons" colspan="3">-->
          <button id="CE" value="CE">
            CE
          </button>
        </td>
      </tr>
      <tr class="NOCLASS">
        <td class="buttons">
          <!--<button value="1" onclick="updateInput(this.value)">1</button>-->
          <button  class="digit" value="1">1</button>
        </td>
        <td class="buttons">
          <button  class="digit" value="2">
            2
          </button>
        </td>
        <td class="buttons">
          <button  class="digit" value="3">
            3
          </button>
        </td>
        <td class="buttons">
          <button class="operator" value="+">
            +
          </button>
        </td>
      </tr>
      <tr class="NOCLASS">
        <td class="buttons">
          <button  class="digit" value="4">
            4
          </button>
        </td>
        <td class="buttons">
          <button  class="digit" value="5">
            5
          </button>
        </td>
        <td class="buttons">
          <button  class="digit" value="6">
            6
          </button>
        </td>
        <td class="buttons">
          <button class="operator" value="-">
            -
          </button>
        </td>
      </tr>
      <tr class="NOCLASS">
        <td class="buttons">
          <button  class="digit" value="7">
            7
          </button>
        </td>
        <td class="buttons">
          <button  class="digit" value="8">
            8
          </button>
        </td>
        <td class="buttons">
          <button  class="digit" value="9">
            9
          </button>
        </td>
        <td class="buttons">
          <button class="operator" value="*">
            x
          </button>
        </td>
      </tr>
      <tr class="NOCLASS">
        <td class="buttons">
          <button  class="digit" value="0">
            0
          </button>
        </td>
        <td class="buttons">
          <button class="digit" value=".">
            .
          </button>
        </td>
        <td class="buttons">
          <!--<button id="equal" class="operator" value="=">-->
          <button class="operator" value="=">
            =
          </button>
        </td>
        <td class="buttons">
          <button class="operator" value="/">
            /
          </button>
        </td>
      </tr>
    </table>
    <!--        </div>
          </div>-->
    <!--</div>-->
    <footer>
      Coded by <a href="https://github.com/QGfcc">QG</a>
    </footer>

  </body>
</html>
