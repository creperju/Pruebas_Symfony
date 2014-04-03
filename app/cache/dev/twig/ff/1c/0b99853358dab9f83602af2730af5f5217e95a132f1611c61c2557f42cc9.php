<?php

/* AcmeQuestionBundle::default.html.twig */
class __TwigTemplate_ff1c0b99853358dab9f83602af2730af5f5217e95a132f1611c61c2557f42cc9 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
<br/>
<a href='";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "'>Volver</a>";
    }

    public function getTemplateName()
    {
        return "AcmeQuestionBundle::default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  19 => 1,);
    }
}
