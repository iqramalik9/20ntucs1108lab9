<html>
    <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<form action="Auth.php" method="get">
  <div class="form-group">
    <label for="emailaddress">Email address</label>
    <input type="email" class="form-control" name="emailaddress" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Pass">Password</label>
    <input type="password" class="form-control" name="pass" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="radio"  name="radio" value="1st">
    <label class="form-check-label" for="Radio">First Radio</label>
  </div>
  <div class="form-group form-check">
    <input type="radio"  name="radio"  value="2nd">
    <label class="form-check-label" for="radio">Second Radio</label>
  </div>
  <div class="form-group form-check">
    <input type="radio"  name="radio"  value="3rd">
    <label class="form-check-label" for="radio">Third Radio</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox"  name="check" >
    <label class="form-check-label" for="check">checkbox</label>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

<label for="agrument">

</body>

</html>
