<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_743087b54d6272a811ab8a1b6c342868744fd776735d45a5225212178521a79b extends Twig_Template
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
        $__internal_b14d22ea296a5125320b0763832785c3c1a13562bc83e836ea8e8905dd97b604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14d22ea296a5125320b0763832785c3c1a13562bc83e836ea8e8905dd97b604->enter($__internal_b14d22ea296a5125320b0763832785c3c1a13562bc83e836ea8e8905dd97b604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b14d22ea296a5125320b0763832785c3c1a13562bc83e836ea8e8905dd97b604->leave($__internal_b14d22ea296a5125320b0763832785c3c1a13562bc83e836ea8e8905dd97b604_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
