<?php

/* AcmeQuestionBundle::question.html.twig */
class __TwigTemplate_c65dcd76593adb4d608a363e49176f1cd324f9f09ce30ec244dfaa578cd928e3 extends Twig_Template
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
    </head>
    
    <body>
        <h3>Listado de preguntas ( ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nP"]) ? $context["nP"] : $this->getContext($context, "nP")), "html", null, true);
        echo " )</h3>

        <p>
            
                Pregunta: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), "getQuestiondescription"), "html", null, true);
        echo "<br/>
                Respuesta(s):
                    <ul>
                        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), "getAnswers"));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 16
            echo "
                            <li> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "getAnswerDescription"), "html", null, true);
            echo "</li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </ul>
          
        </p>
    
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeQuestionBundle::question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  48 => 17,  45 => 16,  41 => 15,  35 => 12,  28 => 8,  19 => 1,);
    }
}
