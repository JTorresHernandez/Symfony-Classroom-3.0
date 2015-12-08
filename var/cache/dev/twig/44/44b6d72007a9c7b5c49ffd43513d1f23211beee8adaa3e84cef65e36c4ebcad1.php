<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ea5a8aced14fd7580033457409de670c3a01ca9260740349712b1972beed12b9 extends Twig_Template
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
        $__internal_ebbef4f7e264ce571a42e7690ab4206d2a594cfb24d3f78fc16a3725d6fe6e09 = $this->env->getExtension("native_profiler");
        $__internal_ebbef4f7e264ce571a42e7690ab4206d2a594cfb24d3f78fc16a3725d6fe6e09->enter($__internal_ebbef4f7e264ce571a42e7690ab4206d2a594cfb24d3f78fc16a3725d6fe6e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ebbef4f7e264ce571a42e7690ab4206d2a594cfb24d3f78fc16a3725d6fe6e09->leave($__internal_ebbef4f7e264ce571a42e7690ab4206d2a594cfb24d3f78fc16a3725d6fe6e09_prof);

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
