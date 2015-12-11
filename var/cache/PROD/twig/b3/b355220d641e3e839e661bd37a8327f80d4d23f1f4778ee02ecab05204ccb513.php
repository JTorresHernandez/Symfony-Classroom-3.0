<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dfe1ba418f49d86625854c29636288460f12ce52dd3897e85f2c3690474ebd6d extends Twig_Template
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
        $__internal_7340bb6e8a64d11da8f6767bd81ab2bef510ff8c8a4f94a48dc00cc04a819d10 = $this->env->getExtension("native_profiler");
        $__internal_7340bb6e8a64d11da8f6767bd81ab2bef510ff8c8a4f94a48dc00cc04a819d10->enter($__internal_7340bb6e8a64d11da8f6767bd81ab2bef510ff8c8a4f94a48dc00cc04a819d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7340bb6e8a64d11da8f6767bd81ab2bef510ff8c8a4f94a48dc00cc04a819d10->leave($__internal_7340bb6e8a64d11da8f6767bd81ab2bef510ff8c8a4f94a48dc00cc04a819d10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
