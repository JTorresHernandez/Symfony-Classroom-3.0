<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f13d51ef8b50f60b506d3d7c0d3b39da499642047426db8a6ca847b3af0ce012 extends Twig_Template
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
        $__internal_0f903bcd702fb991d5aa5d55b0804361916f8e442ba331af48db7537713626df = $this->env->getExtension("native_profiler");
        $__internal_0f903bcd702fb991d5aa5d55b0804361916f8e442ba331af48db7537713626df->enter($__internal_0f903bcd702fb991d5aa5d55b0804361916f8e442ba331af48db7537713626df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0f903bcd702fb991d5aa5d55b0804361916f8e442ba331af48db7537713626df->leave($__internal_0f903bcd702fb991d5aa5d55b0804361916f8e442ba331af48db7537713626df_prof);

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
