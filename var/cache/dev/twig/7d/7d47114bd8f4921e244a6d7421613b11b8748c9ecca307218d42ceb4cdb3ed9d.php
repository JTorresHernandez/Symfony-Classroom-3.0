<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_aacbe06cae2be0afa8c6d51362284d5e44b4be52ca06fd053a546c0c6d3899eb extends Twig_Template
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
        $__internal_097e0318ae3462160f8c5c886aa9b2fda1ae41756f6f30e2e4fe9031350cca9b = $this->env->getExtension("native_profiler");
        $__internal_097e0318ae3462160f8c5c886aa9b2fda1ae41756f6f30e2e4fe9031350cca9b->enter($__internal_097e0318ae3462160f8c5c886aa9b2fda1ae41756f6f30e2e4fe9031350cca9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_097e0318ae3462160f8c5c886aa9b2fda1ae41756f6f30e2e4fe9031350cca9b->leave($__internal_097e0318ae3462160f8c5c886aa9b2fda1ae41756f6f30e2e4fe9031350cca9b_prof);

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
