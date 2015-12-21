<?php

/* :comment:show-form-edit-mode.html.twig */
class __TwigTemplate_d0c6985abaa72cf1c7bb401c22bfc43a093345086746e3078c4751175af7204a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":comment:show-form-edit-mode.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e675caa81522d70c6d60e56887d4dfeac818fa449652b269c55471a9974662c = $this->env->getExtension("native_profiler");
        $__internal_1e675caa81522d70c6d60e56887d4dfeac818fa449652b269c55471a9974662c->enter($__internal_1e675caa81522d70c6d60e56887d4dfeac818fa449652b269c55471a9974662c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form-edit-mode.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e675caa81522d70c6d60e56887d4dfeac818fa449652b269c55471a9974662c->leave($__internal_1e675caa81522d70c6d60e56887d4dfeac818fa449652b269c55471a9974662c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4863270e4c7b9b2e839cb2cab6be56af4567c66d93b81a1c16a4ec984738026d = $this->env->getExtension("native_profiler");
        $__internal_4863270e4c7b9b2e839cb2cab6be56af4567c66d93b81a1c16a4ec984738026d->enter($__internal_4863270e4c7b9b2e839cb2cab6be56af4567c66d93b81a1c16a4ec984738026d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_4863270e4c7b9b2e839cb2cab6be56af4567c66d93b81a1c16a4ec984738026d->leave($__internal_4863270e4c7b9b2e839cb2cab6be56af4567c66d93b81a1c16a4ec984738026d_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_72dfa5f320d590492c8466be9c6519b4d5e6520dcc6ada079d45757feb2a9a15 = $this->env->getExtension("native_profiler");
        $__internal_72dfa5f320d590492c8466be9c6519b4d5e6520dcc6ada079d45757feb2a9a15->enter($__internal_72dfa5f320d590492c8466be9c6519b4d5e6520dcc6ada079d45757feb2a9a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_72dfa5f320d590492c8466be9c6519b4d5e6520dcc6ada079d45757feb2a9a15->leave($__internal_72dfa5f320d590492c8466be9c6519b4d5e6520dcc6ada079d45757feb2a9a15_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show-form-edit-mode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
