<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_058d6425aca1cae3d9760ef46389eb13614b7c55032df288577fe5a9799df598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_85997c0a2d007c3bdba86368df4162e333409d71177c3176ff1dae721dbd1bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85997c0a2d007c3bdba86368df4162e333409d71177c3176ff1dae721dbd1bc1->enter($__internal_85997c0a2d007c3bdba86368df4162e333409d71177c3176ff1dae721dbd1bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85997c0a2d007c3bdba86368df4162e333409d71177c3176ff1dae721dbd1bc1->leave($__internal_85997c0a2d007c3bdba86368df4162e333409d71177c3176ff1dae721dbd1bc1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7a5831cb2b5ed651339e0cc27d093d57d6d632ab264d7e0c59944db2f817c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a5831cb2b5ed651339e0cc27d093d57d6d632ab264d7e0c59944db2f817c8b->enter($__internal_f7a5831cb2b5ed651339e0cc27d093d57d6d632ab264d7e0c59944db2f817c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f7a5831cb2b5ed651339e0cc27d093d57d6d632ab264d7e0c59944db2f817c8b->leave($__internal_f7a5831cb2b5ed651339e0cc27d093d57d6d632ab264d7e0c59944db2f817c8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_578170a847c0691c31ff3f12d8f01bbac58854f174c2fd46c827f42d25f2ab4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578170a847c0691c31ff3f12d8f01bbac58854f174c2fd46c827f42d25f2ab4e->enter($__internal_578170a847c0691c31ff3f12d8f01bbac58854f174c2fd46c827f42d25f2ab4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_578170a847c0691c31ff3f12d8f01bbac58854f174c2fd46c827f42d25f2ab4e->leave($__internal_578170a847c0691c31ff3f12d8f01bbac58854f174c2fd46c827f42d25f2ab4e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_828332be76e0bd3b6faccade10c8aea8ee190821b4d860c1b70417ea371750c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828332be76e0bd3b6faccade10c8aea8ee190821b4d860c1b70417ea371750c1->enter($__internal_828332be76e0bd3b6faccade10c8aea8ee190821b4d860c1b70417ea371750c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_828332be76e0bd3b6faccade10c8aea8ee190821b4d860c1b70417ea371750c1->leave($__internal_828332be76e0bd3b6faccade10c8aea8ee190821b4d860c1b70417ea371750c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
