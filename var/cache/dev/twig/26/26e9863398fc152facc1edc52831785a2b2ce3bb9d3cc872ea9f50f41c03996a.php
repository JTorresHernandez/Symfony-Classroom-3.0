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
        $__internal_61628092682121cc6f33b5e0aea4418188c461cc14732ab6c29532526880bd23 = $this->env->getExtension("native_profiler");
        $__internal_61628092682121cc6f33b5e0aea4418188c461cc14732ab6c29532526880bd23->enter($__internal_61628092682121cc6f33b5e0aea4418188c461cc14732ab6c29532526880bd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_61628092682121cc6f33b5e0aea4418188c461cc14732ab6c29532526880bd23->leave($__internal_61628092682121cc6f33b5e0aea4418188c461cc14732ab6c29532526880bd23_prof);

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
