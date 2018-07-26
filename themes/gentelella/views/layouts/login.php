<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>tsurayyastore_hijab</title>

    <!-- Bootstrap -->
    <link href="<?= Yii::app()->theme->baseUrl ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= Yii::app()->theme->baseUrl ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= Yii::app()->theme->baseUrl ?>/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= Yii::app()->theme->baseUrl ?>/css/custom.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <?php echo $content; ?>
      </div>
    </div>
  </body>
</html>