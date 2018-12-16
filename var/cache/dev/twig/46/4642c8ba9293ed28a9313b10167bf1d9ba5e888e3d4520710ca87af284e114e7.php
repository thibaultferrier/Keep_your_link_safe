<?php

/* admin/edit_lien.html.twig */
class __TwigTemplate_70a8b4ec18cecade00f04e41cdd5e42c8e30d229a9b9405a47a916be6de821f4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/edit_lien.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_lien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_lien.html.twig"));

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
    <div id=\"ajout_lien\" class=\"col-md-6 \">

        <span class=\"titre\">
            <h1><u>Editer ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Lien"]) || array_key_exists("Lien", $context) ? $context["Lien"] : (function () { throw new Twig_Error_Runtime('Variable "Lien" does not exist.', 8, $this->source); })()), "titre", array()), "html", null, true);
        echo "</u></h1>
        </span>


        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

            <div class=\"form-group invisible\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 15, $this->source); })()), "Id", array()), 'row');
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 19, $this->source); })()), "titre", array()), 'row', array("attr" => array("class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["Lien"]) || array_key_exists("Lien", $context) ? $context["Lien"] : (function () { throw new Twig_Error_Runtime('Variable "Lien" does not exist.', 19, $this->source); })()), "titre", array()))));
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 23, $this->source); })()), "Description", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["Lien"]) || array_key_exists("Lien", $context) ? $context["Lien"] : (function () { throw new Twig_Error_Runtime('Variable "Lien" does not exist.', 23, $this->source); })()), "Description", array()))));
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 27, $this->source); })()), "URL", array()), 'row', array("attr" => array("class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["Lien"]) || array_key_exists("Lien", $context) ? $context["Lien"] : (function () { throw new Twig_Error_Runtime('Variable "Lien" does not exist.', 27, $this->source); })()), "URL", array()))));
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 31, $this->source); })()), "TAGS", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["Lien"]) || array_key_exists("Lien", $context) ? $context["Lien"] : (function () { throw new Twig_Error_Runtime('Variable "Lien" does not exist.', 31, $this->source); })()), "TAGS", array()))));
        echo "
                <p class=\"para_rouge\">Merci de renseigner les TAGS à nouveau</p>
            </div>

            <div class=\"form-group\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 36, $this->source); })()), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary")));
        echo "
            </div>

        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new Twig_Error_Runtime('Variable "Form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://code.jquery.com/jquery-latest.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/edit_lien.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/runtime.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_lien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  146 => 48,  142 => 47,  139 => 46,  130 => 45,  115 => 39,  109 => 36,  101 => 31,  94 => 27,  87 => 23,  80 => 19,  73 => 15,  67 => 12,  60 => 8,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div id=\"ajout_lien\" class=\"col-md-6 \">

        <span class=\"titre\">
            <h1><u>Editer {{ Lien.titre }}</u></h1>
        </span>


        {{ form_start(Form) }}

            <div class=\"form-group invisible\">
                {{ form_row(Form.Id) }}
            </div>

            <div class=\"form-group\">
                {{ form_row(Form.titre, {attr: {class: 'form-control',value:Lien.titre} }) }}
            </div>

            <div class=\"form-group\">
                {{ form_row(Form.Description, {attr: {class: 'form-control',placeholder:Lien.Description} }) }}
            </div>

            <div class=\"form-group\">
                {{ form_row(Form.URL, {attr: {class: 'form-control',value:Lien.URL} }) }}
            </div>

            <div class=\"form-group\">
                {{ form_row(Form.TAGS, {attr: {class: 'form-control',placeholder:Lien.TAGS} }) }}
                <p class=\"para_rouge\">Merci de renseigner les TAGS à nouveau</p>
            </div>

            <div class=\"form-group\">
                {{ form_row(Form.save, {attr: {class: 'btn btn-primary'} }) }}
            </div>

        {{ form_end(Form) }}

    </div>

{% endblock %}

{% block javascripts %}

    <script src=\"{{ asset(\"http://code.jquery.com/jquery-latest.min.js\") }}\"></script>
    <script src=\"{{ asset('build/edit_lien.js') }}\"></script>
    <script src=\"{{ asset('build/runtime.js') }}\"></script>

{% endblock %}", "admin/edit_lien.html.twig", "/var/www/html/aliptic/web_links_DB/symfony/web_links_DB/templates/admin/edit_lien.html.twig");
    }
}
