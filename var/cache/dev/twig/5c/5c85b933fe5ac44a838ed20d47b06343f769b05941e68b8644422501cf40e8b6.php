<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d4ccbb284a6424f0437fa1e9f3a65c74acf661cc953856a35757753850b4c928 extends Twig_Template
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
        $__internal_50b515440cbebd4a5afc9f668805328cb0885de6b2337319c8e5bd7f2302e465 = $this->env->getExtension("native_profiler");
        $__internal_50b515440cbebd4a5afc9f668805328cb0885de6b2337319c8e5bd7f2302e465->enter($__internal_50b515440cbebd4a5afc9f668805328cb0885de6b2337319c8e5bd7f2302e465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_50b515440cbebd4a5afc9f668805328cb0885de6b2337319c8e5bd7f2302e465->leave($__internal_50b515440cbebd4a5afc9f668805328cb0885de6b2337319c8e5bd7f2302e465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
