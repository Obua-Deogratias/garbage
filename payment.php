<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Options</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link type="image/x-icon" rel="icon" href="img/11.ico">
</head>
<body>
    <div class="container">
        <a href="index.html" class="btn btn-primary mt-5">Home</a>
    </div>
  <div class="container" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding: 40px;margin-top: 10px;">
    <h1 class="mt-5 mb-5">Payment Options</h1>
    <div class="row" style="padding-bottom: 30px;">
      <div class="col-md-6">
        <h2>Credit Card</h2>
        <form action="/checkout" method="post">
          <div class="form-group">
            <label for="cardNumber">Card Number</label>
            <input type="text" class="form-control" id="cardNumber" name="cardNumber">
          </div>
          <div class="form-group">
            <label for="expirationDate">Expiration Date</label>
            <input type="text" class="form-control" id="expirationDate" name="expirationDate">
          </div>
          <button type="submit" class="btn btn-success mt-2 mb-3">Pay Now</button>
        </form>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <h2 class="mb-3">MTN Mobile Money</h2>
        <form action="/checkout" method="post" class="mb-5">
          <button type="submit" class="btn" style="background-color: yellow;">Pay with MTN Mobile Money</button>
        </form>
        <h2 class="mb-3">Airtel Money</h2>
        <form action="/checkout" method="post">
          <button type="submit" class="btn btn-danger">Pay with Airtel Money</button>
        </form>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIae14y" crossorigin="anonymous"></script>
</body>
</html>
