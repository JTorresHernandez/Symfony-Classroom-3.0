<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_4d4a27ae26830c4fa88741a526fb5054cc2851d6bd417ca015c36a8ebae7eef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e6fbfc174af95d63b36eecc2ce1720ee3069a8d9bd1bd37363182f68deff3fa = $this->env->getExtension("native_profiler");
        $__internal_4e6fbfc174af95d63b36eecc2ce1720ee3069a8d9bd1bd37363182f68deff3fa->enter($__internal_4e6fbfc174af95d63b36eecc2ce1720ee3069a8d9bd1bd37363182f68deff3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e6fbfc174af95d63b36eecc2ce1720ee3069a8d9bd1bd37363182f68deff3fa->leave($__internal_4e6fbfc174af95d63b36eecc2ce1720ee3069a8d9bd1bd37363182f68deff3fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2bdddf0462bd9347e324ebfeb387f04fc789977585d3d7febc6b45ed1738caa = $this->env->getExtension("native_profiler");
        $__internal_a2bdddf0462bd9347e324ebfeb387f04fc789977585d3d7febc6b45ed1738caa->enter($__internal_a2bdddf0462bd9347e324ebfeb387f04fc789977585d3d7febc6b45ed1738caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a2bdddf0462bd9347e324ebfeb387f04fc789977585d3d7febc6b45ed1738caa->leave($__internal_a2bdddf0462bd9347e324ebfeb387f04fc789977585d3d7febc6b45ed1738caa_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
