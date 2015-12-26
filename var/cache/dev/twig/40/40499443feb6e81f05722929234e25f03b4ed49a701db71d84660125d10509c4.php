<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_435cf201ab3db7ba68b13b4f4941d285a650e1216f15312486c220b06a1130d2 extends Twig_Template
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
        $__internal_8fc78794f15073b018b30c57a2569437cfe84b3ce67dfbc64cb771d3a147e356 = $this->env->getExtension("native_profiler");
        $__internal_8fc78794f15073b018b30c57a2569437cfe84b3ce67dfbc64cb771d3a147e356->enter($__internal_8fc78794f15073b018b30c57a2569437cfe84b3ce67dfbc64cb771d3a147e356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8fc78794f15073b018b30c57a2569437cfe84b3ce67dfbc64cb771d3a147e356->leave($__internal_8fc78794f15073b018b30c57a2569437cfe84b3ce67dfbc64cb771d3a147e356_prof);

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
