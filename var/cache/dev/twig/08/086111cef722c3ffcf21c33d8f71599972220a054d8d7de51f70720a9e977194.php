<?php

/* :comment:showCommentsByArticle.html.twig */
class __TwigTemplate_4579c37c0154f0aa5d7db92c6beb60c2fad9a4f5d1d8a6a552e7cc3630f5a9a1 extends Twig_Template
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
        $__internal_82bb9088433d62a106afca240ddf27adb02a903eea20c31d6dc0c312849fbc2c = $this->env->getExtension("native_profiler");
        $__internal_82bb9088433d62a106afca240ddf27adb02a903eea20c31d6dc0c312849fbc2c->enter($__internal_82bb9088433d62a106afca240ddf27adb02a903eea20c31d6dc0c312849fbc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:showCommentsByArticle.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))) {
            // line 2
            echo "    <hr>
";
        }
        // line 4
        echo "
";
        // line 5
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
            // line 6
            echo "    ";
            $this->loadTemplate(":comment:show-comment.html.twig", ":comment:showCommentsByArticle.html.twig", 6)->display(array_merge($context, array("comment" => $context["comment"])));
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
        // line 8
        echo "
";
        // line 9
        if ( !array_key_exists("doPagination", $context)) {
            // line 10
            echo "    <div class=\"navigation\">
        ";
            // line 11
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            echo "
    </div>
";
        }
        
        $__internal_82bb9088433d62a106afca240ddf27adb02a903eea20c31d6dc0c312849fbc2c->leave($__internal_82bb9088433d62a106afca240ddf27adb02a903eea20c31d6dc0c312849fbc2c_prof);

    }

    public function getTemplateName()
    {
        return ":comment:showCommentsByArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  68 => 10,  66 => 9,  63 => 8,  48 => 6,  31 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if comments is not empty %}*/
/*     <hr>*/
/* {% endif %}*/
/* */
/* {% for comment in comments %}*/
/*     {% include ':comment:show-comment.html.twig' with {'comment': comment} %}*/
/* {% endfor %}*/
/* */
/* {% if not doPagination is defined %}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(comments) }}*/
/*     </div>*/
/* {% endif %}*/
