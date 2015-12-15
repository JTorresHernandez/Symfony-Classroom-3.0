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
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec59d00cbc6d7f725378ce323252478c4fd70ff55f2d334099c6e6bc4fa4a55f = $this->env->getExtension("native_profiler");
        $__internal_ec59d00cbc6d7f725378ce323252478c4fd70ff55f2d334099c6e6bc4fa4a55f->enter($__internal_ec59d00cbc6d7f725378ce323252478c4fd70ff55f2d334099c6e6bc4fa4a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec59d00cbc6d7f725378ce323252478c4fd70ff55f2d334099c6e6bc4fa4a55f->leave($__internal_ec59d00cbc6d7f725378ce323252478c4fd70ff55f2d334099c6e6bc4fa4a55f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_558ecb64acf6a8a2305f5b1a1bb24c14cd563428f90adf4613884acf86b35548 = $this->env->getExtension("native_profiler");
        $__internal_558ecb64acf6a8a2305f5b1a1bb24c14cd563428f90adf4613884acf86b35548->enter($__internal_558ecb64acf6a8a2305f5b1a1bb24c14cd563428f90adf4613884acf86b35548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_558ecb64acf6a8a2305f5b1a1bb24c14cd563428f90adf4613884acf86b35548->leave($__internal_558ecb64acf6a8a2305f5b1a1bb24c14cd563428f90adf4613884acf86b35548_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4c6bff165c6cb1065c6bba5dbc0b39079e280ba845cae7e018a96426bd20d1c = $this->env->getExtension("native_profiler");
        $__internal_b4c6bff165c6cb1065c6bba5dbc0b39079e280ba845cae7e018a96426bd20d1c->enter($__internal_b4c6bff165c6cb1065c6bba5dbc0b39079e280ba845cae7e018a96426bd20d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "                ";
        
        $__internal_b4c6bff165c6cb1065c6bba5dbc0b39079e280ba845cae7e018a96426bd20d1c->leave($__internal_b4c6bff165c6cb1065c6bba5dbc0b39079e280ba845cae7e018a96426bd20d1c_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0b60df6b7ee582c98a085976af081b032cb3a768c7dfcf9e2f08f649ab57435c = $this->env->getExtension("native_profiler");
        $__internal_0b60df6b7ee582c98a085976af081b032cb3a768c7dfcf9e2f08f649ab57435c->enter($__internal_0b60df6b7ee582c98a085976af081b032cb3a768c7dfcf9e2f08f649ab57435c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_0b60df6b7ee582c98a085976af081b032cb3a768c7dfcf9e2f08f649ab57435c->leave($__internal_0b60df6b7ee582c98a085976af081b032cb3a768c7dfcf9e2f08f649ab57435c_prof);

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
        return array (  109 => 24,  102 => 18,  96 => 17,  86 => 19,  84 => 17,  78 => 13,  75 => 12,  69 => 11,  60 => 8,  55 => 7,  50 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-8">*/
/*                 {% block fos_user_content %}*/
/*                 {% endblock fos_user_content %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
