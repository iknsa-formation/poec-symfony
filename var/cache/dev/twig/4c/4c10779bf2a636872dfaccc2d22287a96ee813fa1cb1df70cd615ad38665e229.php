<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b9990551160c4895b127e54c99dda73a14c8b48fcab9ea0c24b976ca6b463de5 extends Twig_Template
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
        $__internal_60deeb2f75a22b2824113b2b42ce951084d022d7083230e21f6efcf6fddf2b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60deeb2f75a22b2824113b2b42ce951084d022d7083230e21f6efcf6fddf2b17->enter($__internal_60deeb2f75a22b2824113b2b42ce951084d022d7083230e21f6efcf6fddf2b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_60deeb2f75a22b2824113b2b42ce951084d022d7083230e21f6efcf6fddf2b17->leave($__internal_60deeb2f75a22b2824113b2b42ce951084d022d7083230e21f6efcf6fddf2b17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
