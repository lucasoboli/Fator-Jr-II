<?php

/* form/templates/blocks/submit.hbs */
class __TwigTemplate_5148b857b4fcd2194ab46bbb034f58be538a6d724cd637d32870fe5848903a79 extends Twig_Template
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
        echo "<input type=\"submit\" value=\"{{ params.label }}\" class=\"button\" />";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/submit.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/blocks/submit.hbs", "/var/www/fatorjunior.com.br/wp-content/plugins/mailpoet/views/form/templates/blocks/submit.hbs");
    }
}
