<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1 class="text-center">Registration Form</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        body{
    margin:0;
    padding:0;
    background-color:white;
    color:black;
    transition:0.3s;
}
        
        p ,label{
            color: white;
            margin-top:15px;
            margin-bottom: 5px;
            font-size: 16px;
            font-weight: bold;
        }
        .dark .container{
    background:#222;
}




        .container{
    width:min(400px,90%);
    background-color:#2c3e50;
    border:1px solid #3498db;
    border-radius:15px;
    padding:25px 30px;
    margin:20px auto;
    box-shadow:0 10px 25px rgba(0,0,0,0.5);
}
         h1{

            margin-bottom: 20px;
            text-align: center;
            color: white;
            text-shadow: 2px 2px 5px black;
            font-size: 32px; 
        }
        h4{

            margin-bottom: 20px;
            /* text-align: center; */
            color: white;
            text-shadow: 2px 2px 5px black;
            font-size: 18px; 
        }
        input[type="text"],
         input[type="email"], 
         input[type="number"],
         input[type="password"],
           select,
            textarea{
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button{
            width: 100%;
            padding: 10px ;
            background-color:#00bcd4;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        button:hover{
            background-color: #0097a7;
            transform: scale(1.05);
        }
        body{
    background-color: white;
    color: black;
    transition: 0.3s;
}

.dark{
    background-color: #121212;
    color: white;
}

#themeBtn{
    padding:10px 20px;
    border:none;
    border-radius:8px;
    cursor:pointer;
}
        </style>
        </head>
        <body>
    <div class="container">
         <button id="themeBtn">🌙 Dark Mode</button>
    <h1>Registration Form </h1>
    <form
action="process.php"
method="post"
enctype="multipart/form-data">
        
       
        <label for="name">Enter your Name</label>
<input
type="text"
id="name"
name="name"
class="form-control"
placeholder="Enter your Name"
required>
<h4>Select Gender</h4>

<input type="radio" id="male" name="gender" value="Male" required>
<label for="male">Male</label>

<input type="radio" id="female" name="gender" value="Female">
<label for="female">Female</label>
<h4>Enter your Email</h4>
<input
type="email"
id="email"
name="email"
class="form-control"
placeholder="Enter your Email"
required>
<h4>Address</h4>

<textarea
name="address"
rows="4"
class="form-control"
placeholder="Enter Address"
required></textarea>
        <br>
        <h4>College Name</h4>
<input
type="text"
id="college"
name="college"
class="form-control"
placeholder="Enter College Name"
required>
 <h4>Branch</h4>
<input
type="text"
id="branch"
name="branch"
class="form-control"
placeholder="Enter Branch"
required>
        
<h4>Select Course</h4>

<select
name="course"
class="form-select"
required>

<option value="">Select Course</option>

<option>B.Tech CSE</option>

<option>B.Tech IT</option>

<option>B.Tech ECE</option>

<option>B.Tech Mechanical</option>

</select>
        <h4>Mobile Number</h4>
<input
type="tel"
id="mobile_number"
name="mobile_number"
class="form-control"
maxlength="10"
pattern="[6-9]{1}[0-9]{9}"
placeholder="Enter Mobile Number"
required>
<h4>Upload Profile Photo</h4>

<input
type="file"
name="photo"
class="form-control"
accept=".jpg,.jpeg,.png"
required>
        <h4>Password</h4>
<input
type="password"
id="password"
name="password"
class="form-control"
placeholder="Enter Password"
minlength="8"
required>
        <h4>Confirm Password</h4>
<input
type="password"
id="confirm_password"
name="confirm_password"
class="form-control"
placeholder="Confirm Password"
required>
        <button
type="submit"
class="btn btn-primary w-100">
Submit Form
</button>
        

    </form>
   
    </div>
    <script>
        const btn = document.getElementById("themeBtn");

if(localStorage.getItem("theme") === "dark"){
    document.body.classList.add("dark");
    btn.innerHTML = "☀️ Light Mode";
}

btn.addEventListener("click", function(){

    document.body.classList.toggle("dark");

    if(document.body.classList.contains("dark")){
        localStorage.setItem("theme","dark");
        btn.innerHTML = "☀️ Light Mode";
    }else{
        localStorage.setItem("theme","light");
        btn.innerHTML = "🌙 Dark Mode";
    }

});
    </script>

</body>
</html>