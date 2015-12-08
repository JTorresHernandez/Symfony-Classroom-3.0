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
        $__internal_69cde5066db7d67ec6aedc129a7dd0f24cffe2d68f4c76b059947b0da5a51642 = $this->env->getExtension("native_profiler");
        $__internal_69cde5066db7d67ec6aedc129a7dd0f24cffe2d68f4c76b059947b0da5a51642->enter($__internal_69cde5066db7d67ec6aedc129a7dd0f24cffe2d68f4c76b059947b0da5a51642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_69cde5066db7d67ec6aedc129a7dd0f24cffe2d68f4c76b059947b0da5a51642->leave($__internal_69cde5066db7d67ec6aedc129a7dd0f24cffe2d68f4c76b059947b0da5a51642_prof);

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
