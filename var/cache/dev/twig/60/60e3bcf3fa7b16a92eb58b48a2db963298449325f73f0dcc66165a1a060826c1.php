<?php

/* admin/modif_usr.html.twig */
class __TwigTemplate_c636c2f6d1e886045a79c2558dfb0849a136930bc4e35b85bbc65776cf31817e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/modif_usr.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/modif_usr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/modif_usr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!--si on a un admin on affiche la gestion-->
";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array()) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array()), "Roles", array(), "method")))) {
            // line 7
            echo "
<div id=\"page_utilisateur_container\" class=\"col-md-6\">

     <span class=\"titre\">
        <h1 id=\"modif_utilisateur_titre\"><u>Modifier un utilisateur</u></h1>
     </span>

    <br>


    <span>
            <a class=\"btn btn-secondary\" id=\"btn_ajout_utilisateur\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Ajouter un utilisateur</a>
            <a class=\"btn btn-primary\" id=\"btn_modif_utilisateur\" href=\"#\">Modifier un utilisateur</a>
    </span>

    <!--modif d'un utilisateur-->
    <div id=\"modif_utilisateur\" class=\"modif_utilisateur_class\">
        <br>

        <!--affichage des utilisateurs-->
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\" class=\"invisible\">Id</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) || array_key_exists("Users", $context) ? $context["Users"] : (function () { throw new Twig_Error_Runtime('Variable "Users" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 36
                echo "                <tr>
                    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
                echo "</td>
                    <th scope=\"row\" class=\"invisible\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "</th>
                </tr>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
            </tbody>

        </table>

        ";
            // line 47
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 47, $this->source); })()), 'form_start');
            echo "

        <div class=\"form-group\" style=\"display: none\">
            ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 50, $this->source); })()), "id", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
        </div>

        <div class=\"form-group\">
            ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 54, $this->source); })()), "username", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
        </div>

        <div class=\"form-group\">
            ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 58, $this->source); })()), "password", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
        </div>

        <div class=\"form-group\">
            ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 62, $this->source); })()), "save", array()), 'row', array("attr" => array("class" => "btn col-md-3 btn-primary")));
            echo "
        </div>

        <div class=\"form-group\">
            ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 66, $this->source); })()), "delete", array()), 'row', array("attr" => array("class" => "btn col-md-3 btn-danger")));
            echo "
        </div>

        ";
            // line 69
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 69, $this->source); })()), 'form_end');
            echo "

    </div>

</div>

";
        } else {
            // line 76
            echo "    <div class=\"para_rouge col-md-4\">
        <p>Modifier l'URL c'est pas bien...</p>
    </div>

";
        }
        // line 81
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://code.jquery.com/jquery-latest.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/modif_utilisateur.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/runtime.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/modif_usr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 88,  205 => 87,  201 => 86,  198 => 85,  189 => 84,  178 => 81,  171 => 76,  161 => 69,  155 => 66,  148 => 62,  141 => 58,  134 => 54,  127 => 50,  121 => 47,  114 => 42,  104 => 38,  100 => 37,  97 => 36,  93 => 35,  73 => 18,  60 => 7,  58 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<!--si on a un admin on affiche la gestion-->
{% if app.user and (\"ROLE_ADMIN\" in app.user.Roles()) %}

<div id=\"page_utilisateur_container\" class=\"col-md-6\">

     <span class=\"titre\">
        <h1 id=\"modif_utilisateur_titre\"><u>Modifier un utilisateur</u></h1>
     </span>

    <br>


    <span>
            <a class=\"btn btn-secondary\" id=\"btn_ajout_utilisateur\" href=\"{{ path('admin') }}\">Ajouter un utilisateur</a>
            <a class=\"btn btn-primary\" id=\"btn_modif_utilisateur\" href=\"#\">Modifier un utilisateur</a>
    </span>

    <!--modif d'un utilisateur-->
    <div id=\"modif_utilisateur\" class=\"modif_utilisateur_class\">
        <br>

        <!--affichage des utilisateurs-->
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\" class=\"invisible\">Id</th>
            </tr>
            </thead>
            <tbody>
            {% for user in Users %}
                <tr>
                    <td>{{ user.username}}</td>
                    <th scope=\"row\" class=\"invisible\">{{ user.id}}</th>
                </tr>

            {% endfor %}

            </tbody>

        </table>

        {{ form_start(Form) }}

        <div class=\"form-group\" style=\"display: none\">
            {{ form_row(Form.id, {attr: {class: 'form-control'} }) }}
        </div>

        <div class=\"form-group\">
            {{ form_row(Form.username, {attr: {class: 'form-control'} }) }}
        </div>

        <div class=\"form-group\">
            {{ form_row(Form.password, {attr: {class: 'form-control'} }) }}
        </div>

        <div class=\"form-group\">
            {{ form_row(Form.save, {attr: {class: 'btn col-md-3 btn-primary'} }) }}
        </div>

        <div class=\"form-group\">
            {{ form_row(Form.delete, {attr: {class: 'btn col-md-3 btn-danger'} }) }}
        </div>

        {{ form_end(Form) }}

    </div>

</div>

{% else %}
    <div class=\"para_rouge col-md-4\">
        <p>Modifier l'URL c'est pas bien...</p>
    </div>

{% endif %}

{% endblock %}

{% block javascripts %}

    <script src=\"{{ asset(\"http://code.jquery.com/jquery-latest.min.js\") }}\"></script>
    <script src=\"{{ asset('build/modif_utilisateur.js') }}\"></script>
    <script src=\"{{ asset('build/runtime.js') }}\"></script>

{% endblock %}", "admin/modif_usr.html.twig", "/var/www/html/aliptic/web_links_DB/symfony/web_links_DB/templates/admin/modif_usr.html.twig");
    }
}
