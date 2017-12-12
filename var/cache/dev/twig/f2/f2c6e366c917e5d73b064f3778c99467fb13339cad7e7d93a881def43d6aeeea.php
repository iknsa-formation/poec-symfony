<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b159f38b71a6ba960b4321780ec012fdb436b49ce83e53d662134a6e2f7ae88e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d91afd4c4bc6191234a2c0276206e7f621d98ad9a7ec8f39875f204030b7623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d91afd4c4bc6191234a2c0276206e7f621d98ad9a7ec8f39875f204030b7623->enter($__internal_8d91afd4c4bc6191234a2c0276206e7f621d98ad9a7ec8f39875f204030b7623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d91afd4c4bc6191234a2c0276206e7f621d98ad9a7ec8f39875f204030b7623->leave($__internal_8d91afd4c4bc6191234a2c0276206e7f621d98ad9a7ec8f39875f204030b7623_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61228d39231bfb1a8ceba42735d26de8f6d91b19797ef739adc8ae248e27e705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61228d39231bfb1a8ceba42735d26de8f6d91b19797ef739adc8ae248e27e705->enter($__internal_61228d39231bfb1a8ceba42735d26de8f6d91b19797ef739adc8ae248e27e705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_61228d39231bfb1a8ceba42735d26de8f6d91b19797ef739adc8ae248e27e705->leave($__internal_61228d39231bfb1a8ceba42735d26de8f6d91b19797ef739adc8ae248e27e705_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad29c5cc3567741ab6a8ea525b4621200348d04f26b8679998c55579708369cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad29c5cc3567741ab6a8ea525b4621200348d04f26b8679998c55579708369cc->enter($__internal_ad29c5cc3567741ab6a8ea525b4621200348d04f26b8679998c55579708369cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad29c5cc3567741ab6a8ea525b4621200348d04f26b8679998c55579708369cc->leave($__internal_ad29c5cc3567741ab6a8ea525b4621200348d04f26b8679998c55579708369cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02e5b72bd9fd899fe7aa703c409d3705d7c60c82a71b14c13f7603bf0622a151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e5b72bd9fd899fe7aa703c409d3705d7c60c82a71b14c13f7603bf0622a151->enter($__internal_02e5b72bd9fd899fe7aa703c409d3705d7c60c82a71b14c13f7603bf0622a151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_02e5b72bd9fd899fe7aa703c409d3705d7c60c82a71b14c13f7603bf0622a151->leave($__internal_02e5b72bd9fd899fe7aa703c409d3705d7c60c82a71b14c13f7603bf0622a151_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
