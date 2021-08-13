<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Nueva contraseña en <?php echo $site_name; ?></title></head>
<body>
<div style="max-width: 800px; margin: 0; padding: 30px 0;">
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Nueva contraseña en <?php echo $site_name; ?></h2>
Cambiaste tu contraseña.<br />
Por favor, mantenlo en tus registros para que no lo olvides..<br />
<br />
<?php if (strlen($nombre) > 0) { ?>Tu nombre: <?php echo $nombre; ?><br /><?php } ?>
Tu correo: <?php echo $correo; ?><br />
<?php /* Your new password: <?php echo $new_password; ?><br /> */ ?>
<br />
<br />
Gracias,<br />
El equipo <?php echo $site_name; ?>
</td>
</tr>
</table>
</div>
</body>
</html>