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
        $__internal_3e278ecc89ef946dadff72b18a68301a531cf8f1d3737300593b4b1044aafd85 = $this->env->getExtension("native_profiler");
        $__internal_3e278ecc89ef946dadff72b18a68301a531cf8f1d3737300593b4b1044aafd85->enter($__internal_3e278ecc89ef946dadff72b18a68301a531cf8f1d3737300593b4b1044aafd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3e278ecc89ef946dadff72b18a68301a531cf8f1d3737300593b4b1044aafd85->leave($__internal_3e278ecc89ef946dadff72b18a68301a531cf8f1d3737300593b4b1044aafd85_prof);

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
