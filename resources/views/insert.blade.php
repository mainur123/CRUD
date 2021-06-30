<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Insertion</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST" action="/store" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center mb-4 mt-4">Add Member</h2>
        <div class="container">            
            <div class="form-group mb-3">
                <label>File No</label>
                <input type="number" name="file-no" id="file-no" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label>Member Name</label>
                <input type="text" name="member-name" id="member-name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Father/Husband Name</label>
                <input type="text" name="father-or-husband-name" id="father-or-husband-name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Mother Name</label>
                <input type="text" name="mother-name" id="mother-name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Mailing Address</label>
                <input type="text" name="mailing-address" id="mailing-address" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Permanent Address</label>
                <input type="text" name="permanent-address" id="permanent-address" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Mobile Number 1</label>
                <input type="tel" name="mobile-no-1" id="mobile-no-1" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Mobile Number 2</label>
                <input type="tel" name="mobile-no-2" id="mobile-no-2" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Date of Birth/Age</label>
                <input type="date" name="birth-date" id="birth-date" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Email Address</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>National ID Number</label>
                <input type="text" name="NID" id="NID" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Profession</label>
                <input type="text" name="profession" id="profession" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Office Address</label>
                <input type="text" name="office-address" id="office-address" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Designation</label>
                <input type="text" name="designation" id="designation" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Nominee Name</label>
                <input type="text" name="nominee-name" id="nominee-name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Relation With Member</label>
                <input type="text" name="relation" id="relation" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Building Number</label>
                <input type="text" name="building-number" id="building-number" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Total Amount</label>
                <input type="text" name="amount" id="amount" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>No. Of Installment</label>
                <input type="text" name="installment-number" id="installment-number" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Installment Start From</label>
                <input type="date" name="installment-start" id="installment-start" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Member Image</label>
                <input type="file" name="member_img" id="member-img" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Nominee Image</label>
                <input type="file" name="nominee_img" id="nominee-img" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Booking Money</label>
                <input type="text" name="booking-money" id="booking-money" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Down Payment</label>
                <input type="text" name="down-payment" id="down-payment" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Car Parking</label>
                <input type="text" name="car-parking" id="car-parking" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Land Filling(1st)</label>
                <input type="text" name="land-filling-1" id="land-filling-1" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Land Filling(2nd)</label>
                <input type="text" name="land-filling-2" id="land-filling-2" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Building Pilling</label>
                <input type="text" name="building-pilling" id="building-pilling" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>1st floor Roof Casting</label>
                <input type="text" name="roof-casting" id="roof-casting" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Finishing Work</label>
                <input type="text" name="finishing-work" id="finishing-work" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>After Handover Money</label>
                <input type="text" name="after-handover-money" id="after-handover-money" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>