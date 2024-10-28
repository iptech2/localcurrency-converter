const currencyElement_one = document.getElementById("currency-one");
const currencyElement_two = document.getElementById("currency-two");
const amountElement_one = document.getElementById("amount-one");
const amountElement_two = document.getElementById("amount-two");
const dropList1 = document.querySelectorAll(".select_one");
const flagIcon = document.getElementById("flag-icon");

let rateElement = document.getElementById("rate");
let ratesElement = document.getElementById("rates");

// Sample object list of countries with currency codes and corresponding flags
const countries = [
  { currencyCode: "KES", flagImg: "https://flagcdn.com/48x36/ke.png" },
  { currencyCode: "UGX", flagImg: "https://flagcdn.com/48x36/ug.png" },
  { currencyCode: "TZS", flagImg: "https://flagcdn.com/48x36/tz.png" },
];

const countries2 = [
  { currencyCode: "KES", flagImg: "https://flagcdn.com/48x36/ke.png" },
  { currencyCode: "TZS", flagImg: "https://flagcdn.com/48x36/tz.png" },
  { currencyCode: "RWF", flagImg: "https://flagcdn.com/48x36/rw.png" },
];

// Function to load the flag image using the currency code
function loadFlagFromCurrency(currencyCode) {
  const country = countries.find((c) => c.currencyCode === currencyCode);
  if (country) {
    const flagImgElement = document.getElementById("flag-img");
    flagImgElement.src = country.flagImg;
    flagImgElement.style.display = "flex"; // Show the image element
  }
}

// Example usage:
const countrySelectElement = document.querySelector(".country-select");
countrySelectElement.addEventListener("change", function () {
  const currencyCode = this.value;
  loadFlagFromCurrency(currencyCode);
});

//    select 2
// Function to load the flag image using the currency code
function loadFlagFromCurrency2(currencyCode) {
  const country = countries2.find((c) => c.currencyCode === currencyCode);
  if (country) {
    const flagImgElement2 = document.getElementById("flag-img2");
    flagImgElement2.src = country.flagImg;
    flagImgElement2.style.display = "flex"; // Show the image element
  } else {
    // Hide the image element if the currency code is not found
    const flagImgElement2 = document.getElementById("flag-img2");
    flagImgElement2.style.display = "https://flagcdn.com/48x36/tz.png";
  }
}

// Example usage:
const countrySelectElement2 = document.querySelector(".selectcountry2");
countrySelectElement2.addEventListener("change", function () {
  const currencyCode = this.value;
  loadFlagFromCurrency2(currencyCode);
});

// Adding the api link

function calculate() {
  const currency_one = currencyElement_one.value;
  const currency_two = currencyElement_two.value;

  if (currency_one == "UGX" && currency_two == "RWF") {
    const rate = 0.559;
    rateElement.innerText = ` 1 ${currency_one} = ${rate} ${currency_two}`;
    amountElement_two.value = (amountElement_one.value * rate).toFixed(2);
  } else if (currency_one == "KES" && currency_two == "TZS") {
    const rate = 17.0;
    rateElement.innerText = ` 1 ${currency_one} = ${rate} ${currency_two}`;
    amountElement_two.value = (amountElement_one.value * rate).toFixed(2);
  } else if (currency_one == "UGX" && currency_two == "KES") {
    const rate = 1 / 32;
    rateElement.innerText = ` 1 ${currency_one} = ${rate} ${currency_two}`;
    amountElement_two.value = (amountElement_one.value * rate).toFixed(2);
  } else if (currency_one == "UGX" && currency_two == "TZS") {
    const rate = 0.62;
    rateElement.innerText = ` 1 ${currency_one} = ${rate} ${currency_two}`;
    amountElement_two.value = (amountElement_one.value * rate).toFixed(2);
  } else if (currency_one == "TZS" && currency_two == "KES") {
    const rate = 1 / 17;
    rateElement.innerText = ` 1 ${currency_one} = ${rate} ${currency_two}`;
    amountElement_two.value = (amountElement_one.value * rate).toFixed(2);
  } else if (currency_one == "KES" && currency_two == "RWF") {
    const rate = 8.0;
    rateElement.innerText = ` 1 ${currency_one} = ${rate} ${currency_two}`;
    amountElement_two.value = (amountElement_one.value * rate).toFixed(2);
  } else if (currency_one == currency_two || currency_two == currency_one) {
    rateElement.innerText = `Cannot perform the operation`;

    // Disabling a button
    document.querySelector(".button").disabled = true;
    document.querySelector(".btn3").style.color = "red";

    setTimeout(() => {
      document.location.reload();
    }, 1500);
  }
}

function calculate2() {
  const currency_one = currencyElement_one.value;
  const currency_two = currencyElement_two.value;
  if (currency_two == "RWF" && currency_one == "UGX") {
    const rate = 1 / 0.559;
    rateElement.innerText = ` 1 ${currency_two} = ${rate} ${currency_one}`;
    amountElement_one.value = (amountElement_two.value * rate).toFixed(2);
  } else if (currency_two == "RWF" && currency_one == "KES") {
    const rate = 1 / 8;
    rateElement.innerText = ` 1 ${currency_two} = ${rate} ${currency_one}`;
    amountElement_one.value = (amountElement_two.value * rate).toFixed(2);
  } else if (currency_two == "KES" && currency_one == "UGX") {
    const rate = 32;
    rateElement.innerText = ` 1 ${currency_two} = ${rate} ${currency_one}`;
    amountElement_one.value = (amountElement_two.value * rate).toFixed(2);
  } else if (currency_two == "TZS" && currency_one == "KES") {
    const rate = 1 / 17;
    rateElement.innerText = ` 1 ${currency_two} = ${rate} ${currency_one}`;
    amountElement_one.value = (amountElement_two.value * rate).toFixed(2);
  } else if (currency_two == "TZS" && currency_one == "UGX") {
    const rate = 1 / 0.62;
    rateElement.innerText = ` 1 ${currency_two} = ${rate} ${currency_one}`;
    amountElement_one.value = (amountElement_two.value * rate).toFixed(2);
  }
}
//Add event listener
currencyElement_one.addEventListener("change", calculate);
currencyElement_two.addEventListener("change", calculate);
amountElement_one.addEventListener("input", calculate);
amountElement_two.addEventListener("input", calculate2);
currencyElement_one.addEventListener("change", calculate2);
currencyElement_two.addEventListener("change", calculate2);
amountElement_one.addEventListener("input", calculate);
amountElement_two.addEventListener("input", calculate2);
calculate();
calculate2();