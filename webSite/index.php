<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <div class="left-nav">
      <ul>
        <li class="list-item" onclick="displaySection1()">List Item 1</li>
        <li class="list-item" onclick="displaySection2()">List Item 2</li>
        <li class="list-item" onclick="displaySection3()">List Item 3</li>
        <li class="list-item" onclick="displaySection4()">List Item 4</li>
        <li class="list-item" onclick="displaySection5()">List Item 5</li>
      </ul>
    </div>
    <div class="right-section">
      <div id="section1" style="display: block;">
      	<h2 style="margin: 50px 300px;">Home Settings</h2>
      	<form method="get">
      		<div class="form-group row"><label class="col-sm-2 col-form-label">Website Heading</label>
      			<div class="col-sm-10">
      				<input type="text" class="form-control">
      			</div>
      		</div>
      		<div class="hr-line-dashed"></div>
      		<div class="form-group row"><label class="col-sm-2 col-form-label">Introduction Part</label>
      			<div class="col-sm-10">
      				<input type="text" class="form-control"> <span class="form-text m-b-none">You can put your website introduction here</span>
      			</div>
      		</div>
      		<div class="input-group mb-6">
			  <input type="file" class="form-control" id="inputGroupFile02">
			  <label class="input-group-text" for="inputGroupFile02">Upload 1</label>
			</div>
      		<div class="input-group mb-6">
			  <input type="file" class="form-control" id="inputGroupFile02">
			  <label class="input-group-text" for="inputGroupFile02">Upload 2</label>
			</div>
			<div class="input-group mb-6">
			  <input type="file" class="form-control" id="inputGroupFile02">
			  <label class="input-group-text" for="inputGroupFile02">Upload 3</label>
			</div>
			<div class="form-group row"><label class="col-sm-2 col-form-label">Choose a theme</label>
      			<div class="col-sm-10">
		   			<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
					  <option value="1">light</option>
					  <option value="2">Dark</option>
					</select>
      			</div>
      		</div>
      		<button type="submit" class="btn btn-primary">Save Settings</button>
          <button type="button" class="btn btn-warning">Reset Settings</button>
      	</form>
      </div>
      <div id="section2" style="display: none;">
          <div class="form-group row"><label class="col-sm-2 col-form-label">Introduction Part</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
      </div>
      <div id="section3" style="display: none;">
        <h1>Section 3</h1>
        <p>Content for Section 3</p>
      </div>
      <div id="section4" style="display: none;">
        <h1>Section 4</h1>
        <p>Content for Section 4</p>
      </div>
      <div id="section5" style="display: none;">
        <h1>Section 5</h1>
        <p>Content for Section 5</p>
      </div>
    </div>
    <script>
      function displaySection1() {
        document.getElementById("section1").style.display = "block";
        document.getElementById("section2").style.display = "none";
        document.getElementById("section3").style.display = "none";
        document.getElementById("section4").style.display = "none";
        document.getElementById("section5").style.display = "none";
      }	
      function displaySection2() {
        document.getElementById("section1").style.display = "none";
        document.getElementById("section2").style.display = "block";
        document.getElementById("section3").style.display = "none";
        document.getElementById("section4").style.display = "none";
        document.getElementById("section5").style.display = "none";
      }      
      function displaySection3() {
        document.getElementById("section1").style.display = "none";
        document.getElementById("section2").style.display = "none";
        document.getElementById("section3").style.display = "block";
        document.getElementById("section4").style.display = "none";
        document.getElementById("section5").style.display = "none";
      }      
      function displaySection4() {
        document.getElementById("section1").style.display = "none";
        document.getElementById("section2").style.display = "none";
        document.getElementById("section3").style.display = "none";
        document.getElementById("section4").style.display = "block";
        document.getElementById("section5").style.display = "none";
      }      
      function displaySection5() {
        document.getElementById("section1").style.display = "none";
        document.getElementById("section2").style.display = "none";
        document.getElementById("section3").style.display = "none";
        document.getElementById("section4").style.display = "none";
        document.getElementById("section5").style.display = "block";
      }
  	</script>
  	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
      
