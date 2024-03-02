<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjualan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #373737;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        body {
        font-family: 'Perpetua', serif;
        color: #373737;
        text-align: center;
        background-color: #f4f4f4;
        padding: 50px;
        }
    </style>
</head>
<body>
    <h2>Halaman Penjualan</h2>
    <hr size="2" color= "#c0b283">
    <br>
    <h1 style="text-align: center;">JIHAN SHOP</h1>
    <p>Jl. Pemrograman Web Lanjut, No. 18, Malang</p>
    <p><strong>Date:</strong> <?php echo date('Y-m-d'); ?></p>
    <p><strong>No. Invoice:</strong> INV-001</p>

    <table>
        <thead>
            <tr>
                <th>Item Description</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Milk</td>
                <td>10000</td>
                <td>2</td>
                <td>20000</td>
            </tr>
            <tr>
                <td>Instant Coffee</td>
                <td>2000</td>
                <td>5</td>
                <td>10000</td>
            </tr>
            <tr>
                <td>Egg</td>
                <td>30000</td>
                <td>1</td>
                <td>30000</td>
            </tr>
            <tr>
                <td>Apple</td>
                <td>25000</td>
                <td>1</td>
                <td>25000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" style="text-align: right;"><strong>Sub Total</strong></td>
                <td>85000</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;"><strong>Tax</strong></td>
                <td>0</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;"><strong>TOTAL</strong></td>
                <td>85000</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>