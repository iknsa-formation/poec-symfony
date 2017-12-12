<?php

/* IKNSAAppBundle:Default:index.html.twig */
class __TwigTemplate_755dec65e9ef7758e1419ab3ee729615a0673682cc018f5ea0635b4a24e8c925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("IKNSAAppBundle::layout.html.twig", "IKNSAAppBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IKNSAAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e55aca7fcf5a5b6a8446158e971550b8a1273885211da50c3959dfc92efd5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e55aca7fcf5a5b6a8446158e971550b8a1273885211da50c3959dfc92efd5c3->enter($__internal_4e55aca7fcf5a5b6a8446158e971550b8a1273885211da50c3959dfc92efd5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e55aca7fcf5a5b6a8446158e971550b8a1273885211da50c3959dfc92efd5c3->leave($__internal_4e55aca7fcf5a5b6a8446158e971550b8a1273885211da50c3959dfc92efd5c3_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_0c0ee18f16c42e6183eb4605effed5b10be0f6b8a4586121259a7e7dcd6d96da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0ee18f16c42e6183eb4605effed5b10be0f6b8a4586121259a7e7dcd6d96da->enter($__internal_0c0ee18f16c42e6183eb4605effed5b10be0f6b8a4586121259a7e7dcd6d96da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " <h1>index</h1>";
        
        $__internal_0c0ee18f16c42e6183eb4605effed5b10be0f6b8a4586121259a7e7dcd6d96da->leave($__internal_0c0ee18f16c42e6183eb4605effed5b10be0f6b8a4586121259a7e7dcd6d96da_prof);

    }

    // line 5
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_cd1254df63af8c7d9538fae5d2d91e17a6de1ecfb69c87e11f1493d9172acde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1254df63af8c7d9538fae5d2d91e17a6de1ecfb69c87e11f1493d9172acde5->enter($__internal_cd1254df63af8c7d9538fae5d2d91e17a6de1ecfb69c87e11f1493d9172acde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        
        $__internal_cd1254df63af8c7d9538fae5d2d91e17a6de1ecfb69c87e11f1493d9172acde5->leave($__internal_cd1254df63af8c7d9538fae5d2d91e17a6de1ecfb69c87e11f1493d9172acde5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a68d70a044ded3190ba730f4677fd437bdb8064cfaca1f195c3d0f5a7e2d04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a68d70a044ded3190ba730f4677fd437bdb8064cfaca1f195c3d0f5a7e2d04b->enter($__internal_5a68d70a044ded3190ba730f4677fd437bdb8064cfaca1f195c3d0f5a7e2d04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "tout notre contenue 

";
        
        $__internal_5a68d70a044ded3190ba730f4677fd437bdb8064cfaca1f195c3d0f5a7e2d04b->leave($__internal_5a68d70a044ded3190ba730f4677fd437bdb8064cfaca1f195c3d0f5a7e2d04b_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 9,  48 => 5,  36 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'IKNSAAppBundle::layout.html.twig'%} 

{% block header%} <h1>index</h1>{% endblock%}
{% block navigation%}{% endblock %}



{% block body%}
tout notre contenue 

{% endblock %}


{#
commmence le commentaire
{% include 'IKNSAAppBundle:views:fileToInclude.html.twig' %}

{% for i in range(0, 10, STEP=2) %}

{{ loop.index }} => {{i}}<br>

{% endfor %}

{% set myArray=[\"Alfred\",\"<i>hitchcok</i>\",\"Arsene\",\"Lupin\"] %}

{% for nom in myArray %}
{{ loop.index }} => 
\t\t\t\t\t<b>nom upper
\t\t\t\t\t<b>{{nom|upper}}
\t\t\t\t\t<br><br>\t
\t\t\t\t\t<b>{{nom|lower}}\t
{% endfor %} <br>
#}



", "IKNSAAppBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symfony3/src/IKNSA/AppBundle/Resources/views/Default/index.html.twig");
    }
}
