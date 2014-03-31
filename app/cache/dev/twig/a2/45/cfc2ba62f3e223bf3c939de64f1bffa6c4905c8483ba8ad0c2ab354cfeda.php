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
    </head>
    
    <body>
        <h3>Listado de preguntas ( ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nP"]) ? $context["nP"] : $this->getContext($context, "nP")), "html", null, true);
        echo " )</h3>

        <p>
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 12
            echo "                Pregunta: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "getQuestiondescription"), "html", null, true);
            echo "<br/>
                Respuesta(s):
                    <ul>
                        ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "getAnswers"));
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
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </p>
    
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
        return array (  68 => 22,  61 => 20,  52 => 17,  49 => 16,  45 => 15,  38 => 12,  34 => 11,  28 => 8,  19 => 1,);
    }
}
