<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_dcd60bf99952318385346faf3456c795cc99f2ef9696b924a6b7efa89fc57b51 extends Twig_Template
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
        $__internal_bd2b2887739fcd26178a2b3a2088c4b1720c1a2653505920685ab42e97091dfc = $this->env->getExtension("native_profiler");
        $__internal_bd2b2887739fcd26178a2b3a2088c4b1720c1a2653505920685ab42e97091dfc->enter($__internal_bd2b2887739fcd26178a2b3a2088c4b1720c1a2653505920685ab42e97091dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd2b2887739fcd26178a2b3a2088c4b1720c1a2653505920685ab42e97091dfc->leave($__internal_bd2b2887739fcd26178a2b3a2088c4b1720c1a2653505920685ab42e97091dfc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b9a186bf785f9fd839859ee98706c2cfdf7b8ba19a856677548495f3e25666 = $this->env->getExtension("native_profiler");
        $__internal_15b9a186bf785f9fd839859ee98706c2cfdf7b8ba19a856677548495f3e25666->enter($__internal_15b9a186bf785f9fd839859ee98706c2cfdf7b8ba19a856677548495f3e25666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_15b9a186bf785f9fd839859ee98706c2cfdf7b8ba19a856677548495f3e25666->leave($__internal_15b9a186bf785f9fd839859ee98706c2cfdf7b8ba19a856677548495f3e25666_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de6a73052ac2fac1cf7a7a3dce9e65cb82996839af6bd027742a39b971a33c20 = $this->env->getExtension("native_profiler");
        $__internal_de6a73052ac2fac1cf7a7a3dce9e65cb82996839af6bd027742a39b971a33c20->enter($__internal_de6a73052ac2fac1cf7a7a3dce9e65cb82996839af6bd027742a39b971a33c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_de6a73052ac2fac1cf7a7a3dce9e65cb82996839af6bd027742a39b971a33c20->leave($__internal_de6a73052ac2fac1cf7a7a3dce9e65cb82996839af6bd027742a39b971a33c20_prof);

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
