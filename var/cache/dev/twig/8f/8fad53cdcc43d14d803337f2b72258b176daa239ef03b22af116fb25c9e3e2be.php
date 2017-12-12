<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_02f6246e1139459e81e340f616ebd3e19085bfd58a80936e6f3ada68ac99e8cd extends Twig_Template
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
        $__internal_90635d7c638e99b21eea1609778b858c1b9af517ffdb0ad6152cf0bba620fe48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90635d7c638e99b21eea1609778b858c1b9af517ffdb0ad6152cf0bba620fe48->enter($__internal_90635d7c638e99b21eea1609778b858c1b9af517ffdb0ad6152cf0bba620fe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_90635d7c638e99b21eea1609778b858c1b9af517ffdb0ad6152cf0bba620fe48->leave($__internal_90635d7c638e99b21eea1609778b858c1b9af517ffdb0ad6152cf0bba620fe48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
