<?php include 'db.php';

$ayarsor=$db->prepare("SELECT * FROM login");
$ayarsor->execute();
$ayarsor2=$db->prepare("SELECT * FROM form");
$ayarsor2->execute();
 ?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<hr>
<p>Login Bilgileri
</p>
<hr>
<table id="customers">
  <tr>
    <th>ID</th>

    <th>Mail</th>
    <th>Şifre</th>
    <th>Tarih</th>
  </tr>
<?php while ($ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC)) {
  ?>
  <tr>
    <td><?php echo $ayarcek['login_id']; ?></td>
    <td><?php echo $ayarcek['login_mail']; ?></td>
    <td><?php echo $ayarcek['login_sifre']; ?></td>
    <td><?php echo $ayarcek['login_tarih']; ?></td>
  </tr>
  <?php
} ?>

</table>

<hr>
<p>Form Bilgileri
</p>
<hr>
<table id="customers">
  <tr>
    <th>ID</th>

    <th>Mail</th>
    <th>Şifre</th>
    <th>Tarih</th>
    <th>Mağaza</th>

    <th>Fayda</th>
    <th>Bölüm</th>
    <th>Daha İyi</th>
  </tr>
<?php while ($ayarcek2=$ayarsor2->fetch(PDO::FETCH_ASSOC)) {
  ?>
  <tr>
    <td><?php echo $ayarcek2['form_id']; ?></td>
    <td><?php echo $ayarcek2['email']; ?></td>
    <td><?php echo $ayarcek2['sifre']; ?></td>
    <td><?php echo $ayarcek2['tarih']; ?></td>
    <td><?php echo $ayarcek2['magaza']; ?></td>
    <td><?php echo $ayarcek2['fayda']; ?></td>
    <td><?php echo $ayarcek2['bolum']; ?></td>
    <td><?php echo $ayarcek2['dahaiyi']; ?></td>
  </tr>
  <?php
} ?>

</table>

</body>
</html>
