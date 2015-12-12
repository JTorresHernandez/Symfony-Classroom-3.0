<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_11bf3035388e03e8417ab3346a3b86411eb927c40f8e2372ee9119614d13e13c extends Twig_Template
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
        $__internal_9624ebbd60968c9ec5016455b354317ce91d580bab529d313029e836c811245e = $this->env->getExtension("native_profiler");
        $__internal_9624ebbd60968c9ec5016455b354317ce91d580bab529d313029e836c811245e->enter($__internal_9624ebbd60968c9ec5016455b354317ce91d580bab529d313029e836c811245e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9624ebbd60968c9ec5016455b354317ce91d580bab529d313029e836c811245e->leave($__internal_9624ebbd60968c9ec5016455b354317ce91d580bab529d313029e836c811245e_prof);

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
