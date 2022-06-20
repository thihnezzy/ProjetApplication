<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://www.insa-centrevaldeloire.fr/sites/default/files/favicon_0.ico" type="image/vnd.microsoft.icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/account-paramter.css">
    <script src="https://kit.fontawesome.com/33e40bbd30.js" crossorigin="anonymous"></script>
    <title>INSA Car</title>
</head>

<body>
<div class="container rounded bg-white mt-5 mb-5 fs-3 fw-bold">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold full-name"></span><span class="text-black-50 email-user"></span><span> </span></div>
        </div>
        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control " placeholder="Amine" value="" name="first-name" disabled></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="" placeholder="JAIIT" name="last-name" disabled></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Telephone Number</label><input type="text" class="form-control" placeholder="0600000000" value=""  name="telephone-number" disabled></div>
                    <div class="col-md-6"><label class="labels">Student Card</label><input type="text" class="form-control" placeholder="02931xxxxx" value="" name="student-card" disabled></div>
                    <div class="col-md-12"><label class="labels">Address </label><input type="text" class="form-control" placeholder="125 Rue charlet" value="" name="address" disabled></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="example@hotmail.com" value="" name="email" disabled></div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2 mb-5 justify-content-center"><button onclick="document.location='./my-account.php'" class="btn btn-outline-primary profile-button text-white" type="button">Disconnect</button></div>
        <div class="col-md-2 mb-5 "><button class="btn btn-primary profile-button" type="button">Edit Profile</button></div>
        <div class="col-md-4"></div>
    </div>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/account-parameter.js"></script>
</body>

</html>