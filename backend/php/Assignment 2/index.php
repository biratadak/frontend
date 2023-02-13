<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Assgnment 1</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="form-div">
    <form method="post" action="submit.php">
      <div class="top ">
        <div class="fd-col">
          <label for="fname">First Name<span name="ferr" class="error">
              *
            </span></label>
          <input type="text" name="fname" class="name">
        </div>
        <div class="fd-col">
          <label for="lname">Last Name<span name="lerr" class="error">
              *
            </span></label>
          <input type="text" name="lname" class="name"><br>
        </div>
      </div>
      <div class="bottom fd-col ">
        <input type="text" disabled id="display" value="Enter your name">
        <input class="btn" type="submit" value="Submit" onclick="boolFunc()">
      </div>
    </form>

  </div>


  <script>
    // Function to check only alphabet and spaces in given name field.
    function allLetter(fieldName, errorFieldName) {
      document.getElementsByName(fieldName)[0].onchange = function () {
        inputtxt = document.getElementsByName(fieldName)[0].value;
        var pattern = /^[A-Za-z-' ]+$/;
        if (inputtxt.match(pattern)) {

          document.getElementsByName(errorFieldName)[0].innerHTML = "";
        }
        else {
          document.getElementsByName(errorFieldName)[0].innerHTML = "Only letters and white space allowed";
        }
      }
    }
    // Function to live update the display field with data from given name field
    function liveUpdate(fieldName) {
      document.getElementsByName(fieldName)[0].onkeyup = function () {
        document.querySelector("#display").value = document.getElementsByName("fname")[0].value.toUpperCase().concat(" ", document.getElementsByName("lname")[0].value.toUpperCase());
      }
    }
    // To live update the fields 
    liveUpdate("fname");
    liveUpdate("lname");
    // To check the fields only contains alphabets
    allLetter("fname", "ferr");
    allLetter("lname", "lerr");

  </script>
</body>

</html>