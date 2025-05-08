<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/bebas-neue" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    

</head>



<body class=" d-flex justify-content-center align-items-center">

    <div class="container-fluid form h-100">

        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-12 col-sm-10 col-md-8 col-lg-8 mt-5 pt-5 pb-5 mb-5 theForm" >


                    <!-- Form Begining -->
                    <form id="myForm" >
                        <div class="pb-3 formHeader" style="text-align: center; align-items: center;">
                            <h1 class="display-4 display-md-2 fw-bolder pb-1 fw-bold hText">Validation System</h1>
                            <p class="fs-6 fs-md-5 fs-lg-4 pText">| Video Editor | Full Stack Dev | Fashion Designer |</p>
                            <hr class="mb-3" style="border-width: 2px;">
                        </div>
                         
                        <div class="row g-3" >
                            <div class="col-12 col-md-6" >
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control customInput" id="fName" placeholder="Faithful">
                                <p id="fNameError" style="color: #dc3545;"></p>
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control customInput" id="lName" placeholder="Madu">
                                <p id="lNameError" style="color: #dc3545;"></p>
                            </div>

                            <div class="col-12">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control customInput" id="dob" placeholder="MM-DD-YY">
                                <p></p>
                            </div>

                            <div class="col-12">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control customInput" id="phoneNumber" pattern="(^0)(7|8|9){1}(0|1){1}[0-9]{8}" placeholder="080xxxxxxxx">
                                <p id="phoneError" style="color: #dc3545;"></p>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">E-Mail</label>
                                <input type="email" class="form-control customInput" id="email" placeholder="example@gmail.com">
                                <p id="emailError" style="color: #dc3545;"></p>
                            </div>

                            <div class="col-6 pb-5">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control customInput mb-4" id="password" placeholder="">
                                <p id="strengthMessage"></p>

                                <div id="strengthBar" style="height: 20px; width: 100%; background: white; margin-top: 5px; border-radius: 25px; transition: all 0.4s;">
                                    <div id="barFill" style="height: 100%; width: 0%; background: red; border-radius: 25px; transition: all 1s;"></div>
                                </div>
                            </div>

                            <div class="col-6 pb-5">
                                <label for="cPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control customInput mb-4" id="cPassword" placeholder="">
                                <p id="cPasswordError"></p>
                            </div>

                            <div class="col-12 d-flex justify-content-center pb-5" style="justify-content: center;">
                                <button type="submit" class="btn btn-primary w-50" id="calButton">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!-- Form Ending -->

                    <!-- Socials Begining -->
                    <div class="d-flex justify-content-center gap-4">
                        <a href="https://www.facebook.com/profile.php?id=61566282749285" class="text-white"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://x.com/thebot_x" class="text-white"><i class="fab fa-x-twitter fa-2x"></i></a>
                        <a href="https://www.instagram.com/thegarnet__/" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/madu-faithful-8310a2364/" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                    <p class="mt-3 mb-0">&copy; 2025 Manifest Media</p>
                    <!-- Socials ending -->

                </div>
            </div>
        </div>

    </div>  




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>