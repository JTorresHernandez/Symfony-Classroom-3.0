<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_05f6c5f58ecb0e014d8506ba0fd1b55c512706e12d45261e33e30b495acfab5c extends Twig_Template
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
        $__internal_0b50a46fd21c36d0311de60d3a976b9b122c96d34c7fb93beee81629e3bb057a = $this->env->getExtension("native_profiler");
        $__internal_0b50a46fd21c36d0311de60d3a976b9b122c96d34c7fb93beee81629e3bb057a->enter($__internal_0b50a46fd21c36d0311de60d3a976b9b122c96d34c7fb93beee81629e3bb057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0b50a46fd21c36d0311de60d3a976b9b122c96d34c7fb93beee81629e3bb057a->leave($__internal_0b50a46fd21c36d0311de60d3a976b9b122c96d34c7fb93beee81629e3bb057a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
