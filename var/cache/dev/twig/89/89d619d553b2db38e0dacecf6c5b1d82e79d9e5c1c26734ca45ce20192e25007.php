<?php

/* :admin/index:index.html.twig */
class __TwigTemplate_90d17780bbaebf6e7246c718c5f193e9540846ff1040d475697c2f30d3a66263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":admin:admin_layout.html.twig", ":admin/index:index.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":admin:admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad827b1f5750acff541884db9a2fc0aa1a5212e525ee95536af776e6274684d8 = $this->env->getExtension("native_profiler");
        $__internal_ad827b1f5750acff541884db9a2fc0aa1a5212e525ee95536af776e6274684d8->enter($__internal_ad827b1f5750acff541884db9a2fc0aa1a5212e525ee95536af776e6274684d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad827b1f5750acff541884db9a2fc0aa1a5212e525ee95536af776e6274684d8->leave($__internal_ad827b1f5750acff541884db9a2fc0aa1a5212e525ee95536af776e6274684d8_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_d8dd84f3f12b31a6af151f5f564fb15668d827a57664aed8b601ed8a126b16d4 = $this->env->getExtension("native_profiler");
        $__internal_d8dd84f3f12b31a6af151f5f564fb15668d827a57664aed8b601ed8a126b16d4->enter($__internal_d8dd84f3f12b31a6af151f5f564fb15668d827a57664aed8b601ed8a126b16d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_d8dd84f3f12b31a6af151f5f564fb15668d827a57664aed8b601ed8a126b16d4->leave($__internal_d8dd84f3f12b31a6af151f5f564fb15668d827a57664aed8b601ed8a126b16d4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd414fc0fc61ef5e03f22b07825ef4c9d19d35c43a2d0dd41573b71cf920cab8 = $this->env->getExtension("native_profiler");
        $__internal_cd414fc0fc61ef5e03f22b07825ef4c9d19d35c43a2d0dd41573b71cf920cab8->enter($__internal_cd414fc0fc61ef5e03f22b07825ef4c9d19d35c43a2d0dd41573b71cf920cab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_cd414fc0fc61ef5e03f22b07825ef4c9d19d35c43a2d0dd41573b71cf920cab8->leave($__internal_cd414fc0fc61ef5e03f22b07825ef4c9d19d35c43a2d0dd41573b71cf920cab8_prof);

    }

    public function getTemplateName()
    {
        return ":admin/index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':admin:admin_layout.html.twig' %}*/
/* */
/* {% block headTitle %}Dashboard{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <p>Welcome to dashboard</p>*/
/*     </div>*/
/* {% endblock %}*/
