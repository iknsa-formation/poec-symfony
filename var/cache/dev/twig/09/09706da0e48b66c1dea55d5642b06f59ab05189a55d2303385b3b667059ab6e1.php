<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a959dab8fb622fb66517f3240a45524fe0b75b3fa789cd6421244656f2ea734f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd5b17bde85c74c522534c436079fbe8184bc5b7eb355d6f3acaba15f934d7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5b17bde85c74c522534c436079fbe8184bc5b7eb355d6f3acaba15f934d7eb->enter($__internal_cd5b17bde85c74c522534c436079fbe8184bc5b7eb355d6f3acaba15f934d7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5b17bde85c74c522534c436079fbe8184bc5b7eb355d6f3acaba15f934d7eb->leave($__internal_cd5b17bde85c74c522534c436079fbe8184bc5b7eb355d6f3acaba15f934d7eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_821e2c1b98536cd4b018a628cc559393aa54fd042f172f3d19a5e3af288f70b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821e2c1b98536cd4b018a628cc559393aa54fd042f172f3d19a5e3af288f70b3->enter($__internal_821e2c1b98536cd4b018a628cc559393aa54fd042f172f3d19a5e3af288f70b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_821e2c1b98536cd4b018a628cc559393aa54fd042f172f3d19a5e3af288f70b3->leave($__internal_821e2c1b98536cd4b018a628cc559393aa54fd042f172f3d19a5e3af288f70b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cd9016a3107e9377571110623b6ffb3fac7aca75cda18c6bc60bbab98cf9ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd9016a3107e9377571110623b6ffb3fac7aca75cda18c6bc60bbab98cf9ab5->enter($__internal_8cd9016a3107e9377571110623b6ffb3fac7aca75cda18c6bc60bbab98cf9ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8cd9016a3107e9377571110623b6ffb3fac7aca75cda18c6bc60bbab98cf9ab5->leave($__internal_8cd9016a3107e9377571110623b6ffb3fac7aca75cda18c6bc60bbab98cf9ab5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_99fab2ad3b70bce80089c53a168027111a847649396bef329eea7a2fd614b013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fab2ad3b70bce80089c53a168027111a847649396bef329eea7a2fd614b013->enter($__internal_99fab2ad3b70bce80089c53a168027111a847649396bef329eea7a2fd614b013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_99fab2ad3b70bce80089c53a168027111a847649396bef329eea7a2fd614b013->leave($__internal_99fab2ad3b70bce80089c53a168027111a847649396bef329eea7a2fd614b013_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
