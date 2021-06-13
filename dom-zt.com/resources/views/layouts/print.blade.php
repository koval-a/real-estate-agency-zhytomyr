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
<body onload="window.print()">
    <div class="print-page container">
        <header class="bg-white p-2">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <img src="/custom/icons/logo.png" alt="logo" class="logo__img2 img-fluid" width="100">
                </div>
                <div class="date-info pt-3">
                    <span class="text-danger">
                        <?php echo date('Y.m.d'); ?>
                    </span>
                </div>
            </div>
        </header>
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

        <input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">

        <main class="bg-white p-2">
            <section class="print-area text-center">
                <h3>Об'єкти нерухомості</h3>
                <div class="print-content">
                    @yield('content')
                </div>
            </section>
        </main>
        <footer class="bg-white p-2">
            <div class="d-flex justify-content-between">
                <p>
                    <?php echo date('Y'); ?> &copy АН "Житомир".
                </p>
                <p>
                    by Lukyanchk
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
