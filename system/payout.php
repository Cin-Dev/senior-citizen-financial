<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Payout Form</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background: url(images/back4.png) no-repeat center center/cover;
      }

      .form-container {
        margin: 0 auto;
        width: 400px;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }

      .form-group input {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
        font-size: 16px;
      }

      .form-group input[type="number"] {
        -moz-appearance: textfield;
      }

      .form-group input[type="number"]::-webkit-outer-spin-button,
      .form-group input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
      }

      .form-group input[type="password"] {
        letter-spacing: 10px;
      }

      .form-group button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
      }

      /* Popup box */
      .popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999;
      }

      .popup-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        text-align: justify;
        max-width: 500px;
      }

      .popup-ok-button {
        display: block;
        margin: 10px auto;
        padding: 5px 20px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
        <h1 style="text-align: center;">Payout Form</h1>
      <form id="payout-form">
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" name="last-name" required>
        </div>
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" name="first-name" required>
        </div>
        <div class="form-group">
          <label for="middle-name">Middle Name</label>
          <input type="text" id="middle-name" name="middle-name" required>
        </div>
        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="number" id="amount" name="amount" min="1" step="1" required>
        </div>
        <div class="form-group">
          <label for="pin-code">Pin Code</label>
          <input type="password" id="pin-code" name="pin-code" minlength="4" maxlength="4" required>
        </div>
        <div class="form-group">
        <button type="submit">Submit</button>
        </div>
        </form>
        </div>

        <div class="popup" id="popup">
            <div class="popup-content">
              <p>-----------------------------------------------------------------</p>
              <p>-----------------------------------------------------------------</p>
              <p>Terminal #: 00001</p>
              <p>Sequence #: 001</p>
              <p>Date and Time: <span id="date-time"></span></p>
              <p>Customer Name: <span id="customer-name"></span></p>
              <p>Dispensed Amount: ₱<span id="dispensed-amount"></span></p>
              <p>Requested Amount: ₱<span id="requested-amount"></span></p>
              <p>Total Amount: ₱<span id="total-amount"></span></p>
              <p>Balance: ₱00.00</p>
              <p>-----------------------------------------------------------------</p>
              <p>-----------------------------------------------------------------</p>
              <button class="popup-ok-button" id="popup-ok-button">OK</button>
            </div>
          </div>
          
          <script>
  const form = document.getElementById('payout-form');
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const amount = document.getElementById('amount').value;

    if (amount < 500) {
      alert('The money is insufficient.');
      return;
    }
    if(amount >3000){
      alert('The amount exceeded');
      return;
    }

  
    const lastName = document.getElementById('last-name').value;
    const firstName = document.getElementById('first-name').value;
    const middleName = document.getElementById('middle-name').value;
    const dateTime = new Date().toLocaleString();

  
    const popup = document.getElementById('popup');
    const customerName = document.getElementById('customer-name');
    const dispensedAmount = document.getElementById('dispensed-amount');
    const requestedAmount = document.getElementById('requested-amount');
    const totalAmount = document.getElementById('total-amount');
    customerName.textContent = `${lastName}, ${firstName} ${middleName}`;
    dispensedAmount.textContent = amount;
    requestedAmount.textContent = amount;
    totalAmount.textContent = amount;
    document.getElementById('date-time').textContent = dateTime;
    popup.style.display = 'flex';

 
    form.reset();
  });

  const popupOkButton = document.getElementById('popup-ok-button');
  popupOkButton.addEventListener('click', () => {
    const popup = document.getElementById('popup');
    popup.style.display = 'none';
  });
</script>
      </body>
</html>
