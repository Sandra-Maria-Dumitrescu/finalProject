<!DOCTYPE html>
<html lang="ro" dir="ltr">
<head>
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/formStyles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Roweb Project</title>
<!--    <meta charset="iso-8859-1">-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body id="home">

<div id="main_wrapper">

    <?php include 'views/partials/head.php'; ?>

    <!-- content -->
    <div id="main_content">

        <?php include 'views/' . $content_view; ?>

    </div> <!-- end main content -->

    <!-- right_side content -->
    <?php include "views/partials/right_side.php"; ?>

    <!-- footer -->
    <?php include "views/partials/footer.php"; ?>

</div>
</body>
</html>
