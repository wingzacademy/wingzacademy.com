<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wingz Academy | User Details</title>
<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/jpg" href="images/logo_t.png" />

<style>
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
  background-color:#fafafa;
}

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  margin-top:50px;
}

table caption {
  font-size: 1.5em;
  margin: .25em 0 .75em;
}

table tr {
  background: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th, table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

table td img { text-align: center; }
@media screen and (max-width: 600px) {

table { border: 0; }

table caption { font-size: 1.3em; }

table thead { display: none; }

table tr {
  border-bottom: 3px solid #ddd;
  display: block;
  margin-bottom: .625em;
}

table td {
  border-bottom: 1px solid #ddd;
  display: block;
  font-size: .8em;
  text-align: right;
}

table td:before {
  content: attr(data-label);
  float: left;
  font-weight: bold;
  text-transform: uppercase;
}

table td:last-child { border-bottom: 0; }
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 50%;
  position: absolute;
 
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>

<body>

<center>
<div class="wrap">
   <div class="search">
      <input id="myInput" type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div></center>
<br><br>

<table>
  <caption>
 <b>Search User Details</b>
  </caption>
  <thead>
    <tr>
	  <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Course</th>
      <th scope="col">College</th>
      <th scope="col">City</th>
      <th scope="col">Date-Time</th>
      
    </tr>
  </thead>
  <tbody id="myTable">
    <tr>
	  <td data-label="sno">1</td>
      <td scope="row" data-label="Name">Hello</td>
      <td data-label="Email">Hello</td>
      <td data-label="Phone">Hello</td>
      <td data-label="Course">Hello</td>
      <td data-label="College">Hello</td>
      <td data-label="City">Hello</td>
      <td data-label="Date-Time">Hello</td>
    </tr>

  </tbody>
</table>
</body>
</html>
