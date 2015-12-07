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
        $__internal_0b5c4bd35a59f1376abfa6e5cdadb10a3c78260678364ae7dbfe59e0f0213777 = $this->env->getExtension("native_profiler");
        $__internal_0b5c4bd35a59f1376abfa6e5cdadb10a3c78260678364ae7dbfe59e0f0213777->enter($__internal_0b5c4bd35a59f1376abfa6e5cdadb10a3c78260678364ae7dbfe59e0f0213777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0b5c4bd35a59f1376abfa6e5cdadb10a3c78260678364ae7dbfe59e0f0213777->leave($__internal_0b5c4bd35a59f1376abfa6e5cdadb10a3c78260678364ae7dbfe59e0f0213777_prof);

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
