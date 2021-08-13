<?php

/* layout/correo.twig */
class __TwigTemplate_8e64981a630d85dee4b1374e95f14f5dcdf87214916dab2b9e98e710e1f6f523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//ES\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t<title>";
        // line 5
        echo $this->getAttribute(($context["pagina"] ?? null), "titulo", array());
        echo "</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t<style type=\"text/css\">
\t  @media (min-width: 1024px) {
\t    .soloPC{
\t      display: block;
\t    }
\t    .soloMovil{
\t      display: none;
\t    }
\t    .soloTablet{
\t      display: none;
\t    }
\t  }
\t  @media (min-width: 572px) and (max-width: 1023px){
\t    .soloPC{
\t      display: block;
\t    }
\t    .soloMovil{
\t      display: none;
\t    }
\t    .soloTablet{
\t      display: none;
\t    }
\t  }
\t  @media (min-width: 320px) and (max-width: 570px){
\t    .soloPC{
\t      display: none;
\t    }
\t    .soloMovil{
\t      display: block;
\t    }
\t    .soloTablet{
\t      display: none;
\t    }
\t  }
\t</style>
</head>
<body style=\"margin: 0; padding: 0;\">
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"> 
\t\t<tr>
\t\t\t<td style=\"padding: 10px 0 30px 0;\">
\t\t\t\t<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td bgcolor=\"\" align=\"\" style=\"padding: 1px;\">
\t\t\t\t\t\t\t<div style=\"position:relative\" >
\t\t\t\t\t\t\t\t<img src=\"http://pormayor.pe/img/logCorreo.png\" alt=\"logo-pormayor\" style=\"display: block;\" height=\"70\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td >&nbsp;</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "\t\t\t\t</table>
\t\t\t\t<table bgcolor=\"#3b3b3d\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td  align=\"center\" colspan=\"4\" style=\"font-size: 1rem; font-family: Arial, sans-serif;color:white;padding:5px;\">SIGUENOS</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td align=\"center\" style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding:5px;\">
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/pormayor.pe/?hl=es-la\" style=\"color: #ffffff;\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"https://pormayor.pe/img/instaW.png\" alt=\"Twitter\" width=\"25\" height=\"25\" style=\"display: block;\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"center\" style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding:5px;\">
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/pormayoroficial/\" style=\"color: #ffffff;\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"https://pormayor.pe/img/faceW.png\" alt=\"Facebook\" width=\"25\" height=\"25\" style=\"display: block;\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"center\" style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding:5px;\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UCgCUpeiwXV1-8BphKl6ut0Q?view_as=subscriber\" style=\"color: #ffffff;\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"https://pormayor.pe/img/youtubeW.png\" alt=\"youtubeW\" width=\"25\" height=\"25\" style=\"display: block;\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"center\" style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;padding:5px;\">
\t\t\t\t\t\t\t<a href=\"mailto:contacto@pormayor.pe\" style=\"color: #ffffff;\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"https://pormayor.pe/img/mailW.png\" alt=\"Correo\" width=\"25\" height=\"25\" style=\"display: block;\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td  align=\"center\" colspan=\"4\" style=\"font-size: 0.6rem; font-family: Arial, sans-serif;color:white;padding:5px;\">Este correo ha sido enviado desde los servidores de pormayor.pe por su consentimiento, <br>igualmente puede ver nuestros politicas de privacidad en el siguiente <a href=\"https://pormayor.pe/legal/privacidad\" style=\"text-decoration:none;color:#FEC00F;\">página</a></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td  align=\"center\" colspan=\"4\" style=\"font-size: 0.6rem; font-family: Arial, sans-serif;color:white;padding:5px;\">© <a href=\"https://pormayor.pe\" style=\"text-decoration:none;color:#FEC00F;\">pormayor.pe</a> todos los derechos reservados.</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</body>
</html>";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout/correo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 58,  84 => 59,  82 => 58,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/correo.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\layout\\correo.twig");
    }
}
