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
        $__internal_9357d940ba5c2282dea46ab618f6e70c05c0ca1f1677d0472deb4119febfa7dc = $this->env->getExtension("native_profiler");
        $__internal_9357d940ba5c2282dea46ab618f6e70c05c0ca1f1677d0472deb4119febfa7dc->enter($__internal_9357d940ba5c2282dea46ab618f6e70c05c0ca1f1677d0472deb4119febfa7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9357d940ba5c2282dea46ab618f6e70c05c0ca1f1677d0472deb4119febfa7dc->leave($__internal_9357d940ba5c2282dea46ab618f6e70c05c0ca1f1677d0472deb4119febfa7dc_prof);

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
