<!DOCTYPE html>
<html>
<head>
  <title>Prescription Receipt</title>
  <style>
    @page {
      size: A4;
      margin: 0;
    }

    html, body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f9ff;
    }

    .receipt-box {
      width: 210mm;
      min-height: 297mm;
      margin: auto;
      background: white;
      padding: 20px 30px;
      box-sizing: border-box;
      position: relative;
      border: 10px solid;
      border-image: linear-gradient(45deg, #007bff, #00c6ff, #00ffc8) 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .content {
      flex: 1;
    }

    .header {
      display: flex;
      justify-content: space-between;
      border-bottom: 2px solid #007bff;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .logo img {
      width: 130px;
      height: 130px;
    }

    .hospital-info {
      text-align: right;
      color: #007bff;
    }

    .hospital-info h2 {
      margin: 0;
      font-size: 24px;
      font-weight: 700;
    }

    .hospital-info p {
      margin: 2px 0;
      font-size: 13px;
    }

    .info p {
      font-size: 14px;
      margin: 4px 0;
      color: #333;
    }

    .section {
      margin-top: 20px;
    }

    .section-title {
      font-weight: bold;
      font-size: 18px;
      color: #007bff;
      margin-bottom: 10px;
      border-bottom: 2px dashed #00bcd4;
      padding-bottom: 5px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
      table-layout: fixed;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 15px;
      text-align: left;
      vertical-align: top;
      font-size: 14px;
      background-color: #f9f9f9;
    }

    th {
      background-color: #e6f0ff;
      font-weight: 600;
      color: #0056b3;
    }

    .footer {
      margin-top: 20px;
      border-top: 2px solid #007bff;
      padding-top: 10px;
    }

    .next-visit {
      font-size: 14px;
      color: #333;
      margin-bottom: 15px;
    }

    .signature {
      text-align: right;
      margin-top: 30px;
      font-size: 14px;
    }

    .signature p {
      margin: 4px 0;
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .buttons button {
      padding: 10px 20px;
      font-size: 14px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .buttons button:hover {
      background-color: #0056b3;
    }

    @media print {
      .buttons {
        display: none !important;
      }

      .receipt-box {
        border: none;
        box-shadow: none;
        margin: 0;
      }

      body {
        background: white;
      }
    }
  </style>
</head>
<body>

<div class="receipt-box">
  <div class="content">
    <div class="header">
      <div class="logo">
        <img src="{{ asset('images/hospital-logo.jpg') }}" alt="Hospital Logo">
      </div>
      <div class="hospital-info">
        <h2>CityCare Multispecialty Hospital</h2>
        <p>123 Health Street, Wellness City, 110045</p>
        <p>Phone: +91 12345 67890</p>
        <p>Email: info@citycarehospital.com</p>
        <p>Website: www.citycarehospital.com</p>
      </div>
    </div>

    <div class="info">
      <p><strong>Date:</strong> {{$data->date}}</p>
      <p><strong>Doctor:</strong> Dr. {{$data->doctor}}</p>
      <p><strong>Patient:</strong> {{$data->name}}</p>
      <p><strong>Patient ID:</strong> {{$data->id}}</p>
    </div>

    <div class="section">
      <div class="section-title">Prescription Details</div>
      <table>
        <tr>
          <th>Diagnosis</th>
          <th>Medications</th>
          <th>Tests</th>
          <th>Advice</th>
        </tr>
        <tr style="height: 450px;">
        <td>
          <ul style="padding-left: 18px; margin: 0;">
            <!-- Diagnosis list -->
          </ul>
        </td>
        <td>
          <ul style="padding-left: 18px; margin: 0;">
            <!-- Medications list -->
          </ul>
        </td>
        <td>
          <ul style="padding-left: 18px; margin: 0;">
            <!-- Tests -->
          </ul>
        </td>
        <td>
          <ul style="padding-left: 18px; margin: 0;">
            <!-- Advice -->
          </ul>
        </td>
        </tr>

        
      </table>
    </div>
  </div>

  <div class="footer">
    <div class="next-visit"><strong>Next Visit Date:</strong> __________________________</div>

    <div class="signature">
      <p>__________________________</p>
      <p><strong>Dr. {{$data->doctor}}</strong></p>
      <p><em>Signature</em></p>
    </div>
  </div>

  <div class="buttons">
    <button onclick="window.history.back()">Back</button>
    <button onclick="window.print()">Print</button>
  </div>
</div>

</body>
</html>
