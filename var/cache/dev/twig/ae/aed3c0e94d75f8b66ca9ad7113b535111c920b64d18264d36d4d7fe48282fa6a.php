<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_25213fbb9919567726dd4e7af1e10d52075e565c9fa2f7f28bf3ffb59f25cc8d extends Twig_Template
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
        $__internal_d62a6f1bbdba2613425503588d3c4f9f94178e8ec456f4a1764b31b4ba6f322e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62a6f1bbdba2613425503588d3c4f9f94178e8ec456f4a1764b31b4ba6f322e->enter($__internal_d62a6f1bbdba2613425503588d3c4f9f94178e8ec456f4a1764b31b4ba6f322e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d62a6f1bbdba2613425503588d3c4f9f94178e8ec456f4a1764b31b4ba6f322e->leave($__internal_d62a6f1bbdba2613425503588d3c4f9f94178e8ec456f4a1764b31b4ba6f322e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
