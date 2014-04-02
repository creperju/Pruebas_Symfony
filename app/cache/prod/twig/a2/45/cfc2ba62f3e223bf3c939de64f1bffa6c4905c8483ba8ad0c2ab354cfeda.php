<?php

/* AcmeQuestionBundle::index.html.twig */
class __TwigTemplate_a245cfc2ba62f3e223bf3c939de64f1bffa6c4905c8483ba8ad0c2ab354cfeda extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>    
    <head>
        <title>Preguntas</title>
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    
    <body>
        <div class=\"container show-top-margin separate-rows tall-rows\">
            
            <!-- Encabezado -->
            <div class=\"row show-grid\">
                <div class=\"col-md-12\">
                    <h1>Listado de preguntas ( ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["nP"]) ? $context["nP"] : null), "html", null, true);
        echo " )</h1>
                </div>
            </div>
            
            <div class=\"row show-grid\">                
                <form>
                    <div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" placeholder=\"Haga una pregunta\" /></div>
                    <div class=\"col-md-3\"><button type=\"button\" class=\"btn btn-primary\">Ask me know!</button></div>   
                </form>                
            </div>
            
            <div class=\"row show-grid\">
                
                    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 29
            echo "                        <div class=\"col-md-12\">
                            <p class=\"text-info\">
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "getId"), "html", null, true);
            echo "\">
                                    Pregunta: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "getQuestiondescription"), "html", null, true);
            echo "
                                </a>
                            </p>
                        </div>                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                
            </div>
            
            <!-- Botones de acción para mostrar más preguntas -->
            <div class=\"row\">
                
                    <button class=\"col-md-1 col-xs-3 btn btn-default\">&lt;Prev</button>
                    <button class=\"col-md-1 col-xs-3 btn btn-default\">1</button>
                    <button class=\"col-md-1 col-xs-3 btn btn-default\">2</button>
                    <button class=\"col-md-1 col-xs-3 btn btn-default\">&gt;Next</button>
                
            </div>
        
        
        </div>
        
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeQuestionBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  70 => 32,  65 => 31,  61 => 29,  57 => 28,  41 => 15,  29 => 6,  25 => 5,  19 => 1,);
    }
}
