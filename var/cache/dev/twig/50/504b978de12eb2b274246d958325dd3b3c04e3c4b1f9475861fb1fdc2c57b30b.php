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
        $__internal_bd12ea13624ee2183072f675fea8ab37fd0fef8a7806d128ef60d52154b53da9 = $this->env->getExtension("native_profiler");
        $__internal_bd12ea13624ee2183072f675fea8ab37fd0fef8a7806d128ef60d52154b53da9->enter($__internal_bd12ea13624ee2183072f675fea8ab37fd0fef8a7806d128ef60d52154b53da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bd12ea13624ee2183072f675fea8ab37fd0fef8a7806d128ef60d52154b53da9->leave($__internal_bd12ea13624ee2183072f675fea8ab37fd0fef8a7806d128ef60d52154b53da9_prof);

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
