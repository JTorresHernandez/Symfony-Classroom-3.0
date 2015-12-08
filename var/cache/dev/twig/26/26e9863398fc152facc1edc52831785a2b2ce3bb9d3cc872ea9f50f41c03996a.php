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
        $__internal_1fa316a60d4bf1a92296f2db43cbc985729a5355750786dfdafdc0deee433748 = $this->env->getExtension("native_profiler");
        $__internal_1fa316a60d4bf1a92296f2db43cbc985729a5355750786dfdafdc0deee433748->enter($__internal_1fa316a60d4bf1a92296f2db43cbc985729a5355750786dfdafdc0deee433748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1fa316a60d4bf1a92296f2db43cbc985729a5355750786dfdafdc0deee433748->leave($__internal_1fa316a60d4bf1a92296f2db43cbc985729a5355750786dfdafdc0deee433748_prof);

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
