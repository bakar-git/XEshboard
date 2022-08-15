<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" > -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    

    <!-- BOOTSTRAP CSS -->
    <!-- cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- local -->
    <!-- <link rel="stylesheet" href="./asset/lib/bs5/bootstrap.min.css"> -->

    <!-- CUSTOM CSS -->
    <!-- local -->
    <link rel="stylesheet" href="./asset/css/style.css">

    <title>XEshboard</title>
    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Manifest File -->
    <link rel="manifest" href="manifest.json">
</head>

<body>
    <div class="d-flex" id="body-wrapper">
        <!-- LEFT BAR START -->
        <!-- 
            display : close, compact, normal
            overlay : false, true
            interaction : normal, mouse-over
        -->
        <section id="left-bar" class="bg-dark-n1 start-0" data-display="normal" data-overlay="false" data-interaction="normal">
            <?php include "./common/leftbar.php"; ?>
        </section>
        <!-- LEFT BAR END -->

        <!-- MIDDLE SECTION START -->
        <section id="middleSection" class="d-flex flex-column w-100">
            <!-- TOP BAR START -->
            <section id="top-bar" class="position-relative bg-dark-n2 w-100 d-flex text-white">
                <?php include "./common/topbar.php"; ?>
            </section>
            <!-- TOP BAR END -->

            <!-- CONTENT START -->
            <!-- 
                display : expand, normal
            -->
            <section id="content" class="overflow-auto bg-light-1 d-flex flex-column h-100 position-relative top-0 start-0 w-100" data-display="normal">
                <?php include "./pages/product_list.php" ?>
            </section>
            <!-- CONTENT END -->
        </section>
        <!-- MIDDLE SECTION END -->

        <!-- RIGHT BAR STARTED -->
        <!-- RIGHT BAR END -->
    </div>

    <!-- CUSTOM JS -->
    <script src="asset/js/main.js"></script>
    <script src="asset/js/swipe.js"></script>

    <!-- BOOTSTRAP JS -->
    <!-- cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="asset/lib/bs5/bootstrap.bundle.min.js"></script> -->

    <!-- FONTAWESOME 6 CSS -->
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- local -->
    <!-- <link rel="stylesheet" href="asset/lib/fa6/css/all.min.css"> -->

    <!-- GOOGLE FONTS -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
</body>

</html>