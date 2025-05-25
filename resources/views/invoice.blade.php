<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>Tax Invoice</title>
    <style>
        body {
            font-family: 'Siyamrupali', sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }
        .invoice-container {
            width: 100%;
            padding: 20px;
            border: 1px solid #000;
        }
        .header, .footer {
            text-align: center;
        }
        .info-table, .product-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .info-table td {
            padding: 5px;
            vertical-align: top;
        }
        .product-table th, .product-table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }
        .highlight {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        .footer {
            font-size: 12px;
            margin-top: 20px;
        }
        .grand-total {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>
<body>
<div class="invoice-container">
    <div class="header">
        <img src="grameenphone-logo.png" alt="Grameenphone Logo" height="40">
        <h3>The Government of the People's Republic of Bangladesh</h3>
        <h4>National Board of Revenue</h4>
        <p><strong>Tax Invoice</strong><br> [See clauses (c) and (f) of Sub-Rule (1) of Rule 40]</p>
    </div>

    <table class="info-table">
        <tr>
            <td>
                <strong>Name of registered person:</strong> Grameenphone Ltd.<br>
                <strong>BIN:</strong> 0000000081-0001<br>
                <strong>Address:</strong> GP House, Bashundhara, Baridhara, Dhaka-1229<br>
                <strong>Name of purchaser:</strong> Fahim Ibrahim<br>
                <strong>Address:</strong> বাড়ি নং: ১২৩, রোড নং: ৪

                ব্লক: বি, সেকশন: ১০

                মিরপুর, ঢাকা-১২১৬

                বাংলাদেশ<br>
                <strong>City/Area:</strong> Dhanmondi, Dhaka<br>
                <strong>Contact No:</strong> 01332580916<br>
                <strong>BIN of purchaser:</strong> -
            </td>
            <td>
                <strong>Invoice Number:</strong> gpfi20250500081<br>
                <strong>Date:</strong> 22-05-2025<br>
                <strong>Order Number:</strong> 47333<br>
                <strong>Payment Type:</strong> <br>
                <strong>Email:</strong> fahim.ibrahim@tampa.co.net<br>
                <strong>Device IMEI:</strong> 868898062756059
            </td>
        </tr>
    </table>

    <div style="margin: 20px 0; text-align: center;">
        <img src="gpfi-banner.png" alt="GPFi Banner" style="max-width: 100%;">
    </div>

    <table class="product-table">
        <thead>
        <tr class="highlight">
            <th>Sl.</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Unit Price<br>(Excl. all duties)</th>
            <th>Supplementary<br>Duty Rate</th>
            <th>Supplementary<br>Duty Amt</th>
            <th>VAT %</th>
            <th>VAT Amt</th>
            <th>Surcharge</th>
            <th>Total Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td><td>gpfi Unlimited Pro</td><td>1</td><td>৳ 7,500</td><td>-</td><td>৳ 0</td><td>-</td><td>৳ 0</td><td>৳ 0</td><td>৳ 7,500</td>
        </tr>
        <tr><td colspan="10" class="highlight">Discount ৳ 1,500</td></tr>
        <tr><td colspan="10" class="highlight">Final Price: ৳ 6,000</td></tr>

        <tr>
            <td>2</td><td>gpfi SIM</td><td>1</td><td>৳ 50</td><td>-</td><td>৳ 0</td><td>15%</td><td>৳ 300</td><td>৳ 0</td><td>৳ 350</td>
        </tr>
        <tr><td colspan="10" class="highlight">Discount ৳ 0</td></tr>
        <tr><td colspan="10" class="highlight">Final Price: ৳ 350</td></tr>

        <tr>
            <td>3</td><td>gpfi900</td><td>1</td><td>৳ 1,367</td><td>20%</td><td>৳ 273</td><td>15%</td><td>৳ 246</td><td>৳ 14</td><td>৳ 1,900</td>
        </tr>
        <tr><td colspan="10" class="highlight">Discount ৳ 0</td></tr>
        <tr><td colspan="10" class="highlight">Final Price: ৳ 1,900</td></tr>

        <tr>
            <td>4</td><td>Delivery & Installation</td><td>1</td><td>৳ 0</td><td>-</td><td>৳ 0</td><td>-</td><td>৳ 0</td><td>৳ 0</td><td>৳ 0</td>
        </tr>
        <tr><td colspan="10" class="highlight">Discount ৳ 0</td></tr>
        <tr><td colspan="10" class="highlight">Final Price: ৳ 0</td></tr>
        </tbody>
    </table>

    <p class="grand-total">Grand Total: ৳ 8,250</p>

    <div class="footer">
        <p>This is an automated invoice and does not require any signature.</p>
        <p>Login to your profile: <a href="https://gpfi.grameenphone.com/login">https://gpfi.grameenphone.com/login</a></p>
        <p>Grameenphone is a Telecom Service provider company and registered with LTU-VAT. VAT Deduction at Source (VDS) is not required as per VDS guideline.</p>
    </div>
</div>
</body>
</html>
