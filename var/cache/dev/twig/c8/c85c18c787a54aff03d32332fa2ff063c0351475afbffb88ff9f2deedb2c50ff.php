<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e721eb7b0bf918b3366d2d9c7d25d9d649a2f7f33c7ef048fb01707a643ab89c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a91139d020c1116cd7d684541a9a2915ccf8c5355fc69236fc4d01be370d0105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91139d020c1116cd7d684541a9a2915ccf8c5355fc69236fc4d01be370d0105->enter($__internal_a91139d020c1116cd7d684541a9a2915ccf8c5355fc69236fc4d01be370d0105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91139d020c1116cd7d684541a9a2915ccf8c5355fc69236fc4d01be370d0105->leave($__internal_a91139d020c1116cd7d684541a9a2915ccf8c5355fc69236fc4d01be370d0105_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f77721986f30a955c080bfef63d1316f6e8a7085e5bc0de6d7d48228223b777f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77721986f30a955c080bfef63d1316f6e8a7085e5bc0de6d7d48228223b777f->enter($__internal_f77721986f30a955c080bfef63d1316f6e8a7085e5bc0de6d7d48228223b777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f77721986f30a955c080bfef63d1316f6e8a7085e5bc0de6d7d48228223b777f->leave($__internal_f77721986f30a955c080bfef63d1316f6e8a7085e5bc0de6d7d48228223b777f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e4b9449e836d339c767e4a16823af4c28b06d41c6bf9b0207c5203d5fa79475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4b9449e836d339c767e4a16823af4c28b06d41c6bf9b0207c5203d5fa79475->enter($__internal_9e4b9449e836d339c767e4a16823af4c28b06d41c6bf9b0207c5203d5fa79475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e4b9449e836d339c767e4a16823af4c28b06d41c6bf9b0207c5203d5fa79475->leave($__internal_9e4b9449e836d339c767e4a16823af4c28b06d41c6bf9b0207c5203d5fa79475_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4127fb33b6fda7e41229ee575447947ffd56298252c179bca49919ccee6f01db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4127fb33b6fda7e41229ee575447947ffd56298252c179bca49919ccee6f01db->enter($__internal_4127fb33b6fda7e41229ee575447947ffd56298252c179bca49919ccee6f01db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_4127fb33b6fda7e41229ee575447947ffd56298252c179bca49919ccee6f01db->leave($__internal_4127fb33b6fda7e41229ee575447947ffd56298252c179bca49919ccee6f01db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
