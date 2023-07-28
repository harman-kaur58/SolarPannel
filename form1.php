<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 
  </head>

  <body>
    <div class="container  border border-dark ">
      <div class="row mt-3">
        <div class="col">
        <p class="h1 text-center">Solar Product Registration</p>
        </div>
      </div>
      <div class="row mt-5">
          <div class="col-md-4">
              <form action="insert.php" method="post" name="myForm" enctype="multipart/form-data" id="myForm_id" onsubmit="return validateForm()" >
                <div class="mb-3">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="name"  name="user_name" placeholder="Enter Your Name*">
              </div>
                <span id="name_error" style="color: red;"></span>
              </div>
                
             <div class="col-md-3">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email"  name="user_email"aria-describedby="emailHelp"placeholder="Enter Your Email*">
                  </div>
                  <span id="email_error" style="color: red;"></span>
             </div>

            <div class="col-md-3">
                  <div class="mb-3">
                    <label for="phone" class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" id="phone"  name="user_number"placeholder="Enter Your Mobile Number*">
                  </div>
                  <span id="Mobile_error" style="color: red;"></span>
            </div>
            </div>

             <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address"  name="user_address" aria-describedby="emailHelp" placeholder="Enter Your Address*" > 
                      </div>
                      <span id="address_error" style="color: red;"></span>
                </div> 
             </div>
              
             <div class="row">
                <div class="col">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="user_comments"  id="textarea"style="height:100px;" ></textarea>
                    <label for="floatingTextarea2">Comments</label>
                  </div>
                  <span id="comments_error" style="color: red;"></span>
                 </div>           
             </div>

            <div class="row mt-3">
              <div class="col">
              <label for="product">Select a Product</label>
              <select class="form-select" aria-label="Default select example" id="product" name="product"onchange="product_name()" Required>
                <option value="" disabled selected>select option</option>
                <option value="heat pump">heat pump</option>
                <option value="water heating" >water heating</option>
                <option value="Solar PV Pannel" >Solar PV Pannel</option>
                </select>
              </div>

            </div>
        <div class="row mt-3">
            <div class="col" id="water_product__div">
            <label for="water_product">Select Water Product</label>
              <select class="form-select" id="water_product"  name="water_product" onchange="water_heating_product()" >
               <option value="" disabled selected>select option</option>
                <option value="commerical">commerical</option>
                <option value="residential">Residential</option>
            </select>
          </div>
        </div>

          <div class="row mt-3">
            <div class="col" id="water_residential_model_div">
            <label for="water_residential_model">Select Residential Model</label>
              <select class="form-select" aria-label="Default select example"id="water_residential_model" name="residential_model">
                <option value="" disabled selected >select option</option>
                <option value="100 LPD ETC">100 LPD ETC</option>
                <option value="200 LPD ETC">200 LPD ETC</option>
                <option value="300 LPD ETC">300 LPD ETC</option>
            </select>
            </div>
          </div>

            <div class="row">
              <div class="col " >
                <div class="form-group" id="commerical_input">
                <label for="comm_model">Model Name</label>
                  <input type="text" class="form-control" name="comm_model" placeholder="Please Specify Water Commerical Model Name">
                </div>
              </div>
            </div>
          <div class="col" id="Swimming_model_div">
          <label for="Swimming_model">Select Swimming Pool Heat Pump Model</label>
            <select class="form-select" aria-label="Default select example"id="Swimming_model" name="swimm_model">
              <option value="" disabled selected >select option</option>
              <option value="18 kw swimming pool heat pump">18 kw swimming pool heat pump</option>
              <option value="33 kw swimming pool heat pump">33 kw swimming pool heat pump</option>
              <option value="40 kw swimming pool heat pump">40 kw swimming pool heat pump</option>
              <option value="52 kw swimming pool heat pump">52 kw swimming pool heat pump</option>
              <option value="90 kw swimming pool heat pump">90 kw swimming pool heat pump</option>
          </select>
          </div>

          <div class="row mt-2">
            <div class="col">
                <div class="form-group">
                  <label for="exampleFormControlFile1">Select File</label>
                  <input type="file" class="form-control-file" id="fileToUpload"  name="fileToUpload" Required>
                </div>
            </div>
          </div>

            <div class="row mt-2">
              <div class="col-12">
                <input type="submit" id="myForm_submit" class="btn btn-primary">
              </div>
            </div><br>
        </form>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="form1.js"></script>


    
  </body>
</html>
