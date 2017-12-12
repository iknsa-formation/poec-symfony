<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_606150001b6f539dc98816cf72ed0a23deb598aabe0b69946381f4484c9b11a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_317a66ba965b5d148535ef0db2bf4e3aa53d3291bd0fe0ffe2d16328ed83c42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317a66ba965b5d148535ef0db2bf4e3aa53d3291bd0fe0ffe2d16328ed83c42d->enter($__internal_317a66ba965b5d148535ef0db2bf4e3aa53d3291bd0fe0ffe2d16328ed83c42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_317a66ba965b5d148535ef0db2bf4e3aa53d3291bd0fe0ffe2d16328ed83c42d->leave($__internal_317a66ba965b5d148535ef0db2bf4e3aa53d3291bd0fe0ffe2d16328ed83c42d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d6ea2f643869b2c6c8d5e2ff66f251954d67b58865c2d3b0e5dc4fcac886e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6ea2f643869b2c6c8d5e2ff66f251954d67b58865c2d3b0e5dc4fcac886e7c->enter($__internal_3d6ea2f643869b2c6c8d5e2ff66f251954d67b58865c2d3b0e5dc4fcac886e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3d6ea2f643869b2c6c8d5e2ff66f251954d67b58865c2d3b0e5dc4fcac886e7c->leave($__internal_3d6ea2f643869b2c6c8d5e2ff66f251954d67b58865c2d3b0e5dc4fcac886e7c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_131d19b4d185c601761173bef1490815d45827b4bf183cb72b5de5b74d850ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131d19b4d185c601761173bef1490815d45827b4bf183cb72b5de5b74d850ada->enter($__internal_131d19b4d185c601761173bef1490815d45827b4bf183cb72b5de5b74d850ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_131d19b4d185c601761173bef1490815d45827b4bf183cb72b5de5b74d850ada->leave($__internal_131d19b4d185c601761173bef1490815d45827b4bf183cb72b5de5b74d850ada_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
