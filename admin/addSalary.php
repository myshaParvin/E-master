<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<!-- CSS Files -->
<link href="../assets/css/Footerstyle.css" rel="stylesheet" type='text/css'>

<!-- Font Awesome -->
<link href="../assets/fontawesome/css/all.min.css" rel="stylesheet">

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h3 class="text-center pt-5 pb-5">Add Salary</h3>


<div class="container">
    <div>
        <a href="index.php">
    <button type="button" class="btn btn-outline-danger">Back to Dashboard</button>
        </a>
</div>
  <form method="POST" action="addSalaryaction.php">
    
    <div class="row">
      <div class="col-25">
        <label for="salary_to">Salary To</label>
      </div>
      <div class="col-75">
        <input type="text" id="salary_to" name="salary_to">
      </div>
    </div>
     <div class="row">
     <div class="col-25">
        <label for="salary_date">Salary Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="salary_date" name="salary_date">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="salary_amount">Salary Amount</label>
      </div>
      <div class="col-75">
        <input type="text" id="salary_amount" name="salary_amount">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="tsalary_amount">Total Salary Amount</label>
      </div>
      <div class="col-75">
        <input type="text" id="tsalary_amount" name="tsalary_amount">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="received_on">Salary Received on</label>
      </div>
      <div class="col-75">
        <input type="text" id="received_on" name="received_on">
      </div>
    </div>
    <div class="row">
      <input type="submit" name="add" value="Add Salary">
    </div>
  </form>
</div>

<?php require_once '../includes/footer.php'; ?>

</body>
</html>
