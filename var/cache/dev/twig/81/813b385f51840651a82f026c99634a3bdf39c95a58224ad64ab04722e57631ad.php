<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8617052a0a9a27757a1fd03a265afe7f195f4a6e2541e7f0626d177c401356fc extends Twig_Template
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
        $__internal_45609bf8d8e90b8eff5f9f8b1d0106d3d8a57e416b3471467013e6af3538418a = $this->env->getExtension("native_profiler");
        $__internal_45609bf8d8e90b8eff5f9f8b1d0106d3d8a57e416b3471467013e6af3538418a->enter($__internal_45609bf8d8e90b8eff5f9f8b1d0106d3d8a57e416b3471467013e6af3538418a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_45609bf8d8e90b8eff5f9f8b1d0106d3d8a57e416b3471467013e6af3538418a->leave($__internal_45609bf8d8e90b8eff5f9f8b1d0106d3d8a57e416b3471467013e6af3538418a_prof);

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
