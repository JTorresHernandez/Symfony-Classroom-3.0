<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_98ca5613564d5a9de8f9ac613e43d385306bba82e6a3fac7e6e9195f5e95dd50 extends Twig_Template
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
        $__internal_49f7f33d53d0c3355172a269c7186bc9b824ab2a89e1e2d88f7170eef0b1f855 = $this->env->getExtension("native_profiler");
        $__internal_49f7f33d53d0c3355172a269c7186bc9b824ab2a89e1e2d88f7170eef0b1f855->enter($__internal_49f7f33d53d0c3355172a269c7186bc9b824ab2a89e1e2d88f7170eef0b1f855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_49f7f33d53d0c3355172a269c7186bc9b824ab2a89e1e2d88f7170eef0b1f855->leave($__internal_49f7f33d53d0c3355172a269c7186bc9b824ab2a89e1e2d88f7170eef0b1f855_prof);

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
