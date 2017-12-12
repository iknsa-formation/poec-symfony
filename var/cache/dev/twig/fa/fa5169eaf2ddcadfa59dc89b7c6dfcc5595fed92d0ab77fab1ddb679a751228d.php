<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf5c06497bd2a4f2975b9b83e068b79f316d9c4d643d061de4ea39264f9c52ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4efe1e321c3ef214862455730119370ab943ed087f123950b1fd7d0f7a0bbf20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efe1e321c3ef214862455730119370ab943ed087f123950b1fd7d0f7a0bbf20->enter($__internal_4efe1e321c3ef214862455730119370ab943ed087f123950b1fd7d0f7a0bbf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4efe1e321c3ef214862455730119370ab943ed087f123950b1fd7d0f7a0bbf20->leave($__internal_4efe1e321c3ef214862455730119370ab943ed087f123950b1fd7d0f7a0bbf20_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
