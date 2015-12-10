<?php

/* ::base.html.twig */
class __TwigTemplate_963509cee2ef0677899e7928568356b0f85172ec592b3817801279f000df3200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0b5c91b90d4ded4495a03dcdd53065fb7591843a20a390b831680288dcb9f2b = $this->env->getExtension("native_profiler");
        $__internal_a0b5c91b90d4ded4495a03dcdd53065fb7591843a20a390b831680288dcb9f2b->enter($__internal_a0b5c91b90d4ded4495a03dcdd53065fb7591843a20a390b831680288dcb9f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">Symfony Classroom</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li></li>
                <li></li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
                <div class=\"navbar-form navbar-right\">
                ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 53
            echo "                    <a class=\"btn btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Sign out</a>
                    <a class=\"btn btn-danger\" href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 56
            echo "                    ";
            echo twig_include($this->env, $context, "FOSUserBundle:Security:horitzontal-login.html.twig");
            echo "

                ";
        }
        // line 59
        echo "                </div>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>";
        // line 69
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</h1>
    </div>
</div>

<div class=\"container\">
    <ul>
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 76
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </ul>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "        </div>
        <div class=\"col-md-4\">
            ";
        // line 87
        $this->displayBlock('sidebar', $context, $blocks);
        // line 90
        echo "        </div>
    </div>
    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"/js/jquery.min.js\"><\\/script>')</script>
</body>
</html>";
        
        $__internal_a0b5c91b90d4ded4495a03dcdd53065fb7591843a20a390b831680288dcb9f2b->leave($__internal_a0b5c91b90d4ded4495a03dcdd53065fb7591843a20a390b831680288dcb9f2b_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b0758b588500457d31e72d6c3de7c24576621bf0d9a6494c19bca47bb708414 = $this->env->getExtension("native_profiler");
        $__internal_3b0758b588500457d31e72d6c3de7c24576621bf0d9a6494c19bca47bb708414->enter($__internal_3b0758b588500457d31e72d6c3de7c24576621bf0d9a6494c19bca47bb708414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3b0758b588500457d31e72d6c3de7c24576621bf0d9a6494c19bca47bb708414->leave($__internal_3b0758b588500457d31e72d6c3de7c24576621bf0d9a6494c19bca47bb708414_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff5c8c2e01caafe1bac8a4496e87861cb20cd12b873eb6ea3f76fb5af6f0cec8 = $this->env->getExtension("native_profiler");
        $__internal_ff5c8c2e01caafe1bac8a4496e87861cb20cd12b873eb6ea3f76fb5af6f0cec8->enter($__internal_ff5c8c2e01caafe1bac8a4496e87861cb20cd12b873eb6ea3f76fb5af6f0cec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/css/jumbotron.css\" />
        <link rel=\"stylesheet\" href=\"/css/custom.css\" />
    ";
        
        $__internal_ff5c8c2e01caafe1bac8a4496e87861cb20cd12b873eb6ea3f76fb5af6f0cec8->leave($__internal_ff5c8c2e01caafe1bac8a4496e87861cb20cd12b873eb6ea3f76fb5af6f0cec8_prof);

    }

    // line 69
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_e3153375d88e094e36ae035b186d5fdfe7851633a3d555f62143f5d7c49e3729 = $this->env->getExtension("native_profiler");
        $__internal_e3153375d88e094e36ae035b186d5fdfe7851633a3d555f62143f5d7c49e3729->enter($__internal_e3153375d88e094e36ae035b186d5fdfe7851633a3d555f62143f5d7c49e3729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Session 7 - Doctrine";
        
        $__internal_e3153375d88e094e36ae035b186d5fdfe7851633a3d555f62143f5d7c49e3729->leave($__internal_e3153375d88e094e36ae035b186d5fdfe7851633a3d555f62143f5d7c49e3729_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_b63e2ff55aee8edbd70da9ecd71f96d825f90856c161687bc3b5d8c324813b55 = $this->env->getExtension("native_profiler");
        $__internal_b63e2ff55aee8edbd70da9ecd71f96d825f90856c161687bc3b5d8c324813b55->enter($__internal_b63e2ff55aee8edbd70da9ecd71f96d825f90856c161687bc3b5d8c324813b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b63e2ff55aee8edbd70da9ecd71f96d825f90856c161687bc3b5d8c324813b55->leave($__internal_b63e2ff55aee8edbd70da9ecd71f96d825f90856c161687bc3b5d8c324813b55_prof);

    }

    // line 87
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6c2748fd29306f5b035ec0f10d8bb7fef1060f53b3df79a8a9d5afa38c10a63f = $this->env->getExtension("native_profiler");
        $__internal_6c2748fd29306f5b035ec0f10d8bb7fef1060f53b3df79a8a9d5afa38c10a63f->enter($__internal_6c2748fd29306f5b035ec0f10d8bb7fef1060f53b3df79a8a9d5afa38c10a63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 88
        echo "                <a class=\"btn btn-primary\" style=\"font-size:x-large;width: 100%\" href=\"";
        echo $this->env->getExtension('routing')->getPath("app_article_new");
        echo "\">Submit a new article</a>
            ";
        
        $__internal_6c2748fd29306f5b035ec0f10d8bb7fef1060f53b3df79a8a9d5afa38c10a63f->leave($__internal_6c2748fd29306f5b035ec0f10d8bb7fef1060f53b3df79a8a9d5afa38c10a63f_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f5172b453633c2fac3cfdc8be5c15231d5c9218dde2846be700132763f9f306 = $this->env->getExtension("native_profiler");
        $__internal_5f5172b453633c2fac3cfdc8be5c15231d5c9218dde2846be700132763f9f306->enter($__internal_5f5172b453633c2fac3cfdc8be5c15231d5c9218dde2846be700132763f9f306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "<script src=\"/js/bootstrap.min.js\"></script>
";
        
        $__internal_5f5172b453633c2fac3cfdc8be5c15231d5c9218dde2846be700132763f9f306->leave($__internal_5f5172b453633c2fac3cfdc8be5c15231d5c9218dde2846be700132763f9f306_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 100,  252 => 99,  242 => 88,  236 => 87,  225 => 84,  213 => 69,  203 => 15,  197 => 14,  186 => 11,  172 => 102,  170 => 99,  160 => 90,  158 => 87,  154 => 85,  152 => 84,  144 => 78,  135 => 76,  131 => 75,  122 => 69,  110 => 59,  103 => 56,  96 => 54,  91 => 53,  89 => 52,  74 => 40,  51 => 20,  48 => 19,  45 => 14,  40 => 11,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* */
/*     {# This must be rewritten for symfony 3#}*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="/css/bootstrap.min.css" />*/
/*         <link rel="stylesheet" href="/css/jumbotron.css" />*/
/*         <link rel="stylesheet" href="/css/custom.css" />*/
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('app_article_articles') }}">Symfony Classroom</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li></li>*/
/*                 <li></li>*/
/*             </ul>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <div class="navbar-form navbar-right">*/
/*                 {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                     <a class="btn btn-success" href="{{ path('fos_user_security_logout') }}">Sign out</a>*/
/*                     <a class="btn btn-danger" href="{{ path('fos_user_profile_show') }}">{{ app.user.username }}</a>*/
/*                 {% else %}*/
/*                     {{ include('FOSUserBundle:Security:horitzontal-login.html.twig') }}*/
/* */
/*                 {% endif %}*/
/*                 </div>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/* */
/*     </div>*/
/* </nav>*/
/* */
/* <!-- Main jumbotron for a primary marketing message or call to action -->*/
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <h1>{% block headTitle %}Session 7 - Doctrine{% endblock %}</h1>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <ul>*/
/*         {% for message in app.session.flashBag.get('messages') %}*/
/*             <li>{{ message }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% block sidebar %}*/
/*                 <a class="btn btn-primary" style="font-size:x-large;width: 100%" href="{{ path('app_article_new') }}">Submit a new article</a>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/*     <hr>*/
/*     <footer>*/
/*         <p class="text-right">&copy; 2015 Ismael Trascastro</p>*/
/*     </footer>*/
/* </div> <!-- /container -->*/
/* */
/* {# This must be rewritten for symfony 3#}*/
/* {% block javascripts %}*/
/* <script src="/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>*/
/* </body>*/
/* </html>*/
