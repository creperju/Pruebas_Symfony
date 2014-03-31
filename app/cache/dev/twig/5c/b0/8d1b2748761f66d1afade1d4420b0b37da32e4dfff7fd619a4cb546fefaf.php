<?php

/* AcmeStoreBundle::all.html.twig */
class __TwigTemplate_5cb08d1b2748761f66d1afade1d4420b0b37da32e4dfff7fd619a4cb546fefaf extends Twig_Template
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
        echo "<h1>Lista de productos</h1>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_en_twig"]) ? $context["products_en_twig"] : $this->getContext($context, "products_en_twig")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getName"), "html", null, true);
            echo "
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle::all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
