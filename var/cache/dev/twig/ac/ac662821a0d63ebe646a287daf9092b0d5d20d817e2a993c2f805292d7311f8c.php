<?php

/* IKNSAAppBundle::layout.html.twig */
class __TwigTemplate_44da7e04c1e8a3a52e62ffba729e2a9676e464794d119d81451423df5759759e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f16949f85f59a560d387e97a3bd84d8bc19ef08832b4315807d5edb1b81ae46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f16949f85f59a560d387e97a3bd84d8bc19ef08832b4315807d5edb1b81ae46->enter($__internal_2f16949f85f59a560d387e97a3bd84d8bc19ef08832b4315807d5edb1b81ae46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAAppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    
        <title> Layout Testing </title>
    </head>

    <body>
    

     ";
        // line 11
        $this->displayBlock('navigation', $context, $blocks);
        // line 18
        echo "
    \t";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "    </body>
</html>";
        
        $__internal_2f16949f85f59a560d387e97a3bd84d8bc19ef08832b4315807d5edb1b81ae46->leave($__internal_2f16949f85f59a560d387e97a3bd84d8bc19ef08832b4315807d5edb1b81ae46_prof);

    }

    // line 11
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_89413a3682a36b31dc507067e41f88908abae6a3da9476fc87af8dbfcd588818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89413a3682a36b31dc507067e41f88908abae6a3da9476fc87af8dbfcd588818->enter($__internal_89413a3682a36b31dc507067e41f88908abae6a3da9476fc87af8dbfcd588818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 12
        echo "    
    \t<h3>Block navigation</h3>

";
        // line 15
        $this->loadTemplate("IKNSAAppBundle:default:navigation.html.twig", "IKNSAAppBundle::layout.html.twig", 15)->display($context);
        // line 16
        echo "      <hr>
";
        
        $__internal_89413a3682a36b31dc507067e41f88908abae6a3da9476fc87af8dbfcd588818->leave($__internal_89413a3682a36b31dc507067e41f88908abae6a3da9476fc87af8dbfcd588818_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf0b7210861fee9d0c7651c0d7db40bb01c7def690f5221ded9afb3442785ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0b7210861fee9d0c7651c0d7db40bb01c7def690f5221ded9afb3442785ab9->enter($__internal_cf0b7210861fee9d0c7651c0d7db40bb01c7def690f5221ded9afb3442785ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf0b7210861fee9d0c7651c0d7db40bb01c7def690f5221ded9afb3442785ab9->leave($__internal_cf0b7210861fee9d0c7651c0d7db40bb01c7def690f5221ded9afb3442785ab9_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAAppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  64 => 16,  62 => 15,  57 => 12,  51 => 11,  43 => 20,  41 => 19,  38 => 18,  36 => 11,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
    
        <title> Layout Testing </title>
    </head>

    <body>
    

     {% block navigation %}
    
    \t<h3>Block navigation</h3>

{% include 'IKNSAAppBundle:default:navigation.html.twig'%}
      <hr>
{% endblock %}

    \t{% block body %}{% endblock %}
    </body>
</html>", "IKNSAAppBundle::layout.html.twig", "/Applications/MAMP/htdocs/symfony3/src/IKNSA/AppBundle/Resources/views/layout.html.twig");
    }
}
