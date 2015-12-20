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
        $__internal_b1d9e18ee81f91956e6a5040207fcba652b3b9907cf57758b16ee53a97506025 = $this->env->getExtension("native_profiler");
        $__internal_b1d9e18ee81f91956e6a5040207fcba652b3b9907cf57758b16ee53a97506025->enter($__internal_b1d9e18ee81f91956e6a5040207fcba652b3b9907cf57758b16ee53a97506025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b1d9e18ee81f91956e6a5040207fcba652b3b9907cf57758b16ee53a97506025->leave($__internal_b1d9e18ee81f91956e6a5040207fcba652b3b9907cf57758b16ee53a97506025_prof);

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
