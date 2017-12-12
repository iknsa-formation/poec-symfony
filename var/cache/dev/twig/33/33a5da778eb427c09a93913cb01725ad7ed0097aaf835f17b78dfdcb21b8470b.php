<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e164f09a2eff7bbcf00b4efa613aad6dbf53c18c17d0d46f08dc5574fb33b7f0 extends Twig_Template
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
        $__internal_029a7fac5e1884b2e24d0aa8178234e0724a1c9940f99d3e4c13b6d3339c8984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029a7fac5e1884b2e24d0aa8178234e0724a1c9940f99d3e4c13b6d3339c8984->enter($__internal_029a7fac5e1884b2e24d0aa8178234e0724a1c9940f99d3e4c13b6d3339c8984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_029a7fac5e1884b2e24d0aa8178234e0724a1c9940f99d3e4c13b6d3339c8984->leave($__internal_029a7fac5e1884b2e24d0aa8178234e0724a1c9940f99d3e4c13b6d3339c8984_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
