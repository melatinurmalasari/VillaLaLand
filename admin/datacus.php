
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Villa Booking </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body class="p-3 m-0 border-0 bd-example">
    <?php include "header.php" ?>

    <main>
    <section class="destinations pt-120">
      <div class="container">
        <div class="row gx-5">
          <div class="col-12 d-flex align-items-center justify-content-center mb-3 text-center">
            <h1 class="fw-bold">Data transaksi</h1>
            
          </div>
        </div>
      </div>
    </section>
    <table class="table caption-top">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Transaction</th>
                <th scope="col">Id Guest</th>  
                <th scope="col">Id Room</th>
                <th scope="col">Checkin</th>
                <th scope="col">Checkout</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">No Contact</th>  
                <th scope="col">Email</th>  
                <th scope="col">#</th>                     
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, 'SELECT * FROM transaction');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['transaction_id'] ?></td>
                <td><?php echo $data['guest_id'] ?></td>
                <td><?php echo $data['room_id'] ?></td>
                <td><?php echo $data['checkin'] ?></td>
                <td><?php echo $data['checkout'] ?></td>
                <td><?php echo $data['first_name'] ?></td>
                <td><?php echo $data['last_name'] ?></td>
                <td><?php echo $data['contactno'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td>
                    <a href="" class="btn btn-info">Konfirmasi</a>
                </td>
                
            </tr>
        <?php } ?>
    </table>
</body>
</html>