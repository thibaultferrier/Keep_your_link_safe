<?php

/* accueil/index.html.twig */
class __TwigTemplate_afe2112def369438ae9d132f2f2bb2ba365cdfb868fde889c39fa5dcfed96b72 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- si user on affiche un petit message -->
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "user", array())) {
            // line 9
            echo "        <p class=\"bonjour\">Bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo " </p>
    ";
        }
        // line 11
        echo "
    <!-- si recherche on affiche la barre de recherche -->
    ";
        // line 13
        if (twig_in_filter("recherche", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method"))) {
            // line 14
            echo "        <div class=\"row\" id=\"recherche_container\">
            <div class=\"col-md-12\">
                <div id=\"custom-search-input\">
                    <form action=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
            echo "\" method=\"get\">
                    <ul class=\"list-inline text-center recherche\">
                        <li class=\"list-inline-item\">

                            <div class=\"form-group col-md-12\">
                                <input name=\"q\"
                                       class=\"form-control search-field\"
                                       placeholder=\"Rechercher\"
                                       autocomplete=\"off\"
                                       autofocus
                                       data-no-results-message=\"Aucun résultat\"
                                >
                            </div>

                        </li>
                        <li class=\"list-inline-item\">
                            <span class=\"input-group-btn\">
                                <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-primary button_search\">
                                 <a class=\"btn btn-danger button_search\" type=\"button\" id=\"fermer_recherche\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">
                                    <i class=\"fas fa-times-circle \"></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                    </form>
                </div>
            </div>
        </div>

    ";
        }
        // line 47
        echo "
    <!-- Page Content -->
    <div class=\"container\" id=\"accueil_container\">

        ";
        // line 51
        if ((isset($context["Liens"]) || array_key_exists("Liens", $context) ? $context["Liens"] : (function () { throw new Twig_Error_Runtime('Variable "Liens" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Liens"]) || array_key_exists("Liens", $context) ? $context["Liens"] : (function () { throw new Twig_Error_Runtime('Variable "Liens" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
                // line 53
                echo "
                <!-- gestion des differents projets -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h3 class= \"accordion\" >";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "Titre", array()), "html", null, true);
                echo "</h3>
                        <div class=\"non-visible\">
                            <p>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "Description", array()), "html", null, true);
                echo "</p>
                            <a class=\"btn btn-primary\" href=\"http://";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "URL", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "URL", array()), "html", null, true);
                echo "</a>
                            <span class=\"badge badge-pill badge-secondary\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "TAGS", array()), "html", null, true);
                echo "</span>

                            <!-- si admin on affiche les controles de liens -->
                            ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->source); })()), "user", array()) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->source); })()), "user", array()), "Roles", array(), "method")))) {
                    // line 65
                    echo "                                <a class=\"btn btn-dark button_search\" type=\"button\" id=\"edit\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_lien", array("id" => twig_get_attribute($this->env, $this->source, $context["lien"], "ID", array()))), "html", null, true);
                    echo "\">
                                    <i class=\"fas fa-edit \"></i>
                                </a>
                                <a class=\"btn btn-danger button_search\" type=\"button\" id=\"suppr\" href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_lien", array("id" => twig_get_attribute($this->env, $this->source, $context["lien"], "ID", array()))), "html", null, true);
                    echo "\">
                                    <i class=\"fas fa-times-circle \"></i>
                                </a>
                            ";
                }
                // line 72
                echo "                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <hr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        ";
        }
        // line 80
        echo "

        ";
        // line 82
        if ((null === (isset($context["Liens"]) || array_key_exists("Liens", $context) ? $context["Liens"] : (function () { throw new Twig_Error_Runtime('Variable "Liens" does not exist.', 82, $this->source); })()))) {
            // line 83
            echo "            <div class=\"col-md-12 text-danger text-center\">
                <p>Aucun résultat !</p>
                <br>
                <iframe src=\"https://giphy.com/embed/3oEjHGrVGrqgFFknfO\" width=\"480\" height=\"270\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/comic-con-jack-sparrow-sdcc2016-3oEjHGrVGrqgFFknfO\">via GIPHY</a></p>
            </div>
        ";
        }
        // line 89
        echo "
        <!-- Pagination -->
        <div class=\"text-xs-center\">
            ";
        // line 92
        if ((isset($context["Liens"]) || array_key_exists("Liens", $context) ? $context["Liens"] : (function () { throw new Twig_Error_Runtime('Variable "Liens" does not exist.', 92, $this->source); })())) {
            // line 93
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Liens"]) || array_key_exists("Liens", $context) ? $context["Liens"] : (function () { throw new Twig_Error_Runtime('Variable "Liens" does not exist.', 93, $this->source); })()));
            echo "
            ";
        }
        // line 95
        echo "        </div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 95,  204 => 93,  202 => 92,  197 => 89,  189 => 83,  187 => 82,  183 => 80,  180 => 79,  168 => 72,  161 => 68,  154 => 65,  152 => 64,  146 => 61,  140 => 60,  136 => 59,  131 => 57,  125 => 53,  120 => 52,  118 => 51,  112 => 47,  97 => 35,  76 => 17,  71 => 14,  69 => 13,  65 => 11,  59 => 9,  57 => 8,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}

    <!-- si user on affiche un petit message -->
    {% if app.user %}
        <p class=\"bonjour\">Bonjour {{ app.user.username }} </p>
    {% endif %}

    <!-- si recherche on affiche la barre de recherche -->
    {% if 'recherche' in app.request.get('_route')  %}
        <div class=\"row\" id=\"recherche_container\">
            <div class=\"col-md-12\">
                <div id=\"custom-search-input\">
                    <form action=\"{{ path('recherche') }}\" method=\"get\">
                    <ul class=\"list-inline text-center recherche\">
                        <li class=\"list-inline-item\">

                            <div class=\"form-group col-md-12\">
                                <input name=\"q\"
                                       class=\"form-control search-field\"
                                       placeholder=\"Rechercher\"
                                       autocomplete=\"off\"
                                       autofocus
                                       data-no-results-message=\"Aucun résultat\"
                                >
                            </div>

                        </li>
                        <li class=\"list-inline-item\">
                            <span class=\"input-group-btn\">
                                <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-primary button_search\">
                                 <a class=\"btn btn-danger button_search\" type=\"button\" id=\"fermer_recherche\" href=\"{{ path('accueil') }}\">
                                    <i class=\"fas fa-times-circle \"></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                    </form>
                </div>
            </div>
        </div>

    {% endif %}

    <!-- Page Content -->
    <div class=\"container\" id=\"accueil_container\">

        {% if Liens %}
            {% for lien in Liens %}

                <!-- gestion des differents projets -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h3 class= \"accordion\" >{{ lien.Titre }}</h3>
                        <div class=\"non-visible\">
                            <p>{{ lien.Description }}</p>
                            <a class=\"btn btn-primary\" href=\"http://{{ lien.URL }}\">{{ lien.URL }}</a>
                            <span class=\"badge badge-pill badge-secondary\">{{ lien.TAGS }}</span>

                            <!-- si admin on affiche les controles de liens -->
                            {% if app.user and (\"ROLE_ADMIN\" in app.user.Roles()) %}
                                <a class=\"btn btn-dark button_search\" type=\"button\" id=\"edit\" href=\"{{ path('edit_lien', {'id': lien.ID}) }}\">
                                    <i class=\"fas fa-edit \"></i>
                                </a>
                                <a class=\"btn btn-danger button_search\" type=\"button\" id=\"suppr\" href=\"{{ path('suppr_lien', {'id': lien.ID}) }}\">
                                    <i class=\"fas fa-times-circle \"></i>
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <hr>
            {% endfor %}
        {% endif %}


        {% if Liens is null %}
            <div class=\"col-md-12 text-danger text-center\">
                <p>Aucun résultat !</p>
                <br>
                <iframe src=\"https://giphy.com/embed/3oEjHGrVGrqgFFknfO\" width=\"480\" height=\"270\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/comic-con-jack-sparrow-sdcc2016-3oEjHGrVGrqgFFknfO\">via GIPHY</a></p>
            </div>
        {% endif %}

        <!-- Pagination -->
        <div class=\"text-xs-center\">
            {% if Liens %}
                {{ knp_pagination_render(Liens) }}
            {% endif %}
        </div>

    </div>


{% endblock %}

", "accueil/index.html.twig", "/var/www/html/aliptic/web_links_DB/symfony/web_links_DB/templates/accueil/index.html.twig");
    }
}
