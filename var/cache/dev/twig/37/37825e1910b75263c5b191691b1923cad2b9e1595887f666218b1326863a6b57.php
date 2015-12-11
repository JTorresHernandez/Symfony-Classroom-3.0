<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7ae1bf16cf0123bd6963353d7f580998866905072177f8a2bc3c876aa72cde1a extends Twig_Template
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
        $__internal_ad4a9d5c9c2f6532ce66d8705a330ee49459bd0cfe029ed3c383dd5fadf07749 = $this->env->getExtension("native_profiler");
        $__internal_ad4a9d5c9c2f6532ce66d8705a330ee49459bd0cfe029ed3c383dd5fadf07749->enter($__internal_ad4a9d5c9c2f6532ce66d8705a330ee49459bd0cfe029ed3c383dd5fadf07749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ad4a9d5c9c2f6532ce66d8705a330ee49459bd0cfe029ed3c383dd5fadf07749->leave($__internal_ad4a9d5c9c2f6532ce66d8705a330ee49459bd0cfe029ed3c383dd5fadf07749_prof);

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
