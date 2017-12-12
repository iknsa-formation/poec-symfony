<?php

/* :friend:new.html.twig */
class __TwigTemplate_5da676118f76489f4b1e91638087fb206449bae59c0cec5611c582e27686be16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd7270f6946f4960248b77619a732db6377b8bb3b5f3685a793c33e9e89384a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7270f6946f4960248b77619a732db6377b8bb3b5f3685a793c33e9e89384a3->enter($__internal_bd7270f6946f4960248b77619a732db6377b8bb3b5f3685a793c33e9e89384a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd7270f6946f4960248b77619a732db6377b8bb3b5f3685a793c33e9e89384a3->leave($__internal_bd7270f6946f4960248b77619a732db6377b8bb3b5f3685a793c33e9e89384a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c45b80ece96a32b244b1b24ff608d5e1b28e7f5167b61de62ad6fa69a96e8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c45b80ece96a32b244b1b24ff608d5e1b28e7f5167b61de62ad6fa69a96e8e3->enter($__internal_0c45b80ece96a32b244b1b24ff608d5e1b28e7f5167b61de62ad6fa69a96e8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friend creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0c45b80ece96a32b244b1b24ff608d5e1b28e7f5167b61de62ad6fa69a96e8e3->leave($__internal_0c45b80ece96a32b244b1b24ff608d5e1b28e7f5167b61de62ad6fa69a96e8e3_prof);

    }

    public function getTemplateName()
    {
        return ":friend:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Friend creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('friend_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":friend:new.html.twig", "/Applications/MAMP/htdocs/symfony3/app/Resources/views/friend/new.html.twig");
    }
}
