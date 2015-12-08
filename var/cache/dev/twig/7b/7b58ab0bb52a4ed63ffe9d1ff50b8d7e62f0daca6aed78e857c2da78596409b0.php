<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f36803fcbc2cfbdcadc187151539b65141ef7ec1738829c80a682d113761878d extends Twig_Template
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
        $__internal_d7715c7e0e374800d1c2811727f022acddaa45a7a405ab0dcd7dfa0f646370b6 = $this->env->getExtension("native_profiler");
        $__internal_d7715c7e0e374800d1c2811727f022acddaa45a7a405ab0dcd7dfa0f646370b6->enter($__internal_d7715c7e0e374800d1c2811727f022acddaa45a7a405ab0dcd7dfa0f646370b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d7715c7e0e374800d1c2811727f022acddaa45a7a405ab0dcd7dfa0f646370b6->leave($__internal_d7715c7e0e374800d1c2811727f022acddaa45a7a405ab0dcd7dfa0f646370b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
