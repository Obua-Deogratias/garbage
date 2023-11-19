<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garbage Collection Service Request</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link type="image/x-icon" rel="icon" href="img/11.ico">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="payment.html">Payment Method</a></li>
            </ul>
        </nav>
    </header>


    <div class="container mt-5">

        <div class="row" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <h1 class="mt-5 text-center">Order for service</h1>
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form action=""  class="p-5">
                <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
                <label for="name">Email:</label>
            <input type="email" class="form-control" id="email" name="name" required>

            <label for="email">Contact Information:</label>
            <input type="text" id="email" name="contact_info" required class="form-control">

            <!-- Other form fields -->

            <label for="service-type">Type of Service:</label>
            <select id="service-type" name="service-type" class="form-select">
                <option value="regular">Waste Collection Scheduling</option>
                <option value="bulk">Waste Management Reporting</option>
                <option value="special">Special Event Cleanup</option>
            </select><br>

            <!-- Additional form fields -->

            <label for="agreement">
                <input type="checkbox" id="agreement" name="agreement" required>
                I agree to the terms and conditions of the service.
            </label>
            <br>
            <button type="submit" class="btn btn-success">Submit Request</button>
            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>

    </div>
    <footer>
        <p>&copy; 2023 Garbage Go. All rights reserved.</p>
    </footer>
</body>
</html>
