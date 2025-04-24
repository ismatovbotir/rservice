<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DHL Shipping Label</title>
  <style>
    @page {
      size: 100mm 80mm;
      margin: 0;
    }

    body {
      font-family: Arial, sans-serif;
      width: 100mm;
      height: 80mm;
      margin: 0;
      padding: 5mm;
      box-sizing: border-box;
      /* border: 1px solid #000; */
    }

    .label {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      height: 20mm;
    }

    .tracking {
      text-align: right;
      font-size: 12pt;
      font-weight: bold;
    }

    .section {
      margin-top: 5mm;
    }

    .address {
      font-size: 10pt;
      line-height: 1.4;
    }

    .barcode {
      margin-top: 4mm;
      height: 15mm;
      background: repeating-linear-gradient(
        to right,
        black 0mm,
        black 1mm,
        white 1mm,
        white 2mm
      );
    }

    .footer {
      margin-top: auto;
      font-size: 9pt;
    }
  </style>
</head>
<body>
  <div class="label">
    <div class="header">
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/DHL_Logo.svg" class="logo" alt="DHL Logo">
      <div class="tracking">
        JD123456789DE<br>
        <div class="barcode"></div>
      </div>
    </div>

    <div class="section">
      <strong>To:</strong><br>
      <div class="address">
        John Doe<br>
        123 Main St<br>
        Berlin, Germany
      </div>
    </div>

    <div class="section">
      <strong>From:</strong><br>
      <div class="address">
        ACME Corp<br>
       
      </div>
    </div>

    <div class="footer">
      Weight: 2.5 kg<br>
      Service: EXPRESS
    </div>
  </div>
</body>
</html>
