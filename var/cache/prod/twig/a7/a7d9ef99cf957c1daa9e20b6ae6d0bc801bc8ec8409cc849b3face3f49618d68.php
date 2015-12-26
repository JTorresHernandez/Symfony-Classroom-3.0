<?php

/* base.html.twig */
class __TwigTemplate_4d1b1f14a3ef6d38a4fc6794daf1cb22b20cbe1d012fc68df2eca85fb53a3d66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        // line 39
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\"><svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M12,0.9C5.8,0.9,0.9,5.8,0.9,12s5,11.1,11.1,11.1s11.1-5,11.1-11.1S18.2,0.9,12,0.9z M18.5,6.9
    c-0.6,0-0.9-0.3-0.9-0.8c0-0.2,0-0.4,0.2-0.6c0.1-0.3,0.2-0.3,0.2-0.4c0-0.3-0.5-0.4-0.6-0.4c-1.8,0.1-2.3,2.5-2.7,4.4l-0.2,1
    c1,0.2,1.8,0,2.2-0.3c0.6-0.4-0.2-0.7-0.1-1.2c0.1-0.3,0.5-0.5,0.7-0.6c0.5,0,0.7,0.5,0.7,0.9c0,0.7-1,1.8-3,1.8
    c-0.3,0-0.5,0-0.6-0.1L13.8,13c-0.4,1.6-0.8,3.8-2.4,5.7c-1.4,1.7-2.9,1.9-3.5,1.9c-1.2,0-1.9-0.6-2-1.5c0-0.8,0.7-1.3,1.2-1.3
    c0.6,0,1.1,0.5,1.1,1c0,0.5-0.2,0.6-0.4,0.6c-0.1,0.1-0.3,0.2-0.3,0.4c0,0.1,0.1,0.3,0.4,0.3c0.5,0,0.8-0.3,1.1-0.5
    c1.2-0.9,1.6-2.7,2.2-5.7l0.1-0.7c0.2-1,0.5-2.1,0.7-3.2c-0.8-0.6-1.3-1.4-2.4-1.7C9,8.2,8.5,8.4,8.1,8.8c-0.4,0.5-0.2,1.1,0.2,1.5
    L9,10.9c0.7,0.8,1.2,1.6,1,2.5C9.7,14.9,8,16,6,15.3c-1.8-0.6-2-1.8-1.8-2.5c0.2-0.6,0.6-0.7,1.1-0.6c0.5,0.2,0.6,0.7,0.6,1.2
    c0,0.1,0,0.1-0.1,0.3c-0.2,0.1-0.3,0.3-0.3,0.4c-0.1,0.4,0.4,0.6,0.7,0.7c0.7,0.3,1.6-0.2,1.8-0.8c0.2-0.6-0.2-1-0.4-1.1l-0.7-0.8
    c-0.4-0.4-1.1-1.4-0.7-2.6C6.3,9,6.6,8.6,6.9,8.2c0.9-0.6,1.8-0.7,2.8-0.6c1.2,0.4,1.8,1.1,2.6,1.8c0.5-1.2,1-2.4,1.8-3.5
    C15,5,16,4.3,17.2,4.2c1.3,0.2,2.2,0.7,2.2,1.6C19.4,6.2,19.2,6.9,18.5,6.9z\"></path>
</svg></a><a class=\"navbar-brand\" href=\"";
        // line 50
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
        // line 62
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 63
            echo "                    <a class=\"btn btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Sign out</a>
                    <a class=\"btn btn-danger\" href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                ";
        } elseif ((($this->getAttribute($this->getAttribute(        // line 65
(isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "fos_user_security_login") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "fos_user_registration_register"))) {
            // line 66
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:HoritzontalLogin:horitzontalLogin"));
            echo "
                ";
        }
        // line 68
        echo "                </div>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div>
</nav>

<div class=\"container\">
    <ul>
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 78
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </ul>
</div>

<div class=\"container\">
    <div class=\"margin-bottom-md\"></div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "        </div>
        <div class=\"col-md-4\">
            ";
        // line 90
        $this->displayBlock('sidebar', $context, $blocks);
        // line 111
        echo "        </div>
    </div>
    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7f116c3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f116c3_0") : $this->env->getExtension('asset')->getAssetUrl("css/7f116c3_part_1_bootstrap.min_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "7f116c3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f116c3_1") : $this->env->getExtension('asset')->getAssetUrl("css/7f116c3_part_1_custom_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "7f116c3_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f116c3_2") : $this->env->getExtension('asset')->getAssetUrl("css/7f116c3_part_1_dashboard_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "7f116c3_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f116c3_3") : $this->env->getExtension('asset')->getAssetUrl("css/7f116c3_part_1_ie10-viewport-bug-workaround_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "7f116c3_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f116c3_4") : $this->env->getExtension('asset')->getAssetUrl("css/7f116c3_part_1_jumbotron_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "7f116c3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f116c3") : $this->env->getExtension('asset')->getAssetUrl("css/7f116c3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "    ";
    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
    }

    // line 90
    public function block_sidebar($context, array $blocks = array())
    {
        // line 91
        echo "                <div class=\"container-fluid\">
                    ";
        // line 92
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 93
            echo "                        <div class=\"row margin-bottom-md\">
                            <div class=\"col-md-12\">
                                <a class=\"btn btn-default\" style=\"font-size:x-large;width: 100%\" href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("app_admin_index_index");
            echo "\">Dashboard</a>
                            </div>
                        </div>
                    ";
        }
        // line 99
        echo "                    <div class=\"row margin-bottom-md\">
                        <div class=\"col-md-12\">
                            <a class=\"btn btn-default\" style=\"font-size:x-large;width: 100%\" href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("app_article_new");
        echo "\">Submit a new article</a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <a class=\"btn btn-default\" style=\"font-size:x-large;width: 100%\" href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("app_tags_tags");
        echo "\">Tags</a>
                        </div>
                    </div>
                </div>
            ";
    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        // line 121
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 121,  286 => 120,  277 => 106,  269 => 101,  265 => 99,  258 => 95,  254 => 93,  252 => 92,  249 => 91,  246 => 90,  241 => 87,  237 => 18,  199 => 16,  194 => 15,  191 => 14,  186 => 11,  179 => 128,  172 => 123,  170 => 120,  160 => 111,  158 => 90,  154 => 88,  152 => 87,  143 => 80,  134 => 78,  130 => 77,  119 => 68,  113 => 66,  111 => 65,  105 => 64,  100 => 63,  98 => 62,  83 => 50,  69 => 39,  47 => 20,  44 => 19,  41 => 14,  36 => 11,  24 => 1,);
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
/*         {% stylesheets 'css/*' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
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
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('app_article_articles') }}"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">*/
/* <path fill="#AAAAAA" d="M12,0.9C5.8,0.9,0.9,5.8,0.9,12s5,11.1,11.1,11.1s11.1-5,11.1-11.1S18.2,0.9,12,0.9z M18.5,6.9*/
/*     c-0.6,0-0.9-0.3-0.9-0.8c0-0.2,0-0.4,0.2-0.6c0.1-0.3,0.2-0.3,0.2-0.4c0-0.3-0.5-0.4-0.6-0.4c-1.8,0.1-2.3,2.5-2.7,4.4l-0.2,1*/
/*     c1,0.2,1.8,0,2.2-0.3c0.6-0.4-0.2-0.7-0.1-1.2c0.1-0.3,0.5-0.5,0.7-0.6c0.5,0,0.7,0.5,0.7,0.9c0,0.7-1,1.8-3,1.8*/
/*     c-0.3,0-0.5,0-0.6-0.1L13.8,13c-0.4,1.6-0.8,3.8-2.4,5.7c-1.4,1.7-2.9,1.9-3.5,1.9c-1.2,0-1.9-0.6-2-1.5c0-0.8,0.7-1.3,1.2-1.3*/
/*     c0.6,0,1.1,0.5,1.1,1c0,0.5-0.2,0.6-0.4,0.6c-0.1,0.1-0.3,0.2-0.3,0.4c0,0.1,0.1,0.3,0.4,0.3c0.5,0,0.8-0.3,1.1-0.5*/
/*     c1.2-0.9,1.6-2.7,2.2-5.7l0.1-0.7c0.2-1,0.5-2.1,0.7-3.2c-0.8-0.6-1.3-1.4-2.4-1.7C9,8.2,8.5,8.4,8.1,8.8c-0.4,0.5-0.2,1.1,0.2,1.5*/
/*     L9,10.9c0.7,0.8,1.2,1.6,1,2.5C9.7,14.9,8,16,6,15.3c-1.8-0.6-2-1.8-1.8-2.5c0.2-0.6,0.6-0.7,1.1-0.6c0.5,0.2,0.6,0.7,0.6,1.2*/
/*     c0,0.1,0,0.1-0.1,0.3c-0.2,0.1-0.3,0.3-0.3,0.4c-0.1,0.4,0.4,0.6,0.7,0.7c0.7,0.3,1.6-0.2,1.8-0.8c0.2-0.6-0.2-1-0.4-1.1l-0.7-0.8*/
/*     c-0.4-0.4-1.1-1.4-0.7-2.6C6.3,9,6.6,8.6,6.9,8.2c0.9-0.6,1.8-0.7,2.8-0.6c1.2,0.4,1.8,1.1,2.6,1.8c0.5-1.2,1-2.4,1.8-3.5*/
/*     C15,5,16,4.3,17.2,4.2c1.3,0.2,2.2,0.7,2.2,1.6C19.4,6.2,19.2,6.9,18.5,6.9z"></path>*/
/* </svg></a><a class="navbar-brand" href="{{ path('app_article_articles') }}">Symfony Classroom</a>*/
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
/*                 {% elseif app.request.get('_route') != 'fos_user_security_login' and app.request.get('_route') != 'fos_user_registration_register' %}*/
/*                     {{ render(controller('UserBundle:HoritzontalLogin:horitzontalLogin'))}}*/
/*                 {% endif %}*/
/*                 </div>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/* */
/*     </div>*/
/* </nav>*/
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
/*     <div class="margin-bottom-md"></div>*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% block sidebar %}*/
/*                 <div class="container-fluid">*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <div class="row margin-bottom-md">*/
/*                             <div class="col-md-12">*/
/*                                 <a class="btn btn-default" style="font-size:x-large;width: 100%" href="{{ path('app_admin_index_index') }}">Dashboard</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div class="row margin-bottom-md">*/
/*                         <div class="col-md-12">*/
/*                             <a class="btn btn-default" style="font-size:x-large;width: 100%" href="{{ path('app_article_new') }}">Submit a new article</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <a class="btn btn-default" style="font-size:x-large;width: 100%" href="{{ path('app_tags_tags') }}">Tags</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
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
/* <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ asset('js/jquery.min.js') }}"><\/script>')</script>*/
/* </body>*/
/* </html>*/
