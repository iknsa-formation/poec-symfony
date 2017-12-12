<?php

/* :friend:show.html.twig */
class __TwigTemplate_6b3e7584545bc955cf93a4ebf72f467526aeb3e1392b55826212aaf6975ed46a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:show.html.twig", 1);
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
        $__internal_8164ffecccd0594431190386debf891071de12aed9b1da0baee2399795350b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8164ffecccd0594431190386debf891071de12aed9b1da0baee2399795350b15->enter($__internal_8164ffecccd0594431190386debf891071de12aed9b1da0baee2399795350b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8164ffecccd0594431190386debf891071de12aed9b1da0baee2399795350b15->leave($__internal_8164ffecccd0594431190386debf891071de12aed9b1da0baee2399795350b15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48c9331fab25a03652b60518f145c3bf0fed5e8a8d7c18635f15be3856ece9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c9331fab25a03652b60518f145c3bf0fed5e8a8d7c18635f15be3856ece9de->enter($__internal_48c9331fab25a03652b60518f145c3bf0fed5e8a8d7c18635f15be3856ece9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friend</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["friend"]) || array_key_exists("friend", $context) ? $context["friend"] : (function () { throw new Twig_Error_Runtime('Variable "friend" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["friend"]) || array_key_exists("friend", $context) ? $context["friend"] : (function () { throw new Twig_Error_Runtime('Variable "friend" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["friend"]) || array_key_exists("friend", $context) ? $context["friend"] : (function () { throw new Twig_Error_Runtime('Variable "friend" does not exist.', 18, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Tel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["friend"]) || array_key_exists("friend", $context) ? $context["friend"] : (function () { throw new Twig_Error_Runtime('Variable "friend" does not exist.', 22, $this->getSourceContext()); })()), "Tel", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["friend"]) || array_key_exists("friend", $context) ? $context["friend"] : (function () { throw new Twig_Error_Runtime('Variable "friend" does not exist.', 32, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
       
        <li>
            ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 36, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 38, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_48c9331fab25a03652b60518f145c3bf0fed5e8a8d7c18635f15be3856ece9de->leave($__internal_48c9331fab25a03652b60518f145c3bf0fed5e8a8d7c18635f15be3856ece9de_prof);

    }

    public function getTemplateName()
    {
        return ":friend:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  92 => 36,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Friend</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ friend.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ friend.name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ friend.email }}</td>
            </tr>
             <tr>
                <th>Tel</th>
                <td>{{ friend.Tel }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('friend_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('friend_edit', { 'id': friend.id }) }}\">Edit</a>
        </li>
       
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":friend:show.html.twig", "/Applications/MAMP/htdocs/symfony3/app/Resources/views/friend/show.html.twig");
    }
}
