<?php

/* :comment:showCommentsByArticle.html.twig */
class __TwigTemplate_c8527a520ffd8a22b2d9d9221e51af53f7665668ad2d9f13c0e775ca8ff50101 extends Twig_Template
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
        if ( !twig_test_empty((isset($context["comments"]) ? $context["comments"] : null))) {
            // line 2
            echo "    <hr>
";
        }
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
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
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["comments"]) ? $context["comments"] : null));
            echo "
    </div>
";
        }
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
        return array (  68 => 11,  65 => 10,  63 => 9,  60 => 8,  45 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
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
