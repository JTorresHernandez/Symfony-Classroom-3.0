<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d03979c8554804ce0805590c29c361c0da70b48846f1585dccbb50e5a29c7f09 extends Twig_Template
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
        $__internal_07923f72445031cf8b13396f4b18da4093d1d64e7e3b311ab018b7b413dd2e79 = $this->env->getExtension("native_profiler");
        $__internal_07923f72445031cf8b13396f4b18da4093d1d64e7e3b311ab018b7b413dd2e79->enter($__internal_07923f72445031cf8b13396f4b18da4093d1d64e7e3b311ab018b7b413dd2e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_07923f72445031cf8b13396f4b18da4093d1d64e7e3b311ab018b7b413dd2e79->leave($__internal_07923f72445031cf8b13396f4b18da4093d1d64e7e3b311ab018b7b413dd2e79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
