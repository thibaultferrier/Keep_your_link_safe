<?php

/* admin/admin.html.twig */
class __TwigTemplate_d909bd6cd13b3d92224e1af0f07f5a45cac9ae7a03e84fa58f3bd5aad3071bf9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

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
        <h1 id=\"ajout_utilisateur_titre\"><u>Ajouter un utilisateur</u></h1>
        </span>

        <br>


        <span>
            <a class=\"btn btn-primary\" id=\"btn_ajout_utilisateur\" href=\"#\">Ajouter un utilisateur</a>
            <a class=\"btn btn-secondary\" id=\"btn_modif_utilisateur\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_usr");
            echo "\">Modifier un utilisateur</a>
        </span>

        <!--ajout d'un utilisateur-->
        <div id=\"ajout_utilisateur\" class=\"ajout_utilisateur_class\">
            <br>

            ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 26, $this->source); })()), 'form_start');
            echo "

                <div class=\"form-group\" id=\"ajout_first_div\">
                    ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 29, $this->source); })()), "username", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                </div>

                <div class=\"form-group\">
                    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 33, $this->source); })()), "password", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                </div>

                <div class=\"form-group\">
                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 37, $this->source); })()), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary")));
            echo "
                </div>

            ";
            // line 40
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 40, $this->source); })()), 'form_end');
            echo "

        </div>

    </div>

    ";
        } else {
            // line 47
            echo "        <div class=\"para_rouge col-md-4\">
            <p>Modifier l'URL c'est pas bien...</p>
        </div>

    ";
        }
        // line 52
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  119 => 47,  109 => 40,  103 => 37,  96 => 33,  89 => 29,  83 => 26,  73 => 19,  59 => 7,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <!--si on a un admin on affiche la gestion-->
    {% if app.user and (\"ROLE_ADMIN\" in app.user.Roles()) %}

    <div id=\"page_utilisateur_container\" class=\"col-md-6\">

        <span class=\"titre\">
        <h1 id=\"ajout_utilisateur_titre\"><u>Ajouter un utilisateur</u></h1>
        </span>

        <br>


        <span>
            <a class=\"btn btn-primary\" id=\"btn_ajout_utilisateur\" href=\"#\">Ajouter un utilisateur</a>
            <a class=\"btn btn-secondary\" id=\"btn_modif_utilisateur\" href=\"{{ path('modif_usr') }}\">Modifier un utilisateur</a>
        </span>

        <!--ajout d'un utilisateur-->
        <div id=\"ajout_utilisateur\" class=\"ajout_utilisateur_class\">
            <br>

            {{ form_start(Form) }}

                <div class=\"form-group\" id=\"ajout_first_div\">
                    {{ form_row(Form.username, {attr: {class: 'form-control'} }) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(Form.password, {attr: {class: 'form-control'} }) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(Form.save, {attr: {class: 'btn btn-primary'} }) }}
                </div>

            {{ form_end(Form) }}

        </div>

    </div>

    {% else %}
        <div class=\"para_rouge col-md-4\">
            <p>Modifier l'URL c'est pas bien...</p>
        </div>

    {% endif %}

{% endblock %}", "admin/admin.html.twig", "/var/www/html/aliptic/web_links_DB/symfony/web_links_DB/templates/admin/admin.html.twig");
    }
}
