<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_505476ee7b2b2c0610694c5efe9c6c4f0a9dcc3e03bd811e4a319cb0b7ab5621 extends Twig_Template
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
        $__internal_a0776e27bc6fab0183d3ecb718291be70bc8dc507d86e8b512f130d5e1455934 = $this->env->getExtension("native_profiler");
        $__internal_a0776e27bc6fab0183d3ecb718291be70bc8dc507d86e8b512f130d5e1455934->enter($__internal_a0776e27bc6fab0183d3ecb718291be70bc8dc507d86e8b512f130d5e1455934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0776e27bc6fab0183d3ecb718291be70bc8dc507d86e8b512f130d5e1455934->leave($__internal_a0776e27bc6fab0183d3ecb718291be70bc8dc507d86e8b512f130d5e1455934_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3c890ebc4b6bff694855af6530eff5e2aa21615a1fe1dc84359863be2bc4a95 = $this->env->getExtension("native_profiler");
        $__internal_f3c890ebc4b6bff694855af6530eff5e2aa21615a1fe1dc84359863be2bc4a95->enter($__internal_f3c890ebc4b6bff694855af6530eff5e2aa21615a1fe1dc84359863be2bc4a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3c890ebc4b6bff694855af6530eff5e2aa21615a1fe1dc84359863be2bc4a95->leave($__internal_f3c890ebc4b6bff694855af6530eff5e2aa21615a1fe1dc84359863be2bc4a95_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59a7e9e9e949674947f8e349302036ee6651ddb996ecd13abffc6d8089b16954 = $this->env->getExtension("native_profiler");
        $__internal_59a7e9e9e949674947f8e349302036ee6651ddb996ecd13abffc6d8089b16954->enter($__internal_59a7e9e9e949674947f8e349302036ee6651ddb996ecd13abffc6d8089b16954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "                ";
        
        $__internal_59a7e9e9e949674947f8e349302036ee6651ddb996ecd13abffc6d8089b16954->leave($__internal_59a7e9e9e949674947f8e349302036ee6651ddb996ecd13abffc6d8089b16954_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_44a1a1e83e4f6e7e34c3d35587230fd3babbd52b00302f46af2799f45c66508c = $this->env->getExtension("native_profiler");
        $__internal_44a1a1e83e4f6e7e34c3d35587230fd3babbd52b00302f46af2799f45c66508c->enter($__internal_44a1a1e83e4f6e7e34c3d35587230fd3babbd52b00302f46af2799f45c66508c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_44a1a1e83e4f6e7e34c3d35587230fd3babbd52b00302f46af2799f45c66508c->leave($__internal_44a1a1e83e4f6e7e34c3d35587230fd3babbd52b00302f46af2799f45c66508c_prof);

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
