<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add User</title>
    
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div style="min-width: 350px">

    <div class="container-fluid">
        <div class="p-4 mx-auto shadow rounded" style="margin-top: 50px;width:100%;max-width: 310px">
            <h2 class="text-center">My School</h2>
            <img src="<?=ROOT?>/assets/logo3.png" alt="logo" class="d-block mx-auto border-primary rounded-circle" style="width:70px;">
            <h3>Add User</h3>
            <input class="my-2 form-control" type="firstname" name="firstname" placeholder="First Name" autofocus>           
            <input class="my-2 form-control" type="lastname" name="lastname" placeholder="Last Name">            
            <input class="my-2 form-control" type="email" name="email" placeholder="Email" autofocus>
            
            <select class="my-2 form-control">
                <option>--Select a Gender--</option>
                <option>Male</option>
                <option>Female</option>
            </select>

            <select class="my-2 form-control">
                <option value="">--Select a Rank--</option>
                <option value="student">Student</option>
                <option value="reception">Reception</option>
                <option value="lecturer">Lecturer</option>
                <option value="admin">Admin</option>
                <option value="super_admin">Super Admin</option>
            </select>

            <input class="my-2 form-control" type="text" name="password" placeholder="Password">
            <input class="my-2 form-control" type="text" name="password2" placeholder="Re-Enter Password">
            <br>
            <button class="btn btn-primary float-end">Add User</button>
            <button class="btn btn-warning">Cancel</button>
        </div>
    </div>

    </div>
    <script src="https://kit.fontawesome.com/bdc8e02483.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>