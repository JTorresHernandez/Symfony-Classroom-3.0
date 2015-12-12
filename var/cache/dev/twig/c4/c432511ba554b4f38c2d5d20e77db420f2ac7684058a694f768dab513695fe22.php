<?php

/* :comment:show-comments.html.twig */
class __TwigTemplate_e56bf498adafc8cca8938921715e178ba5998fbfb85a715dbad46bcb748fc458 extends Twig_Template
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
        $__internal_3b691fa3351b6b2864bececc2a38f2a15589f3c90ba3e91c00fc0818ea434c31 = $this->env->getExtension("native_profiler");
        $__internal_3b691fa3351b6b2864bececc2a38f2a15589f3c90ba3e91c00fc0818ea434c31->enter($__internal_3b691fa3351b6b2864bececc2a38f2a15589f3c90ba3e91c00fc0818ea434c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-comments.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3b691fa3351b6b2864bececc2a38f2a15589f3c90ba3e91c00fc0818ea434c31->leave($__internal_3b691fa3351b6b2864bececc2a38f2a15589f3c90ba3e91c00fc0818ea434c31_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show-comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for comment in comments %}*/
/*     <div>{{ comment.comment }}</div>*/
/* {% endfor %}*/
