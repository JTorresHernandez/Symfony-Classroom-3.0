<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a25c7977a179d20987a9ffd216060e1681d61f7d7071870544a1aaff80a46648 extends Twig_Template
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
        $__internal_c10df1233bb74fed71638a41605e88fecdee7b980aac056cfd7824e3d493e2fe = $this->env->getExtension("native_profiler");
        $__internal_c10df1233bb74fed71638a41605e88fecdee7b980aac056cfd7824e3d493e2fe->enter($__internal_c10df1233bb74fed71638a41605e88fecdee7b980aac056cfd7824e3d493e2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c10df1233bb74fed71638a41605e88fecdee7b980aac056cfd7824e3d493e2fe->leave($__internal_c10df1233bb74fed71638a41605e88fecdee7b980aac056cfd7824e3d493e2fe_prof);

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
