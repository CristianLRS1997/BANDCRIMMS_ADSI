<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <?php include ("includes/imports.php"); ?>
</head>
<body>
<section id="container">
<!--header start-->
    <?php include ("includes/header.php"); ?>
<!--header end-->
<!--sidebar start-->
    <?php include ("includes/menu.php"); ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Basic table
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th data-breakpoints="xs">Job Title</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Date of Birth</th>
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            <td>1</td>
            <td>Dennise</td>
            <td>Fuhrman</td>
            <td>High School History Teacher</td>
            
            <td>July 25th 1960</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Elodia</td>
            <td>Weisz</td>
            <td>Wallpaperer Helper</td>
          
            <td>March 30th 1982</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Raeann</td>
            <td>Haner</td>
            <td>Internal Medicine Nurse Practitioner</td>
           
            <td>February 26th 1966</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Junie</td>
            <td>Landa</td>
            <td>Offbearer</td>
           
            <td>March 29th 1966</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Solomon</td>
            <td>Bittinger</td>
            <td>Roller Skater</td>
           
            <td>September 22nd 1964</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Bar</td>
            <td>Lewis</td>
            <td>Clown</td>
           
            <td>August 4th 1991</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Usha</td>
            <td>Leak</td>
            <td>Ships Electronic Warfare Officer</td>
          
            <td>November 20th 1979</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Lorriane</td>
            <td>Cooke</td>
            <td>Technical Services Librarian</td>
           
            <td>April 7th 1969</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
    <?php include ("includes/footer.php"); ?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<?php include ("includes/scripts.php"); ?>
</body>
</html>
