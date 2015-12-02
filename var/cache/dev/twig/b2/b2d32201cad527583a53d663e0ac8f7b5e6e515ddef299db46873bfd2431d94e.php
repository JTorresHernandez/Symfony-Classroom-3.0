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
        $__internal_a997f13f02252c9bdbaea07613eb5d5a3a8c99dc2adb702049f7f9598b249599 = $this->env->getExtension("native_profiler");
        $__internal_a997f13f02252c9bdbaea07613eb5d5a3a8c99dc2adb702049f7f9598b249599->enter($__internal_a997f13f02252c9bdbaea07613eb5d5a3a8c99dc2adb702049f7f9598b249599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a997f13f02252c9bdbaea07613eb5d5a3a8c99dc2adb702049f7f9598b249599->leave($__internal_a997f13f02252c9bdbaea07613eb5d5a3a8c99dc2adb702049f7f9598b249599_prof);

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
