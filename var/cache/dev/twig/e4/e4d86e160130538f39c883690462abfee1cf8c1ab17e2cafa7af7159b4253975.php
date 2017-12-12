<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0a28636cb75f407338569911fef696372f1d3cb1b1aef2a977a8cc4e5f1a9a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a2b5924bba6e714b452eef1dc8936e9a944ed1f1836fbfbd341a4ff47da770c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2b5924bba6e714b452eef1dc8936e9a944ed1f1836fbfbd341a4ff47da770c->enter($__internal_0a2b5924bba6e714b452eef1dc8936e9a944ed1f1836fbfbd341a4ff47da770c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0a2b5924bba6e714b452eef1dc8936e9a944ed1f1836fbfbd341a4ff47da770c->leave($__internal_0a2b5924bba6e714b452eef1dc8936e9a944ed1f1836fbfbd341a4ff47da770c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9340b6f8c9b6351ba75796b9b298c9c07b8fa15e2457bfde716f825aec41a6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9340b6f8c9b6351ba75796b9b298c9c07b8fa15e2457bfde716f825aec41a6e0->enter($__internal_9340b6f8c9b6351ba75796b9b298c9c07b8fa15e2457bfde716f825aec41a6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9340b6f8c9b6351ba75796b9b298c9c07b8fa15e2457bfde716f825aec41a6e0->leave($__internal_9340b6f8c9b6351ba75796b9b298c9c07b8fa15e2457bfde716f825aec41a6e0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
