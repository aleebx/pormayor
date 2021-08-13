<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Crear una nueva contraseña en <?php echo $site_name; ?></title></head>
<body>
<div style="max-width: 800px; margin: 0; padding: 30px 0;">
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Crear una nueva contraseña</h2>
¿Olvidades tu contraseña?<br />
Para crear una nueva contraseña, simplemente siga este enlace:<br />
<br />
<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="<?php echo site_url('/usuario/reset_password/'.$id_usuario.'/'.$new_pass_key); ?>" style="color: #3366cc;">Crear una nueva contraseña</a></b></big><br />
<br />
¿El enlace no funciona? Copia el siguiente enlace a la barra de direcciones de tu navegador::<br />
<nobr><a href="<?php echo site_url('/usuario/reset_password/'.$id_usuario.'/'.$new_pass_key); ?>" style="color: #3366cc;"><?php echo site_url('/usuario/reset_password/'.$id_usuario.'/'.$new_pass_key); ?></a></nobr><br />
<br />
<br />
Recibió este correo porque fue solicitado en <a href="<?php echo site_url(''); ?>" style="color: #3366cc;"><?php echo $site_name; ?></a>. Esto es parte del procedimiento para crear una nueva contraseña en el sistema. Si NO solicitó una nueva contraseña, ignore este correo electrónico y su contraseña seguirá siendo la misma.<br />
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