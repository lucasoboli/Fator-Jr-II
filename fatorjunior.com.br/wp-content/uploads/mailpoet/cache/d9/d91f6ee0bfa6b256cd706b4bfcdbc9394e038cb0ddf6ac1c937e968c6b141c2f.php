<?php

/* help.html */
class __TwigTemplate_b0f887555f493becb62850849085634905455bf74ed884306dd27f926b8dea27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "help.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1 class=\"title\">";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Help");
        echo "</h1>

<div id=\"mailpoet_help\">

  <script type=\"text/javascript\">
    var help_scout_data = ";
        // line 10
        echo json_encode(($context["data"] ?? null));
        echo ";
  </script>

  <div id=\"help_container\"></div>

</div>

";
    }

    // line 18
    public function block_translations($context, array $blocks = array())
    {
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("tabKnowledgeBaseTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Knowledge Base"), "tabSystemInfoTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("System Info"), "knowledgeBaseIntro" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Click on one of these categories below to find more information:"), "knowledgeBaseButton" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visit our Knowledge Base for more articles"), "systemInfoIntro" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("The information below is useful when you need to get in touch with our support. Just copy all the text below and paste it into a message to us."), "systemInfoDataError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sorry, there was an error, please try again later.")));
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "help.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 26,  58 => 19,  55 => 18,  43 => 10,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "help.html", "/var/www/fatorjunior.com.br/wp-content/plugins/mailpoet/views/help.html");
    }
}
