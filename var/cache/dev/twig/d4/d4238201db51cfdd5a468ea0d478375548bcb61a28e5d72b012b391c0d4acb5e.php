<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5d8d96d8aeffdad4f37af8d1cea694d08d5d2240d0803e4ac98b975e64b7699c extends Twig_Template
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
        $__internal_16efe75e1644d6ba003b5061d69dac31d7b76b8e2538eeb2c8e3f508f66fcbf0 = $this->env->getExtension("native_profiler");
        $__internal_16efe75e1644d6ba003b5061d69dac31d7b76b8e2538eeb2c8e3f508f66fcbf0->enter($__internal_16efe75e1644d6ba003b5061d69dac31d7b76b8e2538eeb2c8e3f508f66fcbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_16efe75e1644d6ba003b5061d69dac31d7b76b8e2538eeb2c8e3f508f66fcbf0->leave($__internal_16efe75e1644d6ba003b5061d69dac31d7b76b8e2538eeb2c8e3f508f66fcbf0_prof);

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
