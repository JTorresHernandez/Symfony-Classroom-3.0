<?php

/* :admin:admin_layout.html.twig */
class __TwigTemplate_4f7206b9a6cb043e6628606e994c1aac17570d8e4f4b206c71538808118d870d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc3889de7189ef2c3772e8793f3d7b3e724ad839f85e6e5a8e8ad7068ef2b53f = $this->env->getExtension("native_profiler");
        $__internal_fc3889de7189ef2c3772e8793f3d7b3e724ad839f85e6e5a8e8ad7068ef2b53f->enter($__internal_fc3889de7189ef2c3772e8793f3d7b3e724ad839f85e6e5a8e8ad7068ef2b53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:admin_layout.html.twig"));

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
    <link rel=\"icon\" href=\"\">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">Home</a></li>

            </ul>
            <form class=\"navbar-form navbar-right\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
            </form>
        </div>
    </div>
</nav>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"#\">Articles</a></li>
                <li><a href=\"#\">New article</a></li>
                <li><a href=\"#\">Update article</a></li>
                <li><a href=\"#\">Remove article</a></li>
            </ul>
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"\">Tags</a></li>
                <li><a href=\"\">New tag</a></li>
                <li><a href=\"\">Update tag</a></li>
                <li><a href=\"\">Remove tag</a></li>
                <li ";
        // line 69
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "app_admin_tag_unused")) {
            echo "class=\"active\"";
        }
        echo ">
                    <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("app_admin_tag_unused");
        echo "\">Unused tags</a>
                </li>
                <li ";
        // line 72
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "app_admin_tag_removeAllUnusedTags")) {
            echo "class=\"active\"";
        }
        echo ">
                    <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("app_admin_tag_removeAllUnusedTags");
        echo "\">Remove all unused tags</a>
                </li>
            </ul>
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"#\">Comments</a></li>
                <li><a href=\"#\">New comment</a></li>
                <li><a href=\"#\">Update comment</a></li>
                <li><a href=\"#\">Remove comment</a></li>
            </ul>
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"\">Users</a></li>
                <li><a href=\"\">New user</a></li>
                <li><a href=\"\">Update user</a></li>
                <li><a href=\"\">Remove user</a></li>
            </ul>
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
            <h1 class=\"page-header\">";
        // line 90
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</h1>
            ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"js/";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_fc3889de7189ef2c3772e8793f3d7b3e724ad839f85e6e5a8e8ad7068ef2b53f->leave($__internal_fc3889de7189ef2c3772e8793f3d7b3e724ad839f85e6e5a8e8ad7068ef2b53f_prof);

    }

    // line 90
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_120277a50be3c45e917512eda38db51beea0de5284a324e9cc7ce85dfa4bff7b = $this->env->getExtension("native_profiler");
        $__internal_120277a50be3c45e917512eda38db51beea0de5284a324e9cc7ce85dfa4bff7b->enter($__internal_120277a50be3c45e917512eda38db51beea0de5284a324e9cc7ce85dfa4bff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        
        $__internal_120277a50be3c45e917512eda38db51beea0de5284a324e9cc7ce85dfa4bff7b->leave($__internal_120277a50be3c45e917512eda38db51beea0de5284a324e9cc7ce85dfa4bff7b_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_324da2421e7c4975b178d7b8cce205489a9d05fde3fabcef3104f01cc2ff45e3 = $this->env->getExtension("native_profiler");
        $__internal_324da2421e7c4975b178d7b8cce205489a9d05fde3fabcef3104f01cc2ff45e3->enter($__internal_324da2421e7c4975b178d7b8cce205489a9d05fde3fabcef3104f01cc2ff45e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_324da2421e7c4975b178d7b8cce205489a9d05fde3fabcef3104f01cc2ff45e3->leave($__internal_324da2421e7c4975b178d7b8cce205489a9d05fde3fabcef3104f01cc2ff45e3_prof);

    }

    public function getTemplateName()
    {
        return ":admin:admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 91,  182 => 90,  171 => 103,  166 => 101,  162 => 100,  158 => 99,  149 => 92,  147 => 91,  143 => 90,  123 => 73,  117 => 72,  112 => 70,  106 => 69,  79 => 45,  52 => 21,  46 => 18,  40 => 15,  24 => 1,);
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
/*     <link rel="icon" href="">*/
/* */
/*     <title>Dashboard Template for Bootstrap</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">*/
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
/*     <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Dashboard</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="{{ path('app_article_articles') }}">Home</a></li>*/
/* */
/*             </ul>*/
/*             <form class="navbar-form navbar-right">*/
/*                 <input type="text" class="form-control" placeholder="Search...">*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <div class="container-fluid">*/
/*     <div class="row">*/
/*         <div class="col-sm-3 col-md-2 sidebar">*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li><a href="#">Articles</a></li>*/
/*                 <li><a href="#">New article</a></li>*/
/*                 <li><a href="#">Update article</a></li>*/
/*                 <li><a href="#">Remove article</a></li>*/
/*             </ul>*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li><a href="">Tags</a></li>*/
/*                 <li><a href="">New tag</a></li>*/
/*                 <li><a href="">Update tag</a></li>*/
/*                 <li><a href="">Remove tag</a></li>*/
/*                 <li {% if app.request.get('_route') == 'app_admin_tag_unused' %}class="active"{% endif %}>*/
/*                     <a href="{{ path('app_admin_tag_unused') }}">Unused tags</a>*/
/*                 </li>*/
/*                 <li {% if app.request.get('_route') == 'app_admin_tag_removeAllUnusedTags' %}class="active"{% endif %}>*/
/*                     <a href="{{ path('app_admin_tag_removeAllUnusedTags') }}">Remove all unused tags</a>*/
/*                 </li>*/
/*             </ul>*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li><a href="#">Comments</a></li>*/
/*                 <li><a href="#">New comment</a></li>*/
/*                 <li><a href="#">Update comment</a></li>*/
/*                 <li><a href="#">Remove comment</a></li>*/
/*             </ul>*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li><a href="">Users</a></li>*/
/*                 <li><a href="">New user</a></li>*/
/*                 <li><a href="">Update user</a></li>*/
/*                 <li><a href="">Remove user</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*             <h1 class="page-header">{% block headTitle %}{% endblock %}</h1>*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ asset('js/jquery.min.js') }}"><\/script>')</script>*/
/* <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/* <script src="js/{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>*/
/* </body>*/
/* </html>*/
/* */
