<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4abe5911e2656ebe01d5afeb8d79e19cbb9743f91c90b5dc5b048b3de5babd66 extends Twig_Template
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
        $__internal_e668c8582cc9091cd19f15f1c224715ff570cf5f428da9dce460465a9688e004 = $this->env->getExtension("native_profiler");
        $__internal_e668c8582cc9091cd19f15f1c224715ff570cf5f428da9dce460465a9688e004->enter($__internal_e668c8582cc9091cd19f15f1c224715ff570cf5f428da9dce460465a9688e004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e668c8582cc9091cd19f15f1c224715ff570cf5f428da9dce460465a9688e004->leave($__internal_e668c8582cc9091cd19f15f1c224715ff570cf5f428da9dce460465a9688e004_prof);

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
