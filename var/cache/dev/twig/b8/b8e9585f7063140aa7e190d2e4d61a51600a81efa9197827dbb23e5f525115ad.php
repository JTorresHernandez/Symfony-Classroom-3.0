<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1e3fb6f442cb482322739ad205719701e1a6afbfb42723fac22a593a31144445 extends Twig_Template
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
        $__internal_3c9e627a96d8aeeba3ccaa043bae7e8a1b80ef0bc2e380bdbd3f80bc815f74f2 = $this->env->getExtension("native_profiler");
        $__internal_3c9e627a96d8aeeba3ccaa043bae7e8a1b80ef0bc2e380bdbd3f80bc815f74f2->enter($__internal_3c9e627a96d8aeeba3ccaa043bae7e8a1b80ef0bc2e380bdbd3f80bc815f74f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3c9e627a96d8aeeba3ccaa043bae7e8a1b80ef0bc2e380bdbd3f80bc815f74f2->leave($__internal_3c9e627a96d8aeeba3ccaa043bae7e8a1b80ef0bc2e380bdbd3f80bc815f74f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
