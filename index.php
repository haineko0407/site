
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My IP address</title>
</head>
<body>
<?php echo $_SERVER['REMOTE_ADDR']; ?>
<script>

Email.send({
    Host : "smtp.elasticemail.com",
    Username : "haineko04072@gmail.com",
    Password : "9EA6AE3F7A87E6B1A4BE4FC287466BD34251",
    To : 'sinonome1102@gmail.com',
    From : "haineko04072@gmail.com",
    Subject : "test",
    Body : "test"
}).then(
  alert('完了')
);

</script>

</body>
</html>
