<?php

/* correo/correo_comprador.twig */
class __TwigTemplate_d7e132912d04eda17f42c5495ab38a38a282cfaeb02ce1bf3096ef923340e2f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
  <title>";
        // line 5
        echo $this->getAttribute(($context["pagina"] ?? null), "titulo", array());
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
</head>
<body style=\"margin: 0; padding: 0;\">
  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"> 
    <tr>
      <td style=\"padding: 10px 0 30px 0;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
          <tr>
            <td bgcolor=\"\" align=\"\" style=\"padding: 1px;\">
              <div style=\"position:relative\" >
                <img src=\"http://pormayor.pe/img/logCorreo.png\" alt=\"logo-pormayor\" style=\"display: block;\" height=\"70\" />
              </div>
            </td>
          </tr>
          <tr>
            <td >&nbsp;</td>
          </tr>
          <tr style=\"border-top: #f6b21d 5px solid;\">
            <td bgcolor=\"#3b3b3d\" align=\"center\" style=\"padding: 20px 0px 20px 0px;font-size: 1.5rem; font-family: Arial, sans-serif;color:white\">
              Hola, <b style=\"color:#FEC00F;\">";
        // line 25
        echo twig_upper_filter($this->env, ($context["nombre_usuario"] ?? null));
        echo "</b><br><br>
              Tu registro se ha hecho con éxito. <br>         
            </td>
          </tr>
        </table>
        <table bgcolor=\"#3b3b3d\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
          <tr>
            <td  align=\"center\" colspan=\"4\" style=\"font-size: 1rem; font-family: Arial, sans-serif;color:white;padding:5px;\">SIGUENOS</td>
          </tr>
          <tr>
            <td align=\"center\" style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding:5px;\">
              <a href=\"https://www.instagram.com/pormayor.pe/?hl=es-la\" style=\"color: #ffffff;\" target=\"_blank\">
              <img src=\"https://pormayor.pe/img/instaW.png\" alt=\"Twitter\" width=\"25\" height=\"25\" style=\"display: block;\" />
              </a>
            </td>
            <td align=\"center\" style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding:5px;\">
              <a href=\"https://www.facebook.com/pormayoroficial/\" style=\"color: #ffffff;\" target=\"_blank\">
              <img src=\"https://pormayor.pe/img/faceW.png\" alt=\"Facebook\" width=\"25\" height=\"25\" style=\"display: block;\" />
              </a>
            </td>
            <td align=\"center\" style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding:5px;\">
              <a href=\"https://www.youtube.com/channel/UCgCUpeiwXV1-8BphKl6ut0Q?view_as=subscriber\" style=\"color: #ffffff;\" target=\"_blank\">
              <img src=\"https://pormayor.pe/img/youtubeW.png\" alt=\"youtubeW\" width=\"25\" height=\"25\" style=\"display: block;\" />
              </a>
            </td>
            <td align=\"center\" style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding:5px;\">
              <a href=\"mailto:contacto@pormayor.pe\" style=\"color: #ffffff;\" target=\"_blank\">
              <img src=\"https://pormayor.pe/img/mailW.png\" alt=\"Correo\" width=\"25\" height=\"25\" style=\"display: block;\" />
              </a>
            </td>
          </tr>
          <tr>
            <td  align=\"center\" colspan=\"4\" style=\"font-size: 0.6rem; font-family: Arial, sans-serif;color:white;padding:5px;\">Este correo ha sido enviado desde los servidores de pormayor.pe por su consentimiento, <br>igualmente puede ver nuestros politicas de privacidad en el siguiente <a href=\"https://pormayor.pe/legal/privacidad\" style=\"text-decoration:none;color:#FEC00F;\">página</a></td>
          </tr>
          <tr>
            <td  align=\"center\" colspan=\"4\" style=\"font-size: 0.6rem; font-family: Arial, sans-serif;color:white;padding:5px;\">© <a href=\"https://pormayor.pe\" style=\"text-decoration:none;color:#FEC00F;\">pormayor.pe</a> todos los derechos reservados.</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "correo/correo_comprador.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 25,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "correo/correo_comprador.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\correo\\correo_comprador.twig");
    }
}
