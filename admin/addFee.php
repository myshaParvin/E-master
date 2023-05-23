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

<h3 class="text-center pt-5 pb-5">Add Fee</h3>


<div class="container">
    <div>
        <a href="index.php">
    <button type="button" class="btn btn-outline-danger">Back to Dashboard</button>
        </a>
</div>
  <form method="POST" action="addFeeaction.php">
    
    <div class="row">
      <div class="col-25">
        <label for="payment_session">Payment Session</label>
      </div>
      <div class="col-75">
        <input type="text" id="payment_session" name="payment_session">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="payment_purpose">Payment Purpose</label>
      </div>
      <div class="col-75">
        <input type="text" id="payment_purpose" name="payment_purpose">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="payment_by">Payment By</label>
      </div>
      <div class="col-75">
      <input type="number" id="payment_by" name="payment_by">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      <label for="payment_date">Payment Date</label>
      </div>
      <div class="col-75">
      <input type="date" id="payment_date" name="payment_date">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      <label for="amount">Amount</label>
      </div>
      <div class="col-75">
      <input type="number" id="amount" name="amount">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="t_amount">Total Amount</label>
      </div>
      <div class="col-75">
        <input type="number" id="t_amount" name="t_amount">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="payment_method">Payment Method</label>
      </div>
      <div class="col-75">
        <input type="text" id="payment_method" name="payment_method">
      </div>
    </div>
    <div class="row">
      <input type="submit" name="add" value="Add Fee">
    </div>
  </form>
</div>

<?php require_once '../includes/footer.php'; ?>

</body>
</html>
