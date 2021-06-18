<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Друк</title>
    <link rel="shortcut icon" href="https://static.tildacdn.com/tild3938-3435-4465-a433-303638313134/123.png" type="image/x-icon">

    <link rel="stylesheet" href="/custom/css/print.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
</head>
<body onload="//window.print()">
    <div class="print-page container-fluid">
        <header class="bg-white p-2 mb-5 rounded shadow">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <img src="/custom/icons/logo.png" alt="logo" class="logo__img2 img-fluid" width="100">
                </div>
                <h1 class="p-2">
                    Об'єкти нерухомості - Друк
                </h1>
                <div class="date-info pt-3">
                    <input name="b_print" type="button" class="ipt btn btn-danger"  onClick="printdiv('div_print');" value=" Друк">
                </div>
            </div>
        </header>

        <main class="bg-white container rounded shadow p-2">
            <section class="print-area">
                <div class="print-content">
                    @yield('content')
                </div>
            </section>
        </main>

        <footer class="bg-white mt-5 rounded shadow">
            <div class="d-flex justify-content-between p-3">
                <p>
                    <?php echo date('Y'); ?> &copy АН "Житомир".
                </p>
                <p>
                    Developer by <a href="yarik.lukyanchuk.com">Lukyanchk</a>
                </p>
            </div>
        </footer>
    </div>

    <script language="javascript">
        function printdiv(printpage)
        {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr+newstr+footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
    </script>

</body>
</html>
