<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>


<script type="text/javascript">

  $(document).ready(function () {
    $("#sid").keydown(function () {
      if ($("#sid").val().length > 6 && $("#sid").val().length < 11) {
        if (isInteger($("#sid").val())) {
          var flickerAPI = "http://mysummer-dev-demo.berkeley.edu/test56.php";
          $.getJSON(flickerAPI, {
            format: "json"
          })
            .done(function (data) {
              console.log(data);


              $("#firstname").val(data.firstName);
              $("#firstname").val(data.lastName);
            });
        }
      }
    });
  });
  function isInteger(x) {
    return x % 1 === 0;
  }
</script>

<form>
    <label>SID</label>
    <input type="text" name="SID" id="sid"/>
    <label>FirstName</label>
    <input type="text" name="FirstName" id="firstname"/>
    <label>LastName</label>
    <input type="text" name="FirstName" id="lastname"/>
    <label>FirstName</label>
    <input type="text" name="FirstName" id="email"/>
</form>