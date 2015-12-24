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
        $__internal_00b1a5348bf00edc421f5c1fd48b23710bd1cbacef338c614381409bfae71896 = $this->env->getExtension("native_profiler");
        $__internal_00b1a5348bf00edc421f5c1fd48b23710bd1cbacef338c614381409bfae71896->enter($__internal_00b1a5348bf00edc421f5c1fd48b23710bd1cbacef338c614381409bfae71896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_00b1a5348bf00edc421f5c1fd48b23710bd1cbacef338c614381409bfae71896->leave($__internal_00b1a5348bf00edc421f5c1fd48b23710bd1cbacef338c614381409bfae71896_prof);

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
