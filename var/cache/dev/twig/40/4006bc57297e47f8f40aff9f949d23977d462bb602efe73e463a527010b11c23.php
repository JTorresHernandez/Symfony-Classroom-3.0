<?php

/* :index:email.html.twig */
class __TwigTemplate_d6c62f76e7d4386ae0d66da65120901b91c4b0793ca8046920d71fe25bfa079e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:email.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_263bc66228e67e2d2fc8aa1cd0b5d80e7b2f37e67cd5e0404a24175d4e852586 = $this->env->getExtension("native_profiler");
        $__internal_263bc66228e67e2d2fc8aa1cd0b5d80e7b2f37e67cd5e0404a24175d4e852586->enter($__internal_263bc66228e67e2d2fc8aa1cd0b5d80e7b2f37e67cd5e0404a24175d4e852586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_263bc66228e67e2d2fc8aa1cd0b5d80e7b2f37e67cd5e0404a24175d4e852586->leave($__internal_263bc66228e67e2d2fc8aa1cd0b5d80e7b2f37e67cd5e0404a24175d4e852586_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07f135b824bbbb8223ceb54c9fbf5ef28599d42073af12136727c088a4266335 = $this->env->getExtension("native_profiler");
        $__internal_07f135b824bbbb8223ceb54c9fbf5ef28599d42073af12136727c088a4266335->enter($__internal_07f135b824bbbb8223ceb54c9fbf5ef28599d42073af12136727c088a4266335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_07f135b824bbbb8223ceb54c9fbf5ef28599d42073af12136727c088a4266335->leave($__internal_07f135b824bbbb8223ceb54c9fbf5ef28599d42073af12136727c088a4266335_prof);

    }

    public function getTemplateName()
    {
        return ":index:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>Email was sent</div>*/
/* {% endblock %}*/
