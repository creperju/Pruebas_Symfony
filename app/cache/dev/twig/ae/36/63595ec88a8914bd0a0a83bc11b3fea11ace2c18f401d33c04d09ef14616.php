<?php

/* AcmeStoreBundle::show.html.twig */
class __TwigTemplate_ae3663595ec88a8914bd0a0a83bc11b3fea11ace2c18f401d33c04d09ef14616 extends Twig_Template
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
        echo "<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>El producto seleccionado es:</h1>
        Id del producto: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "<br/>
        Producto: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " <br/>
        Precio: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), "html", null, true);
        echo " <br/>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle::show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
