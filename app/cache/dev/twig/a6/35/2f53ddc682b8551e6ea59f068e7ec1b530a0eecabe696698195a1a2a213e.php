<?php

/* AcmeStoreBundle::show.html.php */
class __TwigTemplate_a6352f53ddc682b8551e6ea59f068e7ec1b530a0eecabe696698195a1a2a213e extends Twig_Template
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
        Id del producto: <?=\$datos['id']?><br/>
        Producto:<?=\$datos['name']?><br/>
        Precio:<?=\$datos['price']?><br/>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle::show.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
