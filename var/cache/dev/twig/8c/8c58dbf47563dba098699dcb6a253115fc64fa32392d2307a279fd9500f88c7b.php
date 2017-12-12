<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e3e289aa53c49e534df1293cb1338d71490e458ad86561059d17f2e1806b7436 extends Twig_Template
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
        $__internal_ece42bbe5eb3f5c9af3df57de8d6ea2f7513f454d091941b70ffb61841bf2f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece42bbe5eb3f5c9af3df57de8d6ea2f7513f454d091941b70ffb61841bf2f31->enter($__internal_ece42bbe5eb3f5c9af3df57de8d6ea2f7513f454d091941b70ffb61841bf2f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ece42bbe5eb3f5c9af3df57de8d6ea2f7513f454d091941b70ffb61841bf2f31->leave($__internal_ece42bbe5eb3f5c9af3df57de8d6ea2f7513f454d091941b70ffb61841bf2f31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
