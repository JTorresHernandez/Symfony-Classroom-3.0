<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_dccd10daa988c6d1fb4aa95fc3dda41aa0a84d8d91a83d7836b317e380012d65 extends Twig_Template
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
        $__internal_e80727229d51f37d3df836ee9690c061e0cf5f736e82bd79cddf855697d23fab = $this->env->getExtension("native_profiler");
        $__internal_e80727229d51f37d3df836ee9690c061e0cf5f736e82bd79cddf855697d23fab->enter($__internal_e80727229d51f37d3df836ee9690c061e0cf5f736e82bd79cddf855697d23fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e80727229d51f37d3df836ee9690c061e0cf5f736e82bd79cddf855697d23fab->leave($__internal_e80727229d51f37d3df836ee9690c061e0cf5f736e82bd79cddf855697d23fab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
