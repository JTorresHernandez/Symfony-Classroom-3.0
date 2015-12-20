<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_392cc290fffdbadb95ba9ea7bbc3f7826826485ef3d7179fc34076645d7657c3 extends Twig_Template
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
        $__internal_bf99a33b21f4136dd119f0fd4bc19358f07493e6577f53c327b0fd49ceaea917 = $this->env->getExtension("native_profiler");
        $__internal_bf99a33b21f4136dd119f0fd4bc19358f07493e6577f53c327b0fd49ceaea917->enter($__internal_bf99a33b21f4136dd119f0fd4bc19358f07493e6577f53c327b0fd49ceaea917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bf99a33b21f4136dd119f0fd4bc19358f07493e6577f53c327b0fd49ceaea917->leave($__internal_bf99a33b21f4136dd119f0fd4bc19358f07493e6577f53c327b0fd49ceaea917_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
