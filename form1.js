document.addEventListener("DOMContentLoaded", () => {
  var nameError = document.getElementById("name_error");
    var emailError = document.getElementById("email_error");
    var mobileError = document.getElementById("Mobile_error");
    var addressError = document.getElementById("address_error");
    var commentsError = document.getElementById("comments_error");

  

var nameInput = document.getElementById("name");
var emailInput = document.getElementById("email");
var phoneInput = document.getElementById("phone");
var addressInput = document.getElementById("address");
var commentsInput = document.getElementById("textarea");

if (nameInput) {
  nameInput.addEventListener("keypress", () => clearerror(nameError) );
}

if (emailInput) {
  emailInput.addEventListener("keypress", () => clearerror(emailError));
}

if (phoneInput) {
  phoneInput.addEventListener("keypress", () => clearerror(mobileError));
}

if (addressInput) {
  addressInput.addEventListener("keypress", () => clearerror(addressError));
}

if (commentsInput) {
  commentsInput.addEventListener("keypress", () => clearerror(commentsError));
}
});

function clearerror(errorElement) {
  errorElement.textContent = "";
}




var product_detail;
var product_type;
         function product_name() {
         product_detail = document.getElementById('water_product__div');
         var Swimming_model=document.getElementById('Swimming_model_div');
               
                 var select = document.getElementById('product');
                 var residential_product_model = document.getElementById('water_residential_model_div');
                var commercial_input_type=document.getElementById('commerical_input');

				        product_type = select.options[select.selectedIndex];
                console.log(product_type.value);
				        if (product_type.value == "water heating"){
                    product_detail.style.display = "block";
                    Swimming_model.style.display = "none";

                }else if(product_type.value == "Solar PV Pannel"){
                    Swimming_model.style.display = "block";
                    product_detail.style.display = "none";
                    residential_product_model.style.display = "none";
                    commercial_input_type.style.display = "none";

                }
                else if(product_type.value == "heat pump"){
                    Swimming_model.style.display = "none";
                    product_detail.style.display = "none";
                    residential_product_model.style.display = "none";
                    commercial_input_type.style.display = "none";
                  
            }
        }
				
function water_heating_product() {
         var residential_product_model = document.getElementById('water_residential_model_div'),
         commercial_input_type=document.getElementById('commerical_input');

                var select = document.getElementById('water_product');
				        var option = select.options[select.selectedIndex];
                // console.log(option.value);
                console.log(product_type);
				        if (option.value == "commerical") {
                    commercial_input_type.style.display = "block";
                    residential_product_model.style.display = "none";
                } 
                else if(option.value == "residential"){
                    residential_product_model.style.display = "block";
                    commercial_input_type.style.display = "none";

                }
               
            }

///----------------validation----------------///


function validateForm() {
  // event.preventDefault();
 var flag = true;



    var name = document.forms["myForm"]["user_name"].value;
    var email = document.forms["myForm"]["user_email"].value;
    var number = document.forms["myForm"]["user_number"].value;
    var address = document.forms["myForm"]["user_address"].value;
    var comments = document.forms["myForm"]["user_comments"].value;

   

    
      // Regular expressions for validation
      var namePattern = /^[a-zA-Z\s]+$/;
    var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var numberPattern = /^(\+\d{1,3}[- ]?)?\d{10}$/;
 
    //for error
    var nameError = document.getElementById("name_error");
    var emailError = document.getElementById("email_error");
    var mobileError = document.getElementById("Mobile_error");
    var addressError = document.getElementById("address_error");
    var commentsError = document.getElementById("comments_error");
    
    nameError.textContent = "";
    emailError.textContent = "";
    mobileError.textContent = "";
    addressError.textContent = "";
    commentsError.textContent = "";


    // Check if name is empty or contains invalid characters2
  if (name.trim() === "") {
    nameError.textContent = "Name must be filled out";
    flag = false;
  } else if (!name.match(namePattern)) {
    nameError.textContent = "Name can only contain letters";
    flag = false;
  }

  // Check if email is empty or not valid
  if (email.trim() === "") {
    emailError.textContent = "Email must be filled out";
    flag = false;
  } else if (!email.match(emailPattern)) {
    emailError.textContent = "Please enter a valid email address";
    flag = false;
  }

  // Check if number is empty or not valid
  if (number.trim() === "") {
    mobileError.textContent = "Number must be filled out";
    flag = false;
  } else if (!number.match(numberPattern)) {
    mobileError.textContent = "Number can only contain 10 digits";
    flag = false;
  }

  // Check if address is empty
  if (address.trim() === "") {
    addressError.textContent = "Address must be filled out";
    flag = false;
  }

  // Check if comments are empty
  if (comments.trim() === "") {
    commentsError.textContent = "Comment must be filled out";
    flag = false;
  }

  // If all fields are valid, submit the form
  // if (flag) {
  //   document.getElementById("myForm").submit();
  // }

// if (flag) {
//   document.getElementById("myForm_id").submit();
// }
// var form = document.getElementById("myForm_id");
// form.submit(); // This will submit the form
console.log(flag); 
return flag;

}


   
    
  




