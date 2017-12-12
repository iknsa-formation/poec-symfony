<?php

/* IKNSAAppBundle:Default:index.html.twig */
class __TwigTemplate_dd6b54176cc7e2a8509fce7211c32fbb1ea21cbfc5353c0e746a63dc7ef95974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("IKNSAAppBundle::layout.html.twig", "IKNSAAppBundle:Default:index.html.twig", 2);
        $this->blocks = array(
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
        $__internal_8f0ec9ac337fec3b3ed188b2bef2c536680ad27b8f9f1b3159c41d119716da11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0ec9ac337fec3b3ed188b2bef2c536680ad27b8f9f1b3159c41d119716da11->enter($__internal_8f0ec9ac337fec3b3ed188b2bef2c536680ad27b8f9f1b3159c41d119716da11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0ec9ac337fec3b3ed188b2bef2c536680ad27b8f9f1b3159c41d119716da11->leave($__internal_8f0ec9ac337fec3b3ed188b2bef2c536680ad27b8f9f1b3159c41d119716da11_prof);

    }

    // line 4
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d9c6ace5d7e207e6f1d44c89cadb7d2bc8c7858e3ee19dffa31d603c60ffd7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c6ace5d7e207e6f1d44c89cadb7d2bc8c7858e3ee19dffa31d603c60ffd7b3->enter($__internal_d9c6ace5d7e207e6f1d44c89cadb7d2bc8c7858e3ee19dffa31d603c60ffd7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        
        $__internal_d9c6ace5d7e207e6f1d44c89cadb7d2bc8c7858e3ee19dffa31d603c60ffd7b3->leave($__internal_d9c6ace5d7e207e6f1d44c89cadb7d2bc8c7858e3ee19dffa31d603c60ffd7b3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0275a8707c5a5a7808f818da52e74e8d8f1a95f43078073dfa431033403fa9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0275a8707c5a5a7808f818da52e74e8d8f1a95f43078073dfa431033403fa9fe->enter($__internal_0275a8707c5a5a7808f818da52e74e8d8f1a95f43078073dfa431033403fa9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "tout notre contenue 

";
        
        $__internal_0275a8707c5a5a7808f818da52e74e8d8f1a95f43078073dfa431033403fa9fe->leave($__internal_0275a8707c5a5a7808f818da52e74e8d8f1a95f43078073dfa431033403fa9fe_prof);

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
        return array (  52 => 9,  46 => 8,  35 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'IKNSAAppBundle::layout.html.twig'%} 

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
