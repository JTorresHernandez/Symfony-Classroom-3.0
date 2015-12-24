<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_394493af975486d197d5ddf93446e9314049186b2866e141bf4bae8b9388da5d extends Twig_Template
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
        $__internal_bd3e6d4cb591be4eb7eec62e78cda39a1934c5936323c4889bf7a3a14f72cbe3 = $this->env->getExtension("native_profiler");
        $__internal_bd3e6d4cb591be4eb7eec62e78cda39a1934c5936323c4889bf7a3a14f72cbe3->enter($__internal_bd3e6d4cb591be4eb7eec62e78cda39a1934c5936323c4889bf7a3a14f72cbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bd3e6d4cb591be4eb7eec62e78cda39a1934c5936323c4889bf7a3a14f72cbe3->leave($__internal_bd3e6d4cb591be4eb7eec62e78cda39a1934c5936323c4889bf7a3a14f72cbe3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
