<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_45758c021ff2825769c6e0ed0c0ca10c2af430ff8e5078ab27748175b9ba6a03 extends Twig_Template
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
        $__internal_05f2ec04a49de0afcafb996941a8626ddac6014e2ba096e848351efd14710c86 = $this->env->getExtension("native_profiler");
        $__internal_05f2ec04a49de0afcafb996941a8626ddac6014e2ba096e848351efd14710c86->enter($__internal_05f2ec04a49de0afcafb996941a8626ddac6014e2ba096e848351efd14710c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_05f2ec04a49de0afcafb996941a8626ddac6014e2ba096e848351efd14710c86->leave($__internal_05f2ec04a49de0afcafb996941a8626ddac6014e2ba096e848351efd14710c86_prof);

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
