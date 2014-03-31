<?php

/* AcmeQuestionBundle::answers.html.twig */
class __TwigTemplate_11c8e4dbd27d75192bf707beee75d737ff161a566ce42c0888c94e2f2c1e6a45 extends Twig_Template
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
        <title>Respuestas</title>
    </head>
    
    <body>
        <h3>Listado de respuestas (  )</h3>

        
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) ? $context["answers"] : $this->getContext($context, "answers")));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 12
            echo "            <p>
                Respuesta: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "getAnswerdescription"), "html", null, true);
            echo "<br/>
                Pregunta_id: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "getQuestion"), "html", null, true);
            echo "
            </p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "       
    
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeQuestionBundle::answers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  42 => 14,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
