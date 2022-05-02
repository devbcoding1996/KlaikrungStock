<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/ใกล้กรุง - logo.svg" sizes="16x16" type="image/png">
    <title>ระบบสต็อกสินค้า - ใกล้กรุง shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <div class="container bg-white shadow-sm py-2">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none mx-2">
                <img class="bi me-2" src="assets/img/ใกล้กรุง - web.svg" width="40">
                <span class="fs-4 f-header">ใกล้กรุง shop</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" onclick="handleContent('Stock', 'stock')" class="nav-link active" aria-current="page"><i class="fa-solid fa-box"></i> Stock</a></li>
                <li class="nav-item"><a href="#" onclick="handleContent('เพิ่มสินค้า', 'add-product')" class="nav-link"><i class="fa-solid fa-plus"></i> เพิ่มสินค้า</a></li>
            </ul>
        </header>
        <div class="card">
            <div class="card-header" id="TitleText">
                Featured
            </div>
            <div class="card-body" id="Content">
            </div>
        </div>
    </div>

    <script>
        handleContent = (txt, page) => {
            var _html = `<i class="fa-solid fa-store"></i> ${txt}`;

            setTimeout(() => {
                document.getElementById("TitleText").innerHTML = _html;
                $("#Content").load(
                    `pages/${page}.php`);
            }, 1000);
        }

        handleContent('Stock', 'stock');
    </script>
</body>

</html>