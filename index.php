
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Hosptial Patient Entry Form</title>
</head>

<body>
    <!-- Body of Form -->
<br>
    <form action="index.php" method="post">
    <div class="container-fluid bg-light">
        <div class="row m-4">
            <div class="col-1 m-1"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center">
                        <img src="./assets/felex.png" alt="logo" srcset="" style="width: 50px; border-radius: 100px" />

                        <h4 class="d-inline mx-5">Mwiki Health Center</h4>
                        <h5 class="mb-2">Patient Data Collection Form</h5>
                        <?php
                        include ("connect.php");
                        if (isset($_POST['submit'])) {
                          # code...
                           $area=$_POST["Area"];
                            $patientNo=$_POST["No"];
  $firstName=$_POST['firstName'];
  $nhifNo=$_POST['nhifNo'];
  $lastName=$_POST['lastName'];
  $email=$_POST['email'];
  $lastVisit=$_POST['lastVisit'];
                           if (empty($area)) {
    # code...
     $errors= 'Area of Residence is  required *';
     echo "$errors";
  } else {
    # code...
  echo "$area <br>";
   
    echo "$firstName ";
     echo "$lastName <br>";
      echo "$lastVisit <br>";
       echo "$email <br>";
        echo "$nhifNo <br>";

  }
                        } else {
                          # code...
                          echo " <h5>Kindly Fill The Form</h5> ";
                        }
                         ?>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <!-- Name input -->
                                <div class="form-outline">
                                    <label class="form-label" for="No">Patient No</label
                    >

                    <input
                      type="text"
                      id="No"
                  name="No"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col">
                  <!-- Area input -->
                  <div class="form-outline">
                    <label class="form-label" for="Area"
                      >Area Of Residence</label
                    >
                    <input
                      type="text"
                      name="Area"
                      id="Area"
                      class="form-control"
                    />
                  </div>
                </div>
              </div>

              <hr />

              <div class="row">
                <div class="col">
                  <!-- Name input -->
                  <div class="form-outline">
                    <label class="form-label" for="form8Example3"
                      >First name</label
                    >
                    <input
                      type="text"
                      name='firstName'
                      id="form8Example3"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col">
                  <!-- Name input -->
                  <div class="form-outline">
                    <label class="form-label" for="form8Example4"
                      >Last name</label
                    >
                    <input
                      type="text"
                      id="form8Example4"
                      name='lastName'
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col">
                  <!-- Email input -->
                  <div class="form-outline">
                    <label class="form-label" for="form8Example5"
                      >Email address</label
                    >
                    <input
                      type="email"
                      name='email'
                      id="form8Example5"
                      class="form-control"
                    />
                  </div>
                </div>
              </div>

              <!-- Name input -->
              <div class="form-outline">
                <label class="form-label" for="form8Example1">Nhif No</label>
                                    <input name="nhifNo" type="text" id="form8Example1" class="form-control" />
                                </div>
                                <hr />

                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-outline">
                                            <label class="form-label mx-2" for="lastVisit">Last Visit</label
                    >
                    <input
                      type="date"
                      id="lastVisit"
                      placeholder="28/01/2022"
                      name="lastVisit"
                    />
                  </div>
                </div>

                <div class="col-auto">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name='checkbox'
                      value=""
                      id="form11Example2"
                      checked
                    />
                    <label class="form-check-label" for="form11Example2">
                      Checked
                    </label>
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="">
                                        <label class="form-label"  for="customFile">Upload Data</label>
                                        <input type="file" name="uploadFile" class="form-control" id="customFile" />
                                    </div>

                                    <br />
                                </div>
                                <hr />

                                <div class="card-footer">
                                    <div class="my-2">
                                        <div class="form-check form-switch">
                                            <input name="termsCheckBox" class="form-check-input" type="checkbox" id="form11Example4" />
                                            <label class="form-check-label" for="form11Example4">
                      I have read and agreed on
                      <a href="#">
                        <h6 class="d-inline text-decoration-underline">
                          term and conditions
                        </h6></a
                      >
                    </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"  name="submit"class="btn btn-primary">
                      Submit
                    </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <footer>
                                <h5 class="text-center h6 text-black-50">&copy; Felex 2020</h5>
                            </footer>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</form>
</body>

</html>