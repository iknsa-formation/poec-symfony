<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_409ea32335eafa18e021a62ee35fbff2f8e8bf733d7bea1676037d41074d9bdd extends Twig_Template
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
        $__internal_0ccbb198291172af2b29f7092ddd3d04ff4bf53230a10005cfd7263e90c3e6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccbb198291172af2b29f7092ddd3d04ff4bf53230a10005cfd7263e90c3e6b6->enter($__internal_0ccbb198291172af2b29f7092ddd3d04ff4bf53230a10005cfd7263e90c3e6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0ccbb198291172af2b29f7092ddd3d04ff4bf53230a10005cfd7263e90c3e6b6->leave($__internal_0ccbb198291172af2b29f7092ddd3d04ff4bf53230a10005cfd7263e90c3e6b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
