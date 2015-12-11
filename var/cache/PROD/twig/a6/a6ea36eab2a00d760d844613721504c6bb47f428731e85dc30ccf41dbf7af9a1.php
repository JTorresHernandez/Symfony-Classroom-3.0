<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5c4b7d0f10fcad4d464a0962b4c208333a13577bc79dfc08b2cec6e7cf5027b8 extends Twig_Template
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
        $__internal_402a5b9b3629cda08dc69e5a849d84ac0f9612b72767e1203d482fc057d49c83 = $this->env->getExtension("native_profiler");
        $__internal_402a5b9b3629cda08dc69e5a849d84ac0f9612b72767e1203d482fc057d49c83->enter($__internal_402a5b9b3629cda08dc69e5a849d84ac0f9612b72767e1203d482fc057d49c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_402a5b9b3629cda08dc69e5a849d84ac0f9612b72767e1203d482fc057d49c83->leave($__internal_402a5b9b3629cda08dc69e5a849d84ac0f9612b72767e1203d482fc057d49c83_prof);

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
