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
        <div class=\"container show-top-margin separate-rows tall-rows\">
            <div class=\"row show-grid\">
                <div class=\"col-md-12\">
                    <h1>PROYECTO</h1>
                </div>
            </div>
            
            <div class=\"row show-grid\">
                <div class=\"col-md-12\">
                    <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "getQuestiondescription"), "html", null, true);
        echo "</h2>
                </div>
            </div>
            
            <div class=\"row show-grid\">
                <div class=\"col-md-9\">
                    ";
        // line 23
        if (((isset($context["answers"]) ? $context["answers"] : $this->getContext($context, "answers")) > 0)) {
            // line 24
            echo "                            ";
            if (((isset($context["answers"]) ? $context["answers"] : $this->getContext($context, "answers")) != 1)) {
                // line 25
                echo "                                <div class=\"col-md-12\">";
                echo twig_escape_filter($this->env, (isset($context["answers"]) ? $context["answers"] : $this->getContext($context, "answers")), "html", null, true);
                echo " respuestas</div>
                            ";
            } else {
                // line 27
                echo "                                <div class=\"col-md-12\">";
                echo twig_escape_filter($this->env, (isset($context["answers"]) ? $context["answers"] : $this->getContext($context, "answers")), "html", null, true);
                echo " respuesta</div>
                            ";
            }
            // line 29
            echo "                            
                            <div class=\"col-md-offset-1\">
                                <ul class=\"list-unstyled\">
                                    ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "getAnswers"));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 33
                echo "
                                        <li> ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "getAnswerDescription"), "html", null, true);
                echo "</li>

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                                </ul>
                            </div>   
                        
                    ";
        } else {
            // line 41
            echo "                        <div class=\"col-md-12\">No hay respuestas</div>
                    ";
        }
        // line 43
        echo "                       
                    <div class=\"col-md-12\">
                        <form>
                            <textarea class=\"form-control\" rows=\"3\"></textarea>
                            <button type=\"button\" class=\"btn btn-primary\">Answer now!</button>
                        </form>
                    </div>
                    
                        
                </div>
                
                <div class=\"col-md-3\">
                    Sidebar
                </div>
                
            </div>

        </div>
        
        <link href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
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
        return array (  119 => 63,  115 => 62,  94 => 43,  90 => 41,  84 => 37,  75 => 34,  72 => 33,  68 => 32,  63 => 29,  57 => 27,  51 => 25,  48 => 24,  46 => 23,  37 => 17,  19 => 1,);
    }
}
