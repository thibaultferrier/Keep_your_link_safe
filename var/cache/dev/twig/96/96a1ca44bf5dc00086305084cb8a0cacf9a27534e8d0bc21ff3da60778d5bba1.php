<?php

/* accueil/index.html.twig */
class __TwigTemplate_ec04ef3229549a7fbaabad2984a9c95c15dc272536cfa0615de105ba42c739ba extends Twig_Template
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
    ";
        // line 7
        if (twig_in_filter("recherche", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method"))) {
            // line 8
            echo "        <div class=\"row\" id=\"recherche_container\">
            <div class=\"col-md-12\">
                <div id=\"custom-search-input\">
                    <form action=\"";
            // line 11
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
            // line 29
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
        // line 41
        echo "
    <!-- Page Content -->
    <div class=\"container\" id=\"accueil_container\">

        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Liens"]) || array_key_exists("Liens", $context) ? $context["Liens"] : (function () { throw new Twig_Error_Runtime('Variable "Liens" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 46
            echo "
            <!-- gestion des differents projets -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h3 class= \"accordion\" >";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "Titre", array()), "html", null, true);
            echo "</h3>
                    <div>
                        <p>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "Description", array()), "html", null, true);
            echo "</p>
                        <a class=\"btn btn-primary\" href=\"http://";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "URL", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "URL", array()), "html", null, true);
            echo "</a>
                        <span class=\"badge badge-pill badge-secondary\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "TAGS", array()), "html", null, true);
            echo "</span>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
        <!-- Pagination -->
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">1</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>

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
        return array (  144 => 62,  130 => 54,  124 => 53,  120 => 52,  115 => 50,  109 => 46,  105 => 45,  99 => 41,  84 => 29,  63 => 11,  58 => 8,  56 => 7,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}

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

        {% for lien in Liens %}

            <!-- gestion des differents projets -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h3 class= \"accordion\" >{{ lien.Titre }}</h3>
                    <div>
                        <p>{{ lien.Description }}</p>
                        <a class=\"btn btn-primary\" href=\"http://{{ lien.URL }}\">{{ lien.URL }}</a>
                        <span class=\"badge badge-pill badge-secondary\">{{ lien.TAGS }}</span>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <hr>
        {% endfor %}

        <!-- Pagination -->
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">1</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>

    </div>


{% endblock %}

", "accueil/index.html.twig", "/var/www/html/aliptic/web_links_DB/symfony/web_links_DB/templates/accueil/index.html.twig");
    }
}
