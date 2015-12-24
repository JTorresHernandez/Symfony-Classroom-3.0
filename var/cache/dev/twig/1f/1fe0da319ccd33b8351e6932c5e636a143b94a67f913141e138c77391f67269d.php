<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_95afbbd1632310b149f64e90d21dbb0d889242415c5f1ca3f487b4de7c3c7f3b extends Twig_Template
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
        $__internal_a61cfe7e6249ca11b91cedb37d7e1bbe26e20136d6fffc28ed89b4671018389e = $this->env->getExtension("native_profiler");
        $__internal_a61cfe7e6249ca11b91cedb37d7e1bbe26e20136d6fffc28ed89b4671018389e->enter($__internal_a61cfe7e6249ca11b91cedb37d7e1bbe26e20136d6fffc28ed89b4671018389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a61cfe7e6249ca11b91cedb37d7e1bbe26e20136d6fffc28ed89b4671018389e->leave($__internal_a61cfe7e6249ca11b91cedb37d7e1bbe26e20136d6fffc28ed89b4671018389e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
