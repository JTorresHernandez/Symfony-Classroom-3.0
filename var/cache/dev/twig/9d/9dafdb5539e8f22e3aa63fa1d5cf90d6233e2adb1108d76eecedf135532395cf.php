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
        $__internal_0f9e75afff13a8f08d85e1054b49c428e030378e83b2a59cf06719265e9c266b = $this->env->getExtension("native_profiler");
        $__internal_0f9e75afff13a8f08d85e1054b49c428e030378e83b2a59cf06719265e9c266b->enter($__internal_0f9e75afff13a8f08d85e1054b49c428e030378e83b2a59cf06719265e9c266b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9e75afff13a8f08d85e1054b49c428e030378e83b2a59cf06719265e9c266b->leave($__internal_0f9e75afff13a8f08d85e1054b49c428e030378e83b2a59cf06719265e9c266b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70de18890c953b7f1e47e0fe02ee035bf71685d534f25c1d4a22f9ce3249d3cb = $this->env->getExtension("native_profiler");
        $__internal_70de18890c953b7f1e47e0fe02ee035bf71685d534f25c1d4a22f9ce3249d3cb->enter($__internal_70de18890c953b7f1e47e0fe02ee035bf71685d534f25c1d4a22f9ce3249d3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_70de18890c953b7f1e47e0fe02ee035bf71685d534f25c1d4a22f9ce3249d3cb->leave($__internal_70de18890c953b7f1e47e0fe02ee035bf71685d534f25c1d4a22f9ce3249d3cb_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee6c34192eb5736e12b980eff89f5c81012ff55c944622f153235e012b76638a = $this->env->getExtension("native_profiler");
        $__internal_ee6c34192eb5736e12b980eff89f5c81012ff55c944622f153235e012b76638a->enter($__internal_ee6c34192eb5736e12b980eff89f5c81012ff55c944622f153235e012b76638a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "                ";
        
        $__internal_ee6c34192eb5736e12b980eff89f5c81012ff55c944622f153235e012b76638a->leave($__internal_ee6c34192eb5736e12b980eff89f5c81012ff55c944622f153235e012b76638a_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_69f0539b5b4cc7ebd60976cd92cbeaf85780e13fd3d662895c40848e9c1852d2 = $this->env->getExtension("native_profiler");
        $__internal_69f0539b5b4cc7ebd60976cd92cbeaf85780e13fd3d662895c40848e9c1852d2->enter($__internal_69f0539b5b4cc7ebd60976cd92cbeaf85780e13fd3d662895c40848e9c1852d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_69f0539b5b4cc7ebd60976cd92cbeaf85780e13fd3d662895c40848e9c1852d2->leave($__internal_69f0539b5b4cc7ebd60976cd92cbeaf85780e13fd3d662895c40848e9c1852d2_prof);

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
