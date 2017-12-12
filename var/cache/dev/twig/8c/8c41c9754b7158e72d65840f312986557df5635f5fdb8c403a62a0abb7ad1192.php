<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7e163bbbf6a55f85513c36c24c672a052e5dd02828b3d7707342b53c58d4fbc8 extends Twig_Template
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
        $__internal_dcf311f42179bf5e2e7090fb2d17a9384a785866c1dd3846a6c30380dedf1bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf311f42179bf5e2e7090fb2d17a9384a785866c1dd3846a6c30380dedf1bff->enter($__internal_dcf311f42179bf5e2e7090fb2d17a9384a785866c1dd3846a6c30380dedf1bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_dcf311f42179bf5e2e7090fb2d17a9384a785866c1dd3846a6c30380dedf1bff->leave($__internal_dcf311f42179bf5e2e7090fb2d17a9384a785866c1dd3846a6c30380dedf1bff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
