<?php

/* :comment:last.html.twig */
class __TwigTemplate_246bb3fdaf031b18fede685319cde43a0856c3ba37c8c5d1893d9a18ed14b600 extends Twig_Template
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
        $__internal_3782e9068fc21deaeda30d839fd1e6fa80bf9e7a3480b7f66b5b73771f64c3d3 = $this->env->getExtension("native_profiler");
        $__internal_3782e9068fc21deaeda30d839fd1e6fa80bf9e7a3480b7f66b5b73771f64c3d3->enter($__internal_3782e9068fc21deaeda30d839fd1e6fa80bf9e7a3480b7f66b5b73771f64c3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:last.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 2
            echo "    ";
            $this->loadTemplate(":comment:show-comment.html.twig", ":comment:last.html.twig", 2)->display(array_merge($context, array("comment" => $context["comment"])));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3782e9068fc21deaeda30d839fd1e6fa80bf9e7a3480b7f66b5b73771f64c3d3->leave($__internal_3782e9068fc21deaeda30d839fd1e6fa80bf9e7a3480b7f66b5b73771f64c3d3_prof);

    }

    public function getTemplateName()
    {
        return ":comment:last.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  22 => 1,);
    }
}
/* {% for comment in comments %}*/
/*     {% include ':comment:show-comment.html.twig' with {'comment': comment} %}*/
/* {% endfor %}*/
