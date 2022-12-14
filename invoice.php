<style type="text/css">
  body{margin-top:20px;
background-color: #f1a198;
}
#invoice {
    padding: 0px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #0d6efd
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color:  #f1a198;
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #0d6efd;
    background: #f1a198;
    padding: 10px;
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,
.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #f1a198;
    font-size: 1.2em
}

.invoice table .qty,
.invoice table .total,
.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #f1a198;
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #f1a198;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}

.invoice table tfoot tr:last-child td {
    color: #f1a198;
    font-size: 1.4em;
    border-top: 1px solid #f1a198;
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px !important;
        overflow: hidden !important
    }
    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }
    .invoice>div:last-child {
        page-break-before: always
    }
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #0d6efd;
    background: #e7f2ff;
    padding: 10px;
}  
</style>

<?php include "header.php" ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="icon" type="image/x-icon" href="./assets/img/Logo.png">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Invoice</title>
    </head>
  <body>

    <br><br><br><br><br><br>
    <div class="container">
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                <div class="invoice overflow-auto">
                    <div style="min-width: 600px">
                        <main>
                        <?php 
                        $roomInput = $_GET['room_id'];
                        $transactionInput = $_GET['transaction_id'];
                        $query = $koneksi->query("SELECT first_name, last_name, email,  hargaKamar DIV 100 * 5 AS pajak FROM `transaction` WHERE room_id = $roomInput AND transaction_id = $transactionInput
                          ") or die(mysql_error()); 
                        while($fetch = $query->fetch_array()){
                        ?>
                            <div class="row contacts">
                                <div class="col invoice-to">
                                    <div class="text-gray-light">INVOICE TO:</div>
                                    <h2 class="to"><?= $fetch['first_name']; ?></h2>
                                    <div class="email"><?= $fetch['email']; ?></a>
                                    </div>
                                </div>
                                <div class="col invoice-details">
                                    <h1 class="invoice-id">INVOICE</h1>
                                </div>
                            </div>
                            <table>
                              <?php 
                              $query2 = $koneksi->query("
                                SELECT room.room_name, transaction.hargaKamar, transaction.hari_menginap, transaction.hargaTotal FROM transaction INNER JOIN room ON transaction.room_id=room.room_id WHERE transaction_id = $transactionInput;");
                              ?>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-left">NAMA VILLA</th>
                                        <th class="text-right">ROOM PER DAY</th>
                                        <th class="text-right">DAY</th>
                                        <th class="text-right">TOTAL</th>
                                    </tr>
                                </thead>
                                <?php
                                while($data=$query2->fetch_array()){
                                 ?>
                                <tbody>
                                    <tr>
                                        <td class="no">01</td>
                                        <td class="text-left">
                                            <h3><?php echo $data['room_name'] ?></h3>
                                        </td>
                                        <td class="unit">Rp. <?= $data['hargaKamar'] ?></td>
                                        <td class="qty"><?= $data['hari_menginap'] ?></td>
                                        <td class="total">Rp. <?= $subtotal = $data['hargaKamar'] * $data['hari_menginap'] ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SUBTOTAL</td>
                                        <td>Rp. <?= $subtotal ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">TAX 5%</td>
                                        <td>Rp. <?= $fetch['pajak']; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">GRAND TOTAL</td>
                                        <td>Rp. <?= $data['hargaTotal'] ?></td>
                                    </tr>
                                </tfoot>
                              <?php } ?>
                            </table>
                          <?php } ?>
                          <center>
                          <div class="thanks" style="margin-top:100px;">Thank you!</div>

                          </center>
                    </div>
                </div>
                <form method="POST">
                    <input type="submit" name="continue" value="Done!" class="btn btn-primary fw-bold w-100">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
  if (isset($_POST['continue'])) { 
     $koneksi->query("UPDATE `transaction` SET status = 'COMPLETE' WHERE transaction_id = '$transactionInput'") or die(mysqli_error());
     header("location: dashboard.php");
   }

  ?>

<?php include 'footer.php'; ?>
</html>