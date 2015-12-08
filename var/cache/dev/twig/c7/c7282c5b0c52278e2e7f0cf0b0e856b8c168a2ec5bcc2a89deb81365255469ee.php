<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5c818b14a68943d01c458d65958d032aae101712db1d73c71866c69219486bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cf7aed95812c7674037970c2733f427eef81ae5e69c6a2cf107e92b7f21fa4c = $this->env->getExtension("native_profiler");
        $__internal_5cf7aed95812c7674037970c2733f427eef81ae5e69c6a2cf107e92b7f21fa4c->enter($__internal_5cf7aed95812c7674037970c2733f427eef81ae5e69c6a2cf107e92b7f21fa4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf7aed95812c7674037970c2733f427eef81ae5e69c6a2cf107e92b7f21fa4c->leave($__internal_5cf7aed95812c7674037970c2733f427eef81ae5e69c6a2cf107e92b7f21fa4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_414879eeb2fae6d2744206b57d379ab184054f2aae7197368239827869ad548b = $this->env->getExtension("native_profiler");
        $__internal_414879eeb2fae6d2744206b57d379ab184054f2aae7197368239827869ad548b->enter($__internal_414879eeb2fae6d2744206b57d379ab184054f2aae7197368239827869ad548b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "    </div>
";
        
        $__internal_414879eeb2fae6d2744206b57d379ab184054f2aae7197368239827869ad548b->leave($__internal_414879eeb2fae6d2744206b57d379ab184054f2aae7197368239827869ad548b_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5df79ba94f67ce264200a90fb8b97fd680d6decdc0ab7d9a1f810680c6e1c2aa = $this->env->getExtension("native_profiler");
        $__internal_5df79ba94f67ce264200a90fb8b97fd680d6decdc0ab7d9a1f810680c6e1c2aa->enter($__internal_5df79ba94f67ce264200a90fb8b97fd680d6decdc0ab7d9a1f810680c6e1c2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_5df79ba94f67ce264200a90fb8b97fd680d6decdc0ab7d9a1f810680c6e1c2aa->leave($__internal_5df79ba94f67ce264200a90fb8b97fd680d6decdc0ab7d9a1f810680c6e1c2aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  91 => 15,  83 => 17,  81 => 15,  77 => 13,  74 => 12,  68 => 11,  59 => 8,  54 => 7,  49 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if app.request.hasPreviousSession %}*/
/*         {% for type, messages in app.session.flashbag.all() %}*/
/*             {% for message in messages %}*/
/*                 <div class="flash-{{ type }}">*/
/*                     {{ message }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     <div>*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* {% endblock %}*/
