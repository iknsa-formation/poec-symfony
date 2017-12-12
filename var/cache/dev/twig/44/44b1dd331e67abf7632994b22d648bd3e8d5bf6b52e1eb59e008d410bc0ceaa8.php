<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e01badb5f2a3b58fe2a5eca492ffe7e889061fb7ae885eca0a00b830c85c2106 extends Twig_Template
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
        $__internal_383722eceb5231cc639bca1a3dcc7ad89fee2e86a9470ad0b95ccc64ba84a4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383722eceb5231cc639bca1a3dcc7ad89fee2e86a9470ad0b95ccc64ba84a4b8->enter($__internal_383722eceb5231cc639bca1a3dcc7ad89fee2e86a9470ad0b95ccc64ba84a4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_383722eceb5231cc639bca1a3dcc7ad89fee2e86a9470ad0b95ccc64ba84a4b8->leave($__internal_383722eceb5231cc639bca1a3dcc7ad89fee2e86a9470ad0b95ccc64ba84a4b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
