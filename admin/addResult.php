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

<h3 class="text-center pt-5 pb-5">Add Result</h3>
<div>
    
        <a href="index.php">
    <button type="button" class="btn btn-outline-danger">Back to Dashboard</button>
        </a>
</div>

<div class="container">
  <form method="POST" action="addAction.php">
    <div class="row">
      <div class="col-25">
        <label for="result_type">Result Type</label>
      </div>
      <div class="col-75">
        <input type="text" id="result_type" name="result_type">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="result_session">Result Session</label>
      </div>
      <div class="col-75">
        <input type="text" id="result_session" name="result_session">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="course_id">Course ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="course_id" name="course_id">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="course_name">Course Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="course_name" name="course_name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade">Grade</label>
      </div>
      <div class="col-75">
        <input type="text" id="grade" name="grade">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="cgpa">CGPA</label>
      </div>
      <div class="col-75">
        <input type="text" id="cgpa" name="cgpa">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="remark">Remark</label>
      </div>
      <div class="col-75">
        <input type="text" id="remark" name="remark">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="student_id">Student ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="student_id" name="student_id">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="faculty_id">Entried By</label>
      </div>
      <div class="col-75">
        <input type="text" id="faculty_id" name="faculty_id">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="entry_date">Entry Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="entry_date" name="entry_date">
      </div>
    </div>
    <div class="row">
      <input type="submit" name="add" value="Add">
    </div>
  </form>
</div>

<?php require_once '../includes/footer.php'; ?>

</body>
</html>
