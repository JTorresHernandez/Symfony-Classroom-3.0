<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_610b532332a0f8cfe4a811abb5c00aeb30ea1bc61d1fe2b25b3a1667dcb3551e extends Twig_Template
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
        $__internal_2fddc18b99c739b22b6284bba1b865fbcea4f90f2493c03900e037dee88f3d75 = $this->env->getExtension("native_profiler");
        $__internal_2fddc18b99c739b22b6284bba1b865fbcea4f90f2493c03900e037dee88f3d75->enter($__internal_2fddc18b99c739b22b6284bba1b865fbcea4f90f2493c03900e037dee88f3d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2fddc18b99c739b22b6284bba1b865fbcea4f90f2493c03900e037dee88f3d75->leave($__internal_2fddc18b99c739b22b6284bba1b865fbcea4f90f2493c03900e037dee88f3d75_prof);

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
