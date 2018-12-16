<?php

/* base.html.twig */
class __TwigTemplate_62f7c7769eada925c51dbb0970da6e6c4f906d9746fd8f62749bf62c553af6ba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "



    </head>
    <body>

        ";
        // line 26
        $this->displayBlock('sidebar', $context, $blocks);
        // line 121
        echo "
        ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "
        <footer class=\"page-footer font-small pt-4\">

            <div class=\"card navbar fixed-bottom\">
                <ul class=\"list-inline text-center\" >
                    <li class=\"list-inline-item\">
                        <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"text-center\">Keep your link in mind </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <span class=\"text-right\">
                            <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rss");
        echo "\">
                                <i class=\"fas fa-rss-square big\"></i>
                            </a>
                        </span>
                    </li>
                </ul>
            </div>

        </footer>

        ";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 152
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Keep your link in mind";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"build/app.css\">
            <!--ICONS -->
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

            <!-- FONTS !! -->
            <link href=\"https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab\" rel=\"stylesheet\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        echo "            <!-- Navigation -->
            <nav class=\"navbar navbar-expand navbar-light fixed-top\">
                <div class=\"container text-center\">
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse align-self-md-center col-xs-12\" id=\"navbarResponsive\">
                        <ul class=\"nav navbar-nav\">

                            <li class=\"nav-item ";
        // line 36
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "accueil")) ? ("active") : (""));
        echo "\">
                                <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
                                    <i class=\"fas fa-home big\" >
                                    </i>
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                            <li class=\"nav-item ";
        // line 43
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "recherche")) ? ("active") : (""));
        echo "\">
                                <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\">
                                    <i class=\"fas fa-search big\">
                                    </i>
                                </a>
                            </li>
                            <!--si on est co et admin on va en ajout_lien-->
                            ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->source); })()), "user", array()) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->source); })()), "user", array()), "Roles", array(), "method")))) {
            // line 51
            echo "                                <li class=\"nav-item ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 51, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "ajout_lien")) ? ("active") : (""));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 51, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "edit_lien")) ? ("active") : (""));
            echo "\">
                                    <a class=\"nav-link\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_lien");
            echo "\">
                                        <i class=\"fas fa-plus-circle big\">
                                        </i>
                                    </a>
                                </li>
                            ";
        }
        // line 58
        echo "

                            <li>
                                <a class=\"navbar-brand\" href=\"./\">
                                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\" width=\"150\">
                                </a>
                            </li>

                            <!--si on est co et pas admin on va en ajout_lien-->
                            ";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 67, $this->source); })()), "user", array()) &&  !twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 67, $this->source); })()), "user", array()), "Roles", array(), "method")))) {
            // line 68
            echo "                                <li class=\"nav-item ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "ajout_lien")) ? ("active") : (""));
            echo "\">
                                    <a class=\"nav-link\" href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_lien");
            echo "\">
                                        <i class=\"fas fa-plus-circle big\">
                                        </i>
                                    </a>
                                </li>

                                <!--si on est pas co et  pas admin on va en connexion-->
                            ";
        } elseif ( !twig_get_attribute($this->env, $this->source,         // line 76
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 76, $this->source); })()), "user", array())) {
            // line 77
            echo "                                <li class=\"nav-item ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 77, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "ajout_lien")) ? ("active") : (""));
            echo "\">
                                    <a class=\"nav-link\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo "\">
                                        <i class=\"fas fa-plus-circle big\">
                                        </i>
                                    </a>
                                </li>
                            ";
        }
        // line 84
        echo "
                            <!--si on a un admin on affiche la gestion-->
                            ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 86, $this->source); })()), "user", array()) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 86, $this->source); })()), "user", array()), "Roles", array(), "method")))) {
            // line 87
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">
                                        <i class=\"fas fa-users-cog big\">
                                        </i>
                                    </a>
                                </li>
                            ";
        }
        // line 94
        echo "
                            <!--si on a un utilisateur on va direct en déconnexion -->
                            ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 96, $this->source); })()), "user", array())) {
            // line 97
            echo "                                <li class=\"nav-item ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 97, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "connexion")) ? ("active") : (""));
            echo "\">
                                    <a class=\"nav-link\" href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            echo "\">
                                        <i class=\"fas fa-user big\">
                                        </i>
                                    </a>
                                </li>

                            <!--sinon on va en connexion-->
                            ";
        } else {
            // line 106
            echo "
                                <li class=\"nav-item ";
            // line 107
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 107, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "connexion")) ? ("active") : (""));
            echo "\">
                                    <a class=\"nav-link\" href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo "\">
                                        <i class=\"fas fa-user big\">
                                        </i>
                                    </a>
                                </li>
                            ";
        }
        // line 114
        echo "

                        </ul>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 123
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "

            <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://code.jquery.com/jquery-latest.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/accueil.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/runtime.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  376 => 149,  372 => 148,  368 => 147,  364 => 145,  355 => 144,  345 => 123,  336 => 122,  320 => 114,  311 => 108,  307 => 107,  304 => 106,  293 => 98,  288 => 97,  286 => 96,  282 => 94,  273 => 88,  270 => 87,  268 => 86,  264 => 84,  255 => 78,  250 => 77,  248 => 76,  238 => 69,  233 => 68,  231 => 67,  223 => 62,  217 => 58,  208 => 52,  201 => 51,  199 => 50,  190 => 44,  186 => 43,  177 => 37,  173 => 36,  162 => 27,  153 => 26,  135 => 10,  126 => 9,  108 => 6,  95 => 152,  93 => 144,  80 => 134,  73 => 130,  65 => 124,  63 => 122,  60 => 121,  58 => 26,  49 => 19,  47 => 9,  41 => 6,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <title>{% block title %}Keep your link in mind{% endblock %}</title>


        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"build/app.css\">
            <!--ICONS -->
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

            <!-- FONTS !! -->
            <link href=\"https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab\" rel=\"stylesheet\">

        {% endblock %}




    </head>
    <body>

        {% block sidebar %}
            <!-- Navigation -->
            <nav class=\"navbar navbar-expand navbar-light fixed-top\">
                <div class=\"container text-center\">
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse align-self-md-center col-xs-12\" id=\"navbarResponsive\">
                        <ul class=\"nav navbar-nav\">

                            <li class=\"nav-item {{ app.request.get('_route') == 'accueil' ? 'active' }}\">
                                <a class=\"nav-link\" href=\"{{ path('accueil') }}\">
                                    <i class=\"fas fa-home big\" >
                                    </i>
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                            <li class=\"nav-item {{ app.request.get('_route') == 'recherche' ? 'active' }}\">
                                <a class=\"nav-link\" href=\"{{ path('recherche') }}\">
                                    <i class=\"fas fa-search big\">
                                    </i>
                                </a>
                            </li>
                            <!--si on est co et admin on va en ajout_lien-->
                            {% if app.user and (\"ROLE_ADMIN\" in app.user.Roles()) %}
                                <li class=\"nav-item {{ app.request.get('_route') == 'ajout_lien' ? 'active' }} {{ app.request.get('_route') == 'edit_lien' ? 'active' }}\">
                                    <a class=\"nav-link\" href=\"{{ path('ajout_lien') }}\">
                                        <i class=\"fas fa-plus-circle big\">
                                        </i>
                                    </a>
                                </li>
                            {% endif %}


                            <li>
                                <a class=\"navbar-brand\" href=\"./\">
                                    <img src=\"{{ asset('build/images/logo.png') }}\" width=\"150\">
                                </a>
                            </li>

                            <!--si on est co et pas admin on va en ajout_lien-->
                            {% if app.user and not(\"ROLE_ADMIN\" in app.user.Roles()) %}
                                <li class=\"nav-item {{ app.request.get('_route') == 'ajout_lien' ? 'active' }}\">
                                    <a class=\"nav-link\" href=\"{{ path('ajout_lien') }}\">
                                        <i class=\"fas fa-plus-circle big\">
                                        </i>
                                    </a>
                                </li>

                                <!--si on est pas co et  pas admin on va en connexion-->
                            {% elseif not app.user  %}
                                <li class=\"nav-item {{ app.request.get('_route') == 'ajout_lien' ? 'active' }}\">
                                    <a class=\"nav-link\" href=\"{{ path('connexion') }}\">
                                        <i class=\"fas fa-plus-circle big\">
                                        </i>
                                    </a>
                                </li>
                            {% endif %}

                            <!--si on a un admin on affiche la gestion-->
                            {% if app.user and (\"ROLE_ADMIN\" in app.user.Roles()) %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('admin') }}\">
                                        <i class=\"fas fa-users-cog big\">
                                        </i>
                                    </a>
                                </li>
                            {% endif %}

                            <!--si on a un utilisateur on va direct en déconnexion -->
                            {% if app.user %}
                                <li class=\"nav-item {{ app.request.get('_route') == 'connexion' ? 'active' }}\">
                                    <a class=\"nav-link\" href=\"{{ path('deconnexion') }}\">
                                        <i class=\"fas fa-user big\">
                                        </i>
                                    </a>
                                </li>

                            <!--sinon on va en connexion-->
                            {% else %}

                                <li class=\"nav-item {{ app.request.get('_route') == 'connexion' ? 'active' }}\">
                                    <a class=\"nav-link\" href=\"{{ path('connexion') }}\">
                                        <i class=\"fas fa-user big\">
                                        </i>
                                    </a>
                                </li>
                            {% endif %}


                        </ul>
                    </div>
                </div>
            </nav>
        {% endblock %}

        {% block body %}
        {% endblock %}

        <footer class=\"page-footer font-small pt-4\">

            <div class=\"card navbar fixed-bottom\">
                <ul class=\"list-inline text-center\" >
                    <li class=\"list-inline-item\">
                        <a href=\"{{ path('accueil') }}\" class=\"text-center\">Keep your link in mind </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <span class=\"text-right\">
                            <a href=\"{{ path('rss') }}\">
                                <i class=\"fas fa-rss-square big\"></i>
                            </a>
                        </span>
                    </li>
                </ul>
            </div>

        </footer>

        {% block javascripts %}


            <script src=\"{{ asset(\"http://code.jquery.com/jquery-latest.min.js\") }}\"></script>
            <script src=\"{{ asset('build/accueil.js') }}\"></script>
            <script src=\"{{ asset('build/runtime.js') }}\"></script>

        {% endblock %}

    </body>
</html>
", "base.html.twig", "/var/www/html/aliptic/web_links_DB/symfony/web_links_DB/templates/base.html.twig");
    }
}
