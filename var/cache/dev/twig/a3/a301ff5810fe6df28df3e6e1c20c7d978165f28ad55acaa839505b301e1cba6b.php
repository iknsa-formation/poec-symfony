<?php

/* IKNSAAppBundle::layout.html.twig */
class __TwigTemplate_466b3c76090f3bf37d9ea32fb25fb35ea00dc555d38091fea3d6a8f874cac437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25c4eedda4b5bc69a145580162862452f4b653851e212f31b1c99c661f9cb6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c4eedda4b5bc69a145580162862452f4b653851e212f31b1c99c661f9cb6f5->enter($__internal_25c4eedda4b5bc69a145580162862452f4b653851e212f31b1c99c661f9cb6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAAppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    
        <title> Layout Testing </title>
    </head>

    <body>
    
    \t\t";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "      
     
    ";
        // line 16
        $this->displayBlock('navigation', $context, $blocks);
        // line 23
        echo "
    \t";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "    </body>
</html>";
        
        $__internal_25c4eedda4b5bc69a145580162862452f4b653851e212f31b1c99c661f9cb6f5->leave($__internal_25c4eedda4b5bc69a145580162862452f4b653851e212f31b1c99c661f9cb6f5_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_98bffbcb7d43ce35322e9bb7a9ba7f269da7f888a33c94b0c36bf3a8fd34af89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bffbcb7d43ce35322e9bb7a9ba7f269da7f888a33c94b0c36bf3a8fd34af89->enter($__internal_98bffbcb7d43ce35322e9bb7a9ba7f269da7f888a33c94b0c36bf3a8fd34af89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    \t\t<h1>header</h1>
      <hr>
      ";
        
        $__internal_98bffbcb7d43ce35322e9bb7a9ba7f269da7f888a33c94b0c36bf3a8fd34af89->leave($__internal_98bffbcb7d43ce35322e9bb7a9ba7f269da7f888a33c94b0c36bf3a8fd34af89_prof);

    }

    // line 16
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ce23a92005c769f2f40cf01e769514b8969e62f7c6c296f916ee723f3eb8f4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce23a92005c769f2f40cf01e769514b8969e62f7c6c296f916ee723f3eb8f4b7->enter($__internal_ce23a92005c769f2f40cf01e769514b8969e62f7c6c296f916ee723f3eb8f4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 17
        echo "    
    \t<h3>Block navigation</h3>

";
        // line 20
        $this->loadTemplate("IKNSAAppBundle:default:navigation.html.twig", "IKNSAAppBundle::layout.html.twig", 20)->display($context);
        // line 21
        echo "      <hr>
";
        
        $__internal_ce23a92005c769f2f40cf01e769514b8969e62f7c6c296f916ee723f3eb8f4b7->leave($__internal_ce23a92005c769f2f40cf01e769514b8969e62f7c6c296f916ee723f3eb8f4b7_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_1189bca9183de4d5d14e924b1ca0e49a0327f5fe13d61fca3ec8446edb84b9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1189bca9183de4d5d14e924b1ca0e49a0327f5fe13d61fca3ec8446edb84b9d6->enter($__internal_1189bca9183de4d5d14e924b1ca0e49a0327f5fe13d61fca3ec8446edb84b9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1189bca9183de4d5d14e924b1ca0e49a0327f5fe13d61fca3ec8446edb84b9d6->leave($__internal_1189bca9183de4d5d14e924b1ca0e49a0327f5fe13d61fca3ec8446edb84b9d6_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAAppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  85 => 21,  83 => 20,  78 => 17,  72 => 16,  63 => 11,  57 => 10,  49 => 25,  47 => 24,  44 => 23,  42 => 16,  38 => 14,  36 => 10,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
    
        <title> Layout Testing </title>
    </head>

    <body>
    
    \t\t{% block header%}
    \t\t<h1>header</h1>
      <hr>
      {% endblock %}
      
     
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
