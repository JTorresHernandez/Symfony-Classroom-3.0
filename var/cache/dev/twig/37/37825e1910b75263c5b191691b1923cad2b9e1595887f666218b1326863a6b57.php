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
        $__internal_c77e577132c8ef969b0f0b6e7b0561ae49a833c4acb3fd8c8d557e5b1bff0a23 = $this->env->getExtension("native_profiler");
        $__internal_c77e577132c8ef969b0f0b6e7b0561ae49a833c4acb3fd8c8d557e5b1bff0a23->enter($__internal_c77e577132c8ef969b0f0b6e7b0561ae49a833c4acb3fd8c8d557e5b1bff0a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c77e577132c8ef969b0f0b6e7b0561ae49a833c4acb3fd8c8d557e5b1bff0a23->leave($__internal_c77e577132c8ef969b0f0b6e7b0561ae49a833c4acb3fd8c8d557e5b1bff0a23_prof);

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
