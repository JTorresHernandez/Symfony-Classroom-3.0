<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d9f81ec00a237523fa75b35e1464a9f4a85342f5e41a02ed85aaf5c66380b685 extends Twig_Template
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
        $__internal_a77ae2347dcc13db567595b10f990a14d92483d050bf2849036b4514b559d0f6 = $this->env->getExtension("native_profiler");
        $__internal_a77ae2347dcc13db567595b10f990a14d92483d050bf2849036b4514b559d0f6->enter($__internal_a77ae2347dcc13db567595b10f990a14d92483d050bf2849036b4514b559d0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a77ae2347dcc13db567595b10f990a14d92483d050bf2849036b4514b559d0f6->leave($__internal_a77ae2347dcc13db567595b10f990a14d92483d050bf2849036b4514b559d0f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */