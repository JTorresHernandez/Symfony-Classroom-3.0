<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_779e083dcc1a65886201db92c1fb3fdbf0fbfe91e6c7e7844e7763252a6eaa8b extends Twig_Template
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
        $__internal_e81ab281b698b2831b841e7b2f59302a0fbf72f4e387b943b8c8870ccf84bd87 = $this->env->getExtension("native_profiler");
        $__internal_e81ab281b698b2831b841e7b2f59302a0fbf72f4e387b943b8c8870ccf84bd87->enter($__internal_e81ab281b698b2831b841e7b2f59302a0fbf72f4e387b943b8c8870ccf84bd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e81ab281b698b2831b841e7b2f59302a0fbf72f4e387b943b8c8870ccf84bd87->leave($__internal_e81ab281b698b2831b841e7b2f59302a0fbf72f4e387b943b8c8870ccf84bd87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
