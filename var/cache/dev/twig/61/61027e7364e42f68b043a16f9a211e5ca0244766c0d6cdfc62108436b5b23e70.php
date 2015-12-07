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
        $__internal_b54dce5de39d70c7f34a759dbc650741b6dfd5e85332faedc585a459de2b18ea = $this->env->getExtension("native_profiler");
        $__internal_b54dce5de39d70c7f34a759dbc650741b6dfd5e85332faedc585a459de2b18ea->enter($__internal_b54dce5de39d70c7f34a759dbc650741b6dfd5e85332faedc585a459de2b18ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b54dce5de39d70c7f34a759dbc650741b6dfd5e85332faedc585a459de2b18ea->leave($__internal_b54dce5de39d70c7f34a759dbc650741b6dfd5e85332faedc585a459de2b18ea_prof);

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
