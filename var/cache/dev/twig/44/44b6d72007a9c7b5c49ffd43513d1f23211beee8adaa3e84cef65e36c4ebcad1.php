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
        $__internal_038bfa876534850807ec0702f852645f69c6c668f2678aaf8b36ad009358fa54 = $this->env->getExtension("native_profiler");
        $__internal_038bfa876534850807ec0702f852645f69c6c668f2678aaf8b36ad009358fa54->enter($__internal_038bfa876534850807ec0702f852645f69c6c668f2678aaf8b36ad009358fa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_038bfa876534850807ec0702f852645f69c6c668f2678aaf8b36ad009358fa54->leave($__internal_038bfa876534850807ec0702f852645f69c6c668f2678aaf8b36ad009358fa54_prof);

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
