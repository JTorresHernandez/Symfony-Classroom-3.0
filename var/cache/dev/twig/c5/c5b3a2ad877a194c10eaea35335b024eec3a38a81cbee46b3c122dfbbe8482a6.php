<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b9c85a59eef1bba4fde9916d31b02102202ade5f8354d5ecd1cba6da769049fa extends Twig_Template
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
        $__internal_c8ee060632c351926eab7fbafa6f17a8b25ea94ad92fd75918d35a18501cf583 = $this->env->getExtension("native_profiler");
        $__internal_c8ee060632c351926eab7fbafa6f17a8b25ea94ad92fd75918d35a18501cf583->enter($__internal_c8ee060632c351926eab7fbafa6f17a8b25ea94ad92fd75918d35a18501cf583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c8ee060632c351926eab7fbafa6f17a8b25ea94ad92fd75918d35a18501cf583->leave($__internal_c8ee060632c351926eab7fbafa6f17a8b25ea94ad92fd75918d35a18501cf583_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
