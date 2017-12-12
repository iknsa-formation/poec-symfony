<?php

/* :friend:index.html.twig */
class __TwigTemplate_52458d1a9f003cb1457e91b2434d9cd60ed287e525de7815af78c6970ff5a969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:index.html.twig", 1);
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
        $__internal_43ca91ea64ecce6fd163c40f6c8bd808872459ddc0ba1130d841c39515d84ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ca91ea64ecce6fd163c40f6c8bd808872459ddc0ba1130d841c39515d84ea0->enter($__internal_43ca91ea64ecce6fd163c40f6c8bd808872459ddc0ba1130d841c39515d84ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43ca91ea64ecce6fd163c40f6c8bd808872459ddc0ba1130d841c39515d84ea0->leave($__internal_43ca91ea64ecce6fd163c40f6c8bd808872459ddc0ba1130d841c39515d84ea0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df66a913722f47be81cb5353206d4856f98ac5a2e3340a3463e5d36a121b710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df66a913722f47be81cb5353206d4856f98ac5a2e3340a3463e5d36a121b710->enter($__internal_0df66a913722f47be81cb5353206d4856f98ac5a2e3340a3463e5d36a121b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friends list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                 <th>Tel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new Twig_Error_Runtime('Variable "friends" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "email", array()), "html", null, true);
            echo "</td>
                 <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "Tel", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["friend"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_new");
        echo "\">Create a new friend</a>
        </li>
    </ul>
";
        
        $__internal_0df66a913722f47be81cb5353206d4856f98ac5a2e3340a3463e5d36a121b710->leave($__internal_0df66a913722f47be81cb5353206d4856f98ac5a2e3340a3463e5d36a121b710_prof);

    }

    public function getTemplateName()
    {
        return ":friend:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Friends list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                 <th>Tel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for friend in friends %}
            <tr>
                <td><a href=\"{{ path('friend_show', { 'id': friend.id }) }}\">{{ friend.id }}</a></td>
                <td>{{ friend.name }}</td>
                <td>{{ friend.email }}</td>
                 <td>{{ friend.Tel }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('friend_show', { 'id': friend.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('friend_edit', { 'id': friend.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('friend_new') }}\">Create a new friend</a>
        </li>
    </ul>
{% endblock %}
", ":friend:index.html.twig", "/Applications/MAMP/htdocs/symfony3/app/Resources/views/friend/index.html.twig");
    }
}
