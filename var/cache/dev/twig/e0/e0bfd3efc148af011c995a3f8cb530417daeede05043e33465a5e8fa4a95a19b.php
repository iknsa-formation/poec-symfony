<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_061f9834acfc021eb99d4b74b231dafce0eddfbf34ee330a8fa067d896a4d2c6 extends Twig_Template
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
        $__internal_8837bfda366cd8004a69dbcd33838bbcdc16ebca1c8cc9914917695c49d6a0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8837bfda366cd8004a69dbcd33838bbcdc16ebca1c8cc9914917695c49d6a0ea->enter($__internal_8837bfda366cd8004a69dbcd33838bbcdc16ebca1c8cc9914917695c49d6a0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8837bfda366cd8004a69dbcd33838bbcdc16ebca1c8cc9914917695c49d6a0ea->leave($__internal_8837bfda366cd8004a69dbcd33838bbcdc16ebca1c8cc9914917695c49d6a0ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
