<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_24206210f722c0f652a6bbaef0e1be815d7748c8cf74558af43157318b2210e4 extends Twig_Template
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
        $__internal_c04e183569e6f86c5370fc89401a19c52a863017219232b993b752c7a7a47e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04e183569e6f86c5370fc89401a19c52a863017219232b993b752c7a7a47e6c->enter($__internal_c04e183569e6f86c5370fc89401a19c52a863017219232b993b752c7a7a47e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c04e183569e6f86c5370fc89401a19c52a863017219232b993b752c7a7a47e6c->leave($__internal_c04e183569e6f86c5370fc89401a19c52a863017219232b993b752c7a7a47e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
