<?php

/* AcmeQuestionBundle::create.html.twig */
class __TwigTemplate_6c92be1ebafb3903084d92c290b0c8970a4c066adbda0a6b1085dd135d4588c0 extends Twig_Template
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
        echo "Pregunta creada:<br/>
<ul>
    <li>Pregunta id: <b>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</b></li>
    <li>Pregunta: <b>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "html", null, true);
        echo "?</b></li>
    <li>Respuestas (";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
        echo "):
        <ul>
            ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) ? $context["answers"] : $this->getContext($context, "answers")));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 8
            echo "                <li>";
            echo twig_escape_filter($this->env, (isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </ul>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "AcmeQuestionBundle::create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
