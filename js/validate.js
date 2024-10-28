// DOM Element References
const form = document.getElementById("contac_form");
const fullName = document.getElementById("fullname");
const recipientdetails = document.getElementById("recipientdetails");
const emailaddress = document.getElementById("emailaddress");
const phonenumber = document.getElementById("phonenumber");
const crency = document.getElementById("crency");
const amount = document.getElementById("amount");
const purpose = document.getElementById("purpose");
const source = document.getElementById("source");
const deliverymethod = document.getElementById("deliverymethod");
const paymentMethod = document.getElementById("payment");
const country = document.getElementById("country");

// Error Elements
const error = {
  fullName: document.getElementById("erroridfullname"),
  recipientDetails: document.getElementById("erroridfullnames"),
  email: document.getElementById("erroridemail"),
  amount: document.getElementById("erroridamount"),
  crency: document.getElementById("erroridcurrency"),
  payment: document.getElementById("erroridpayment"),
  purpose: document.getElementById("erroridporpose"),
  source: document.getElementById("erroridsource"),
  delivery: document.getElementById("erroriddelivery"),
  country: document.getElementById("erroridselect"),
  phone: document.getElementById("errorphone"),
};

const ugxmodal = document.querySelector(".ugx-modal");
const sendbtn = document.querySelector("#sendbtn");
const body = document.querySelector(".main-layout");
const closedialog = document.querySelector(".close");

const errorMessages = [];

// Function to handle validation
const validate = () => {
  form.addEventListener("submit", (e) => {
    errorMessages.length = 0;

    // Get values
    const values = {
      fullname: fullName.value.trim(),
      recipient: recipientdetails.value.trim(),
      email: emailaddress.value.trim(),
      phone: phonenumber.value.trim(),
      crency: crency.value.trim(),
      amount: amount.value.trim(),
      country: country.value.trim(),
      paymentMethod: paymentMethod.value,
      purpose: purpose.value,
      source: source.value,
      deliverymethod: deliverymethod.value,
    };

    // Validation functions
    const validateField = (field, value, errorElement, errorMessage) => {
      if (value === "" || value === "null" || value === "disabled") {
        errorMessages.push(
          (errorElement.innerHTML = errorMessage),
          field.style.borderColor = "red",
          field.scrollIntoView(field),
          field.addEventListener("input", () => {
            errorElement.innerHTML = "";
            field.style.borderColor = "purple";
          })
        );
      }
    };

    // Validate fields
    validateField(fullName, values.fullname, error.fullName, "This field cannot be empty");
    validateField(recipientdetails, values.recipient, error.recipientDetails, "This field cannot be empty");
    validateField(emailaddress, values.email, error.email, "This field cannot be empty");
    validateField(phonenumber, values.phone, error.phone, "This field cannot be empty");
    validateField(crency, values.crency, error.crency, "This field cannot be empty");
    validateField(purpose, values.purpose, error.purpose, "This field cannot be empty");
    validateField(source, values.source, error.source, "This field cannot be empty");
    validateField(deliverymethod, values.deliverymethod, error.delivery, "This field cannot be empty");
    validateField(paymentMethod, values.paymentMethod, error.payment, "This field cannot be empty");
    
    // Additional validations
    if (values.crency === "KES" && values.country === "kenya") {
      errorMessages.push(
        (error.country.innerHTML = "Cannot select country for the selected currency"),
        country.style.borderColor = "red",
        country.scrollIntoView(country),
        country.addEventListener("input", () => {
          error.country.innerHTML = "";
          country.style.borderColor = "purple";
        })
      );
    }

    if (values.crency === "KES" && values.amount <= 1000) {
      errorMessages.push(
        (error.amount.innerHTML = "Amount cannot be less than 1000"),
        amount.style.color = "black",
        amount.style.borderColor = "red",
        error.amount.scrollIntoView(error.amount),
        amount.addEventListener("input", () => {
          error.amount.innerHTML = "";
          amount.style.borderColor = "black";
        })
      );
    }

    if (values.crency === "UGX" && values.amount <= 35000) {
      errorMessages.push(
        (error.amount.innerHTML = "Amount cannot be less than 35000"),
        amount.style.color = "black",
        amount.style.borderColor = "red",
        error.amount.scrollIntoView(amount)
      );
    }

    if (errorMessages.length > 0) {
      e.preventDefault();
    } else {
      handleModalDisplay();
    }
  });
};

// Function to handle modal display
const handleModalDisplay = () => {
  if (crency.value === "UGX" && amount.value >= 35000) {
    ugxmodal.classList.add("active-modal");
    closedialog.addEventListener("click", () => {
      ugxmodal.classList.remove("active-modal");
      window.location = "home.php";
    });
  }

  if (ugxmodal.classList.contains("active-modal")) {
    body.classList.add("bodyscroll");
    closedialog.addEventListener("click", () => {
      body.classList.remove("bodyscroll");
    });
  }
};

// Initialize validation
validate();
