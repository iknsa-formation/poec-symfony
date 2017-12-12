<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1972755c00c494a8f3224f1f6b8a292960316a5ea38547b2164297b4c850f3f0 extends Twig_Template
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
        $__internal_e801b485a066e431c01a455ffe4137ea8fac3050bfafc4651b71b975a1c95a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e801b485a066e431c01a455ffe4137ea8fac3050bfafc4651b71b975a1c95a52->enter($__internal_e801b485a066e431c01a455ffe4137ea8fac3050bfafc4651b71b975a1c95a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_e801b485a066e431c01a455ffe4137ea8fac3050bfafc4651b71b975a1c95a52->leave($__internal_e801b485a066e431c01a455ffe4137ea8fac3050bfafc4651b71b975a1c95a52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
