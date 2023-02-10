<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;700&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,300;1,600;1,700&family=Questrial&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Frame 2.png">
    <title>Add New Employee</title>
    <link rel="stylesheet" href="/css/add.css">
</head>
<body>
    
    <nav>
        <div class="navbar">
            <p id = "logo">PT Meksiko</p>
            <ul>
                <li><a id = "nonselected" href="/" >Home</a></li>
                <li><a id ="nonselected" href="/dashboard">Dashboard</a></li>
                <li><p id ="select">Add Employee</p></li>
            </ul>
        </div>
    </nav>

    <div class="header">
        <p>Add New Employee</p>
    </div>

    <form action="/store-Karyawan" method = "POST">
        @csrf
        <div class="anggota">
            <div class="item">
                <p>Name</p>
                <input type="text" id="name" placeholder = "Type in your name" name="Name" minlength=5 maxlength = 20 required>
            </div>
            <div class="item">
                <p>Age</p>
                <input type="number" id="age" placeholder = "Type in your age" name="Age" min = "20" required>
            </div>
            <div class="item">
                <p>Address</p>
                <input type="textarea" name = "Address" id="address" placeholder = "Type in your address" maxlength=40 required cols="10" rows="5">
                {{-- <textarea name="Address" id="address" cols="10" rows="5" minlength=10 placeholder="Type in your address" maxlength=40 required></textarea> --}}
            </div>
            <div class="item">
                <p>Phone Number</p>
                <input type="tel" id="phonenum" placeholder = "Type in your phone number" name="PhoneNumber" minlength = 9 maxlength=12 pattern="08\d{8,10}"required>
            </div>
          
        </div>
        
        <div class="button">
            <button class="button-17" role="button">Confirm and Save Data</button>
        </div>
    </form>
    
    
    <br>
    <br>
    <br>

    

    



    
</body>
</html>