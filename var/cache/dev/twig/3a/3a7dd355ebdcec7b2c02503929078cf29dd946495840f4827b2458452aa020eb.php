<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_872e29c7050724261a18cd3d7f6894c0785e6628834e723e696319920efd0010 extends Twig_Template
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
        $__internal_6ade56827f54ad85c2b9f66b45aac6d1fc7d79ea4253b53b000d4e83e4013ef5 = $this->env->getExtension("native_profiler");
        $__internal_6ade56827f54ad85c2b9f66b45aac6d1fc7d79ea4253b53b000d4e83e4013ef5->enter($__internal_6ade56827f54ad85c2b9f66b45aac6d1fc7d79ea4253b53b000d4e83e4013ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6ade56827f54ad85c2b9f66b45aac6d1fc7d79ea4253b53b000d4e83e4013ef5->leave($__internal_6ade56827f54ad85c2b9f66b45aac6d1fc7d79ea4253b53b000d4e83e4013ef5_prof);

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
