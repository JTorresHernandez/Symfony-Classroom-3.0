<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bb7dd4a26eff24ecd8dd82a754c6a826f719be09f84329d84e1d71990ca5d99c extends Twig_Template
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
        $__internal_b14257606f694cc9703f926996b8ea00f2ad0a5211f84116bd2b1c7355c2325a = $this->env->getExtension("native_profiler");
        $__internal_b14257606f694cc9703f926996b8ea00f2ad0a5211f84116bd2b1c7355c2325a->enter($__internal_b14257606f694cc9703f926996b8ea00f2ad0a5211f84116bd2b1c7355c2325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b14257606f694cc9703f926996b8ea00f2ad0a5211f84116bd2b1c7355c2325a->leave($__internal_b14257606f694cc9703f926996b8ea00f2ad0a5211f84116bd2b1c7355c2325a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
