<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Customer</title>

        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    </head>
    <body>
        <section class="position-absolute top-50 start-50 translate-middle text-success">
        
        <h3 class="pb-2">Please Enter New Customer Details</h3>
        
        <form method="post" action="{{ route('addcustomer') }}">   
            {{ csrf_field() }}
            <div class="mb-1"> 
                <label for="company-name" class="form-label">Company Name</label>
                <input name="companyName" type="text" class="form-control" id="company-name" required="true">
            </div>
            <div class="mb-1">
                <label for="first-name" class="form-label">First Name</label>
                <input name="firstName" type="text" class="form-control" id="first-name" required="true">
            </div>
            <div class="mb-1">
                <label for="last-name" class="form-label">Last Name</label>
                <input name="lastName" type="text" class="form-control" id="last-name" required="true">
            </div>
            <div class="mb-1">
                <label for="contact-number" class="form-label">Contact Number</label>
                <input name="contactNumber" type="text" class="form-control" id="contact-number" required="true">
            </div>
            <div class="mb-1">
                <label for="house-number" class="form-label">House/Flat No:</label>
                <input name="houseNumber" type="text" class="form-control" id="house-number" required="true">
            </div>
            <div class="mb-1">
                <label for="street" class="form-label">Street</label>
                <input name="street" type="text" class="form-control" id="street" required="true">
            </div>
            <div class="mb-1">
                <label for="town-city" class="form-label">Town/City</label>
                <input name="townCity" type="text" class="form-control" id="town-city" required="true">
            </div>
            <div class="mb-3">
                <label for="post-code" class="form-label">Post Code</label>
                <input name="postCode" type="text" class="form-control" id="post-code" required="true">
            </div>

            <button type="submit" class="btn btn-success">Add Customer</button>

            <a class="text-success m-lg-3" href="/customerlist">See Customer List</a>

        </form>

    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
