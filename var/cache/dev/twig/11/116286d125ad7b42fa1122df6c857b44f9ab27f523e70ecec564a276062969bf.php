<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8030e15f1b248cadda662395a74ecaf0442d506bad765ad3febec6b1b6bfc585 extends Twig_Template
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
        $__internal_b6d32ebc2de6d30651db7599e421b97408b650bcfce52cbdd0865a0c5c6c73f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d32ebc2de6d30651db7599e421b97408b650bcfce52cbdd0865a0c5c6c73f9->enter($__internal_b6d32ebc2de6d30651db7599e421b97408b650bcfce52cbdd0865a0c5c6c73f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_b6d32ebc2de6d30651db7599e421b97408b650bcfce52cbdd0865a0c5c6c73f9->leave($__internal_b6d32ebc2de6d30651db7599e421b97408b650bcfce52cbdd0865a0c5c6c73f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
