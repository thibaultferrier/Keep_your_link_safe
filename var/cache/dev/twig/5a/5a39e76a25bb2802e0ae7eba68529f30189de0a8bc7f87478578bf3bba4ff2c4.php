<?php

/* rss/rss.xml.twig */
class __TwigTemplate_14f1d1fca5edd5c41fe9fe7e3fae6436e3e09d37c8268f9b3bfd384db16b5249 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rss/rss.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rss/rss.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
    <channel>
        <link>localhost:8000/rss</link>
        <title>Keep your link safe</title>
        <description>Save all you'll find while crawling the web</description>
        <copyright>Copyright T. FERRIER J. DE DAPPER</copyright>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Liens"]) || array_key_exists("Liens", $context) ? $context["Liens"] : (function () { throw new Twig_Error_Runtime('Variable "Liens" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 10
            echo "
            <item>
                <title>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "Titre", array()), "html", null, true);
            echo "</title>
                <description>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "Description", array()), "html", null, true);
            echo "</description>
                <link>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "URL", array()), "html", null, true);
            echo "</link>
            </item>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </channel>
</rss>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "rss/rss.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  55 => 14,  51 => 13,  47 => 12,  43 => 10,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
    <channel>
        <link>localhost:8000/rss</link>
        <title>Keep your link safe</title>
        <description>Save all you'll find while crawling the web</description>
        <copyright>Copyright T. FERRIER J. DE DAPPER</copyright>

        {% for lien in Liens %}

            <item>
                <title>{{ lien.Titre }}</title>
                <description>{{ lien.Description }}</description>
                <link>{{ lien.URL }}</link>
            </item>

        {% endfor %}
    </channel>
</rss>", "rss/rss.xml.twig", "/var/www/html/aliptic/web_links_DB/symfony/web_links_DB/templates/rss/rss.xml.twig");
    }
}
