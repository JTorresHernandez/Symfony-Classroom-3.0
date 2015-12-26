<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_161353963ab2d75220414d3f6258c5a2328f8d4b8b6d278789d6eab91157124c extends Twig_Template
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
        $__internal_1962dfaf5ad2a962f7badda5f7124ab491c08337a8b0c7be526b3baa641355ee = $this->env->getExtension("native_profiler");
        $__internal_1962dfaf5ad2a962f7badda5f7124ab491c08337a8b0c7be526b3baa641355ee->enter($__internal_1962dfaf5ad2a962f7badda5f7124ab491c08337a8b0c7be526b3baa641355ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1962dfaf5ad2a962f7badda5f7124ab491c08337a8b0c7be526b3baa641355ee->leave($__internal_1962dfaf5ad2a962f7badda5f7124ab491c08337a8b0c7be526b3baa641355ee_prof);

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
