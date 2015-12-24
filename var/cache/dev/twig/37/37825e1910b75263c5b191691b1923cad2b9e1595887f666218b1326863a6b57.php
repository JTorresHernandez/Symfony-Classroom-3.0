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
        $__internal_bcb5b04b3e6e98f262d9ef040b463fdc17815be2d32b858f874ddcdd03513a68 = $this->env->getExtension("native_profiler");
        $__internal_bcb5b04b3e6e98f262d9ef040b463fdc17815be2d32b858f874ddcdd03513a68->enter($__internal_bcb5b04b3e6e98f262d9ef040b463fdc17815be2d32b858f874ddcdd03513a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bcb5b04b3e6e98f262d9ef040b463fdc17815be2d32b858f874ddcdd03513a68->leave($__internal_bcb5b04b3e6e98f262d9ef040b463fdc17815be2d32b858f874ddcdd03513a68_prof);

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
